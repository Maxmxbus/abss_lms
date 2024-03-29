<?php
session_start(); // Start session
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username']; // Retrieve username from session
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="styles-teachers.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    <link rel="icon" type="image/x-icon" href="images/a.png">
</head>
<header class="teachers">
    <H1>Users</H1>
</header>
<body>
    <section class="header">
        <nav>
            <!-- Logo 🔽 -->
            <img src="images/logo-removebg-preview.png" width="200px" height="190px">

            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="announcement-page.php">Announcements</a></li>
                    <li><a href="History.html">History</a></li>
                    <li><a href="">Recommended Books And Material</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>Welcome <?php echo $username; ?></h1>
            <!-- php file to show username -->
            <p></p>
            <a href="results-page.php" class="hero-btn">Results</a>
            <br><br><a href="logout.php" class="hero-btn">Log Out</a>
        </div>

<!-- ---------javaScript for toggle menu -->
<script>

var navLinks =document.getElementById("navLinks")
function showMenu(){
    navLinks.style.right = "0";
}
function hideMenu(){
    navLinks.style.right = "-200px";
}

</script>

</body>
</html>
