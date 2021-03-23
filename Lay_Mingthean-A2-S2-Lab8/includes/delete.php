<?php

if ($conn) {
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        if ($action == 0) {
            $stu_id = $_GET['stu_id'];
            $sql = "delete from studentdb where stu_id = $stu_id";
            $result = mysqli_query($conn, $sql);
            header('Location: ' . "$home");
        }
    }
}