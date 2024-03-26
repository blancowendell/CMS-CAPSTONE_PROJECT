<?php
// Include database connection
include 'db_connection.php';

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the officer ID from the form data
    $officerId = $_POST['officerId'];

    // Retrieve the updated officer details from the form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $position = $_POST['position'];
    $startTerm = $_POST['start_term'];
    $endTerm = $_POST['end_term'];

    // Update the officer record in the database
    $stmt = $conn->prepare("UPDATE officers SET firstname = ?, lastname = ?, middlename = ?, position = ?, start_term = ?, end_term = ? WHERE id = ?");
    $stmt->bind_param('ssssssi', $firstname, $lastname, $middlename, $position, $startTerm, $endTerm, $officerId);
    $result = $stmt->execute();
    $stmt->close();

    if ($result) {
        // Officer record updated successfully
        $response = array('status' => 'success', 'message' => 'Officer details updated successfully');
        echo json_encode($response);
    } else {
        // Failed to update officer record
        $response = array('status' => 'error', 'message' => 'Failed to update officer details');
        echo json_encode($response);
    }
} else {
    // Invalid request method
    $response = array('status' => 'error', 'message' => 'Invalid request method');
    echo json_encode($response);
}
?>
