<?php
$db_user = 'testuser';
$db_password = 'testpassword';
$db_name = 'testdb';
$con = mysqli_connect('mariadb', $db_user, $db_password, $db_name);
if (mysqli_connect_errno())
{
    echo " Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

