<?php
session_start();
if (isset($_SESSION['email'])) {
    header("Location: home.php"); // If user is logged in, redirect to home page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niramoy Hospital - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <div class="logo">
            <img id="logo" src="images/logo.png" alt="Logo">
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Appointment</a>
                </li>
            </ul>
            <button id="loginBtn" class="login-btn">Login</button>
        </div>
    </div>
</nav>

<!-- Login and Signup Modal -->
<div id="modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div id="loginForm" class="form-container">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter Email" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter Password" required>

                <button type="submit" class="submit-btn" name="signIn">Login</button>
                <p>Don't have an account? <a href="#" id="showSignup">Sign up here</a></p>
            </form>
        </div>

        <div id="signupForm" class="form-container">
            <h2>Sign Up</h2>
            <form action="register.php" method="POST">
                <label for="firstname">First Name</label>
                <input type="text" id="firstname" name="firstname" placeholder="Enter First Name" required>

                <label for="lastname">Last Name</label>
                <input type="text" id="lastname" name="lastname" placeholder="Enter Last Name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter Email" required>

                <label for="signupPassword">Password</label>
                <input type="password" id="signupPassword" name="signupPassword" placeholder="Enter Password" required>

                <button type="submit" class="submit-btn" name="signUp">Sign Up</button>
                <p>Already have an account? <a href="#" id="showLogin">Login here</a></p>
            </form>
        </div>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>
