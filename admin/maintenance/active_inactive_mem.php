<?php
// Get the current date
$currentDate = date("Y-m-d");

// Calculate the first day of the current month
$firstDayOfMonth = date("Y-m-01");

// Check if it's the first day of the month
if ($currentDate === $firstDayOfMonth) {
    // Reset the payment status for all users
    $conn->query("UPDATE users SET status = 'Inactive'");
}

// Retrieve the list of members with their payment status
$qry = $conn->query("SELECT u.id, u.date_added, u.firstname, u.lastname,
                    (SELECT MAX(t.account_number) FROM transaction_list t WHERE t.user_id = u.id) AS account_name
                    FROM users u;");

// Check the payment status and update the user's status in the database
while ($row = $qry->fetch_assoc()) {
    if ($row['account_name'] != null) {
        // User has made a payment
        $status = 'Active';
    } else {
        // User has not made a payment
        $status = 'Inactive';
    }
    
    // Update the user's status in the database
    $conn->query("UPDATE users SET status = '$status' WHERE id = {$row['id']}");
}
?>

<!-- Display the list of members -->
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">List of Active and Inactive Members</h3>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <table class="table table-bordered table-stripped">
                <colgroup>
                    <col width="5%">
                    <col width="15%">
                    <col width="15%">
                    <col width="15%">
                    <col width="25%">
                </colgroup>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date Added</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    $qry = $conn->query("SELECT * FROM users");
                    while ($row = $qry->fetch_assoc()) {
                        $status = isset($row['status']) ? $row['status'] : 'Inactive';
                    ?>
                        <tr>
                            <td class="text-center"><?php echo $i++; ?></td>
                            <td class="text-right"><?php echo date("Y-m-d H:i", strtotime($row['date_added'])) ?></td>
                            <td><?php echo $row['firstname'] ?></td>
                            <td><p class="m-0 truncate-1"><?php echo $row['lastname'] ?></p></td>
                            <td align="center">
                                <span class="badge <?php echo ($status === 'Active') ? 'badge-success' : 'badge-danger'; ?>"><?php echo $status; ?></span>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
