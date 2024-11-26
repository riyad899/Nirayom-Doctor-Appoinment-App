<?php
session_start();
include 'connect.php';

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

$email = $_SESSION['email'];
$query = mysqli_query($conn, "SELECT firstName, lastName FROM users WHERE email='$email'");
$user = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage - Niramoy Hospital</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <div class="logo">
        <img src="logo.png" alt="Description of Image">
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Appointment</a>
                </li>
            </ul>
            <!-- Log In and Sign Up Buttons -->
            <button id="loginBtn" class="login-btn"><a href="logout.php">Logout</a></button>
        </div>
    </div>
</nav>



<section class="containner-full">
    <div class="box-conatiner">
        <div class="content">
            <h1>Niramoy: Your Holistic Healthcare Solution</h1>
            <p>Niramoy is your trusted source for comprehensive <br>
                healthcare services, simplifying your health journey<br> with convenient access to doctors, diagnostics, <br>
                 and wellness packages.</p>
            <button>Get Started</button>
        </div>
        <div class="back">
            <img src="weclome.jpg" alt="welcome">
        </div>
    </div>
</section>


<section class="containner2-full">
    <div class="box-conatiner2">
    <div class="text">
        <h1>Doctor Appointment</h1>
    </div>
    <div class="search-input">
        <label for="location">Location:</label>
        <select name="cityname" id="location">
            <option value="dhaka">Dhaka</option>
            <option value="tangail">Tangail</option>
            <option value="comilla">Comilla</option>
            <option value="rajshahi">Rajshahi</option>
            <option value="barisal">Barisal</option>
        </select>
    </div>

    <div class="search-input2">
        <label for="search-query">Search Doctors:</label>
        <input type="text" id="search-query" placeholder="Specialty, Condition, Doctor's name">
    </div>

    <div class="search-buttons">
        <button class="search-button">Search</button>
    </div>

    <div class="box-conatiner3">
     <div class="text-name">
        <h1>Video Consultation</h1>
     </div>
     <div class="search-input">
        <label for="location">Location:</label>
        <select name="cityname" id="location">
            <option value="dhaka">Dhaka</option>
            <option value="tangail">Tangail</option>
            <option value="comilla">Comilla</option>
            <option value="rajshahi">Rajshahi</option>
            <option value="barisal">Barisal</option>
        </select>
    </div>

    <div class="search-input2">
        <label for="search-query">Search Doctors:</label>
        <input type="text" id="search-query" placeholder="Specialty, Condition, Doctor's name">
    </div>

    <div class="search-buttons">
        <button class="search-button">Search</button>
    </div>

    </div>
    </div>
</section>

<section class="containner-full3">
    <div class="content-3">
        <img src="image3.png" alt="">
    </div>
</section>

<section class="containner-full4">
    <div class="content-4">
        <img src="image4.png" alt="">
    </div>
</section>

<section class="container-full5">
    <div class="content-5">

        <div class="from1">
            <form action="#">
                <div>
                    <div class="search-header">Lab Test</div>
                    <br>
                    <label for="location-lab">Location/City:</label>
                    <select name="location" id="location-lab">
                        <option value="dhaka">Dhaka</option>
                    </select>
                </div>
                <div>
                    <label for="search_query_lab">Select hospital:</label>
                    <input type="text" id="search_query_lab" placeholder="Enter hospital name">
                </div>
                <div>
                    <label for="test-lab">Select package:</label>
                    <select name="test" id="test-lab">
                        <option value="">Select package</option>
                        <option value="package1">Package 1</option>
                        <option value="package2">Package 2</option>
                    </select>
                </div>
                <div>
                    <label for="payment-lab">Payment Methods:</label>
                    <select name="payment" id="payment-lab">
                        <option value="">Select Payment Method</option>
                        <option value="cash">Cash</option>
                        <option value="card">Card</option>
                        <option value="mobile_banking">Mobile Banking</option>
                    </select>
                </div>
                <br>
                <div>
                    <button type="submit">Search</button>
                </div>
            </form>
        </div>

        <div class="form2">
            <form action="#">
                <div>
                    <div class="search-header">Health Package</div>
                    <br>
                    <label for="location-health">Location/City:</label>
                    <select name="location" id="location-health">
                        <option value="dhaka">Dhaka</option>
                    </select>
                </div>
                <div>
                    <label for="search_query_health">Select hospital:</label>
                    <input type="text" id="search_query_health" placeholder="Enter hospital name">
                </div>
                <div>
                    <label for="test-health">Select package:</label>
                    <select name="test" id="test-health">
                        <option value="">Select package</option>
                        <option value="package1">Package 1</option>
                        <option value="package2">Package 2</option>
                    </select>
                </div>
                <div>
                    <label for="payment-health">Payment Methods:</label>
                    <select name="payment" id="payment-health">
                        <option value="">Select Payment Method</option>
                        <option value="cash">Cash</option>
                        <option value="card">Card</option>
                        <option value="mobile_banking">Mobile Banking</option>
                    </select>
                </div>
                <br>
                <div>
                    <button type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
</section>


<section class="containner-ful7">
    <div class="content-7">
        <img src="contact.png" alt="">
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="script.js"></script>
<script>
document.getElementById('loginBtn').addEventListener('click', function() {
    document.getElementById('modal').style.display = 'block';
    document.getElementById('loginForm').style.display = 'block';
    document.getElementById('signupForm').style.display = 'none';
});

document.getElementById('showSignup').addEventListener('click', function() {
    document.getElementById('loginForm').style.display = 'none';
    document.getElementById('signupForm').style.display = 'block';
});

document.getElementById('showLogin').addEventListener('click', function() {
    document.getElementById('signupForm').style.display = 'none';
    document.getElementById('loginForm').style.display = 'block';
});

document.querySelector('.close').addEventListener('click', function() {
    document.getElementById('modal').style.display = 'none';
});
</script>
</body>
</html>
