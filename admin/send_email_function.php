<?php
// This is just an example. Replace with your actual implementation.
function sendPasswordResetEmail($username, $token) {
    global $conn; // Use $conn here

    // Retrieve user's email based on the username from the database
    $query = "SELECT username, FROM users WHERE username = '$username'";
    $result = $conn->query($query);
    
    if ($result) {
        $row = $result->fetch_assoc();
        $email = $row['username'];

        // Send the password reset email
        $subject = "Password Reset";
        $message = "Click the following link to reset your password: http://yourwebsite.com/reset_password_confirmation.php?token=$token";
        $headers = "From: webmaster@yourwebsite.com" . "\r\n";

        mail($email, $subject, $message, $headers);
    }
}
?>
