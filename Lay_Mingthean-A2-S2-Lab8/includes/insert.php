<?php

if ($conn) {
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        if ($action == 2) {
            $stu_name = $_GET['txt_name'];
            $stu_sex = $_GET['sel_sex'];
            $stu_score = $_GET['txt_score'];
            $sql = "insert into studentdb (stu_name, stu_sex, stu_score) values ('$stu_name' , '$stu_sex' , $stu_score)";
            $result = mysqli_query($conn, $sql);
            header('Location: ' . "$home");
        }
    }
}