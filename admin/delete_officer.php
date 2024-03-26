<?php
// Include database connection
include 'db_connection.php';

// Check if officerId is provided
if (isset($_GET['id'])) {
    $officerId = $_GET['id'];

    // Delete the officer from the database
    $stmt = $conn->prepare("DELETE FROM officers WHERE id = ?");
    $stmt->bind_param('i', $officerId);
    $result = $stmt->execute();
    $stmt->close();

    if ($result) {
        // Officer deleted successfully
        echo "<script>alert('Officer deleted successfully'); window.location.href = '?page=listofofficers';</script>";
        exit();
    } else {
        // Error occurred while deleting the officer
        echo "<script>alert('Error: Failed to delete officer');</script>";
    }
} else {
    // Officer ID not provided, handle the error
    echo "<script>alert('Error: Officer ID not specified');</script>";
}
?>
