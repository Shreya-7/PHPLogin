<!-- Name: Shreya Agarwal
Roll: 13000117046
CSE-A 4th year -->

<!-- This is file contains the logout logic -->

<?php
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: login.php");
exit;
?>