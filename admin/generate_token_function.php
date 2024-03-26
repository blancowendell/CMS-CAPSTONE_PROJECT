<?php
// This is just an example. Replace with your actual implementation.
function generateAndStoreToken($conn, $username) {
    $token = bin2hex(random_bytes(32)); // Generate a random token
    $hashedToken = password_hash($token, PASSWORD_DEFAULT); // Hash the token

    // Store the hashed token in the database for the given username
    $query = "UPDATE users SET reset_token = '$hashedToken' WHERE username = '$username'";
    mysqli_query($conn, $query);

    return $token; // Return the non-hashed token for use in emails
}
?>
