<!-- Name: Shreya Agarwal
Roll: 13000117046
CSE-A 4th year -->

<!-- This file is used to establish a MySQL database connection -->

<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');

$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// If there is any problem with database connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>
