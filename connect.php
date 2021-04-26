<?php
$conn = new mysqli($_SERVER['address'],$_SERVER['username'], $_SERVER['pass'], $_SERVER['dbname']);
if ($conn->connect_error) {
    die("connection failed: ".mysqli_connect_error());

}
?>