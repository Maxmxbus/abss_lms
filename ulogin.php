<?php


$host="localhost";
$user="root";
$password="";
$db="abss_lms_db";
$data=mysqli_connect($host,$user,$password,$db);

if ($data===false) {
    die("connection error");
}

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $name = $_POST['username'];
        $pass = $_POST['password'];
    $sql="SELECT * FROM users WHERE username='".$name."' AND password='".$pass."'";
    
    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);

    if ($row["user-type"]=="user" || $row["user-type"]=="admin"){
        session_start();
        $_SESSION['username'] = $name; // Save username in session variable
        header("location:http://localhost/users-page.php");
    } else {
        header("location:not-reg.php");
    }
    

    }




?>