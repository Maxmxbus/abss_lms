<?php
session_start();

// Check if the username is set in the session
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    // Redirect to login page or handle the situation where the user is not logged in
    header("Location: login.php");
    exit(); // Make sure to exit after redirection
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABSS LMS</title>
    <link rel="stylesheet" href="styles-result-upload.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    <link rel="icon" type="image/x-icon" href="images/a.png">
</head>
<header class="title">
    <H1>Upload results</H1>
</header>
<body style="background-color: #1d2b3a;">
    <section class="header">
        <nav>
            <!-- Logo 🔽 -->
        <div class="text-box">
            <img src="images/logo-removebg-preview.png" width="-200px" height="190px">
            <h1><?php echo $username; ?></h1>
        </div>
            <form action="result_handler.php" method="post" class="postform">
                <label for="post_math">Math:</label>
                <input type="number" id="post_math" name="post_math" ><br><br>
                <label for="post_title">Science:</label>
                <input type="number" id="post_science" name="post_science" ><br><br>
                <label for="post_title">Biology:</label>
                <input type="number" id="post_biology" name="post_biology" ><br><br>
                <label for="post_title">Civic Ed:</label>
                <input type="number" id="post_civic" name="post_civic" ><br><br>
                <label for="post_title">English:</label>
                <input type="number" id="post_english" name="post_english" ><br><br>
                <input type="submit" value="Submit Post">
            </form>
        </div>
    </section >

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
