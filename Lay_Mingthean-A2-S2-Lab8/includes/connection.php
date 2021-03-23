<?php
$host = "localhost";
$username = "root";
$password = "root";
$db = "rupp";
$home = "http://localhost:8888/Lay_Mingthean-A2-S2-Lab8/";
$conn = mysqli_connect($host, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}