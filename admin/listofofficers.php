<?php
// Include database connection
include 'db_connection.php';

// Fetch officers data from the database
$query = $conn->query("SELECT * FROM `officers`");
if (!$query) {
    die("Error: " . $conn->error);
}
$officers = $query->fetch_all(MYSQLI_ASSOC);

?>

<!-- HTML code to display officer data -->
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">List of Officers</h3>
        <div class="card-tools">
            <a href="?page=add_officer" class="btn btn-flat btn-primary"><span class="fas fa-plus"></span> Add New Officer</a>
        </div>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Officer ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Middle Name</th>
                            <th>Position</th>
                            <th>Avatar</th>
                            <th>Username</th>
                            <th>Start Term</th>
                            <th>End Term</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($officers as $officer) : ?>
                            <tr>
                                <td><?php echo $officer['id']; ?></td>
                                <td><?php echo $officer['firstname']; ?></td>
                                <td><?php echo $officer['lastname']; ?></td>
                                <td><?php echo $officer['middlename']; ?></td>
                                <td><?php echo $officer['position']; ?></td>
                                <td><img src="uploads/<?php echo $officer['avatar']; ?>" alt="Avatar" width="50"></td>
                                <td><?php echo $officer['username']; ?></td>
                                <td><?php echo $officer['start_term']; ?></td>
                                <td><?php echo $officer['end_term']; ?></td>
                                <td>
                                    <a href="?page=edit_officer&id=<?php echo $officer['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="?page=delete_officer&id=<?php echo $officer['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this officer?')">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
