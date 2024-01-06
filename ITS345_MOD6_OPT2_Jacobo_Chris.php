<?php

$localhost = 'localhost';
$username = 'chris';
$password = 'chris121601';
$database = 'PHP Class';

$conn = mysqli_connect($localhost, $username, $password, $database);

$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$number = $_POST['number'];
$date = $_POST['date'];

$sql = "INSERT INTO `forms` (`id` `Name`, `Address`, `Email`, `Phone Number`, `Today's Date`) 
        VALUES ('0','$name', '$address', '$email', '$number', '$date')";

$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo "Forms inserted in Database!";
}

mysqli_close($conn);

print_r($_POST);

?>