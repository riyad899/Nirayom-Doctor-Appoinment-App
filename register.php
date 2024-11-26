<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['signUp'])) {
        $firstName = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastName = mysqli_real_escape_string($conn, $_POST['lastname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = $_POST['signupPassword'];

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Check if the email already exists
        $checkEmail = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $checkEmail);

        if (mysqli_num_rows($result) > 0) {
            echo "Email Address Already Exists!";
        } else {
            // Insert user into the database
            $insertQuery = "INSERT INTO users (firstName, lastName, email, password)
                            VALUES ('$firstName', '$lastName', '$email', '$hashedPassword')";
            if (mysqli_query($conn, $insertQuery)) {
                echo "Registration successful! <a href='index.php'>Login</a>";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
}
?>
