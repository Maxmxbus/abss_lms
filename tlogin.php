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
        $name = $_POST['teacher'];
        $pass = $_POST['password'];
    $sql="SELECT * FROM teachers WHERE user_name='".$name."' AND password='".$pass."'";
    
    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);

    if ($row["usertype"]=="teacher"){
        header("location:http://localhost/teachers-page.php");
    }elseif($row["usertype"]=="admin"){
        header("location:http://localhost/teachers-page.php");
    }else
    {
        header("location:not-reg.php");

    }

    }




?>