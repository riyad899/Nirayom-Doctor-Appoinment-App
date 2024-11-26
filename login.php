<?php
session_start();
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['signIn'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Check if email exists in the database
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            $user = mysqli_fetch_assoc($result);
            if ($user && password_verify($password, $user['password'])) {
                // Password is correct, start session
                $_SESSION['email'] = $email;
                header("Location: home.php"); // Redirect to the home page
                exit();
            } else {
                echo "Invalid email or password!";
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>
