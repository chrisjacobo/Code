<?php

$localhost = 'localhost';
$username = 'chris';
$password = 'chris1232';
$table = 'PHP Class';

$conn = mysqli_connect($localhost, $username, $password, $table);

date_default_timezone_set('America/Denver');
$date = date('d-m-y h:i:s');


if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error() . ' ' . $date . ' ' . $localhost . ' ' . $table;

}


?>