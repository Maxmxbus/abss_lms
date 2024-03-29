<?php
session_start();

// Check if the session variable is set
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    // Handle the case where the username is not set
    // You may add appropriate error handling or redirect logic here
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

// Ensure that $_POST data is set and not empty
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
    // Escape user inputs for security
    $math = mysqli_real_escape_string($data, $_POST['post_math']);
    $science = mysqli_real_escape_string($data, $_POST['post_science']);
    $biology = mysqli_real_escape_string($data, $_POST['post_biology']);
    $civic = mysqli_real_escape_string($data, $_POST['post_civic']);
    $english = mysqli_real_escape_string($data, $_POST['post_english']);

    // Construct the SQL query to update the existing row for the user
    $query = "UPDATE users SET results = 'Math: $math, Science: $science, Biology: $biology, Civic: $civic, English: $english' WHERE username = '$username'";

    // Execute the query
    $result = mysqli_query($data, $query);

    // Check for errors
    if (!$result) {
        die("Query failed: " . mysqli_error($data));
    } else {
        // Redirect to the result_access.php page upon successful update
        header("Location: result_access.php");
        exit();
    }
} else {
    echo "No data received.";
}
?>
