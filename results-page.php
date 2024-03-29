<?php
session_start();

// Check if the session variable is set
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    header("Location: login.php");
    exit();
}

// Establish a database connection
$host = "localhost";
$user = "root";
$password = "";
$db = "abss_lms_db";

$data = mysqli_connect($host, $user, $password, $db);

// Check if the connection is successful
if (!$data) {
    die("Connection failed: " . mysqli_connect_error());
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abss Lms</title>
    <link rel="stylesheet" href="styles-results.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    <link rel="icon" type="image/x-icon" href="images/a.png">
    <style>
        /* Optional: Add CSS for better styling */
        .post {
            margin-bottom: 20px;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 5px;
        }
        .post h2 {
            margin-top: 0;
        }
        .post-content {
            white-space: pre-line;
            table {
            font-size: 16px; /* Adjust the font size as needed */
        }
        table th, table td {
            padding: 8px; /* Adjust padding as needed */
        }
        }
    </style>
</head>
<header class="title">
    <H1>Results</H1>
</header>
<body>
    <section class="header">
        <nav>
            <!-- Logo 🔽 -->
            <img src='images/logo-removebg-preview.png' width='-200px' height='190px'><br>

        <div class="text-box">
            <h1><?php echo $username; ?></h1>
        </div>
        </nav>        
    
        </section >
           
        <div>

            <?php

            // Check if the session variable is set
            if (!isset($_SESSION['username'])) {
                // Redirect the user to the login page if not logged in
                header("Location: login.php");
                exit();
            }

            // Establish a database connection
            $host = "localhost";
            $user = "root";
            $password = "";
            $db = "abss_lms_db";

            $data = mysqli_connect($host, $user, $password, $db);

            // Check if the connection is successful
            if (!$data) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Retrieve the username from the session
            $username = $_SESSION['username'];

            // Fetch results for the logged-in user from the database
            $query = "SELECT results FROM users WHERE username = '$username'";
            $result = mysqli_query($data, $query);

            // Check if there are any results
            if (mysqli_num_rows($result) > 0) {
                // Display the results in a table
                echo "<section>";
                echo "<nav>";
                echo "<div class='postform'>";
                echo "<table border='1'>";
                echo "<tr><th><h2>Results</h2></th></tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td><h2>" . htmlspecialchars($row['results']) . "</h2></td></tr>";
                }
                echo "</table>";
                echo "</div>";
                echo "</nav>";
                echo "</section>";
            } else {
                echo "No results found.";
            }

            // Close the database connection
            mysqli_close($data);
        ?>


            
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







