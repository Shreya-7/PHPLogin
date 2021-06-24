<!-- Name: Shreya Agarwal
Roll: 13000117046
CSE-A 4th year -->

<!-- This is the file that is displayed whenever a user is successfully logged in. -->

<?php

session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hey <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>, you have been successfully logged in!</h1>
    <a href="logout.php" class="btn btn-danger ml-3">Log Out</a>
</body>
</html>