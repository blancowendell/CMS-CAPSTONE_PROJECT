<?php
$con = mysqli_connect("localhost", "root", "", "charity_db");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check if the email exists in the database
    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Email exists, update the password with MD5 hashing
        $hashedPassword = md5($password);

        $updateQuery = "UPDATE users SET password = ? WHERE username = ?";
        $updateStmt = $con->prepare($updateQuery);
        $updateStmt->bind_param("ss", $hashedPassword, $email);

        if ($updateStmt->execute()) {
            $_SESSION['status'] = "Change Password Successfuly!";
            $_SESSION['icon'] = "success";
            header("Location: /charity/admin/login.php");
        } else {
            $_SESSION['status'] = "Error!";
            $_SESSION['icon'] = "warning";
            header("Location:  /charity/admin/login.php");
        }

        $updateStmt->close();
    } else {
        $_SESSION['status'] = "Email Not Match!";
        $_SESSION['icon'] = "success";
        header("Location: resetpass.php");
    }

    // Close database connection
    $stmt->close();
    $con->close();
} else {
    // Redirect to the login page or handle the error accordingly
    header("Location: login.php");
    exit();
}
?>
