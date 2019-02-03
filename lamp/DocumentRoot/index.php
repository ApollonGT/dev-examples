<?php
include("./database.php");

$query = "SELECT * FROM users";
$result = $con->query($query);

$message = "Hello World";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Part 1</title>
</head>
<body>
<?=$message?>
<ul>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<li>id: " . $row["id"]. " - Name: " . $row["fullname"]. "</li>";
    }
} else {
    echo "0 results";
}
?>
</ul>
</body>
</html>
<?php
if ($con) { mysqli_close($con); }
?>
