<?php
/*
$ser="localhost";
$user="root";
$pass="";
$db="sun";
$con=mysqli_connect($ser,$user,$pass,$db) or die("connection disconnected");
echo"connection is successfully";
*/
?>
<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'pcdo');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>