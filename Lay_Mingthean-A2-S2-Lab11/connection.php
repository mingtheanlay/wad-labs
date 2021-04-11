<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'visitor');

$date = date("Y-m-d");
$query = "SELECT * from `stats` where `date` = '$date'";
$result = mysqli_query($conn, $query);

if ($result->num_rows == 0) {
    $insertQuery = "INSERT INTO `stats` (`date`) VALUE ('$date')";
    mysqli_query($conn,  $insertQuery);
} else {
    $updateQuery = "UPDATE `stats` SET `page_views` = `page_views` + 1 WHERE `date` =  '$date'";
    mysqli_query($conn, $updateQuery);
}