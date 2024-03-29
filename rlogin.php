<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "abss_lms_db";
$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("Connection error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];

    // Query the database to check if the password exists
    $query = "SELECT * FROM users WHERE password = '$password'";
    $result = mysqli_query($data, $query);

    if (mysqli_num_rows($result) == 1) {
        // Fetch username from the database and set it as a session variable
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header('Location: upload-teacher-result-page.php');
        exit;
    } else {
        header("Location: not-reg.php");
        exit;
    }
}
?>
