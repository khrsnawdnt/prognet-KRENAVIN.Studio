<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$database = "db_prognetuas";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Error Connect ke Database')</script>");
}
 
?>