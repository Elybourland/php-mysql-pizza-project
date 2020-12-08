<?php 

// connect to database (MySQLi)

$conn = mysqli_connect('localhost', 'ely', 'test1234', 'ninja_pizza');

// check connection

if(!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

?>
