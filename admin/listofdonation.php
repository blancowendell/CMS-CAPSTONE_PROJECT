<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "charity_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">List of Donations</h3>
        <div class="card-tools">
            <a href="javascript:void(0)" id="create_new" class="btn btn-flat btn-primary"><span class="fas fa-plus"></span> Add New</a>
        </div>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date Created</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Fetch donation data
                        $sql = "SELECT name, date_created, amount FROM donations";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['date_created'] . "</td>";
                                echo "<td>" . $row['amount'] . "</td>";
                                echo "<td><button class='btn btn-sm btn-danger delete_data' data-id='" . $row['name'] . "'>Delete</button></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>No donations found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.delete_data').click(function() {
            var donationId = $(this).data('id');
            if (confirm("Are you sure to delete this donation permanently?")) {
                $.ajax({
                    url: 'delete_donation.php', // Replace with your PHP file for deleting donation
                    type: 'POST',
                    data: {
                        id: donationId
                    },
                    success: function(response) {
                        // Handle the success response
                        console.log(response);
                        alert('Donation deleted successfully');
                        // You can also update the table here to remove the deleted row
                    },
                    error: function(xhr, status, error) {
                        // Handle the error response
                        console.log(xhr.responseText);
                        alert('Error deleting donation');
                    }
                });
            }
        });

        $('#create_new').click(function() {
            // Handle the click event for creating a new donation
            console.log('Add New Donation clicked');
        });
    });
</script>
