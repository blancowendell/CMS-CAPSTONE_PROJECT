<?php
// Get the current date
$currentDate = date("Y-m-d");

// Calculate the first day of the current month
$firstDayOfMonth = date("Y-m-01");

// Check if it's the first day of the month
if ($currentDate === $firstDayOfMonth) {
    // Reset the payment status for all users
    $resetStatusQuery = "UPDATE users SET payment_status = 'Pending'";
    if (!$conn->query($resetStatusQuery)) {
        echo "Query Error: " . $conn->error;
    }
}

// Include PHPMailer autoloader
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

// Retrieve the list of members with their payment status, email, username
$memberQuery = "SELECT u.id, u.date_added, u.firstname, u.lastname, u.username, MAX(t.account_number) AS account_number
                FROM users u
                LEFT JOIN transaction_list t ON u.id = t.user_id
                GROUP BY u.id;";
$qry = $conn->query($memberQuery);

if (!$qry) {
    echo "Query Error: " . $conn->error;
} else {
    if ($qry->num_rows > 0) {
        ?>


        <!-- Display the list of members -->
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">List of Paid and Pending Members</h3>
                <form method="post">
                    <button type="submit" name="send_emails" class="btn btn-primary float-right">Send Reminder Emails</button>
                </form>
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
                            <col width="25%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date Added</th>
                                <th>Username</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            while ($row = $qry->fetch_assoc()) {
                                $status = isset($row['account_number']) ? ($row['account_number'] != null ? 'Paid' : 'Pending') : 'Pending';
                                ?>
                                <tr>
                                    <td class="text-center"><?php echo $i++; ?></td>
                                    <td class="text-right"><?php echo date("Y-m-d H:i", strtotime($row['date_added'])) ?></td>
                                    <td><?php echo $row['username'] ?></td>
                                    <td><?php echo $row['firstname'] ?></td>
                                    <td><p class="m-0 truncate-1"><?php echo $row['lastname'] ?></p></td>
                                    <td align="center">
                                        <span class="badge <?php echo ($status === 'Paid') ? 'badge-success' : 'badge-danger'; ?>"><?php echo $status; ?></span>
                                    </td>
                                </tr>
                                <?php
                               if (isset($_POST['send_emails']) && $status === 'Pending') {
                                $mail = new PHPMailer(); // Remove the duplicated PHPMailer namespace
                                $mail->isSMTP();
                                $mail->SMTPDebug = 0;
                                $mail->SMTPAuth = true;
                                $mail->SMTPSecure = 'tls';
                                $mail->Host = 'smtp.gmail.com';
                                $mail->Port = 587;
                                $mail->Username = 'lionsclubsanpedrod301a2@gmail.com'; // Your Gmail address
                                $mail->Password = 'vhjoxdqinycvlevd'; // Your Gmail password
                                $mail->setFrom('lionsclubsanpedrod301a2@gmail.com', 'Lions Club San Pedro'); // Your Gmail address and your name
                                $mail->addAddress($row['username'], $row['firstname']); // User's email address and name
                                $mail->Subject = 'Monthly Contribution';
                                $mail->Body = 'Hello ' . $row['firstname'] . ', your payment is still pending. Please complete the payment as soon as possible.';
                                if (!$mail->send()) {
                                    echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
                                }
                            }
                            
                                ?>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php
    } else {
        echo "No records found.";
    }
}

// ... (Rest of your PHP code)
?>
