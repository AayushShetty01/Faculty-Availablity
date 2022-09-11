<?php
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "staffavailability";
$link = mysqli_connect($host, $user, $pass,$dbname);
if(!$link)
{
    die("Failed to connect to my sql:".mysqli_connect_error());
}
$sql = "INSERT INTO signup as student VALUES('".$name."','".$email."','".$password."');";
if(!$sql){
    echo('<script>alert("Data not Inserted")</script>');
} 
$result = mysqli_query($link, $sql);
echo('<script>alert("Data Inserted")</script>');
header("location:index.html");
?>