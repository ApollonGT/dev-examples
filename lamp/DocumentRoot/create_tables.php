<?php
include("./database.php");

$query = "CREATE TABLE users 
    (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100),
    email VARCHAR(60))";
mysqli_query($con, $query);
mysqli_query($con, "INSERT INTO users (fullname, email) VALUES ('Demo User', 'demo@user.com')");

if ($con) { mysqli_close($con); }
?>


