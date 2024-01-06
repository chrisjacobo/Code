<?php

$conn = mysqli_connect('localhost', 'chris', 'chris1234', 'PHP Class');

if(!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

$sql = 'SELECT max(price) FROM shop;';

$result = mysqli_query($conn, $sql);

$max = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($conn);

print_r($max);

?>