<?php
$host = "localhost";
$username = "root";
$password = "root";
$db = "rupp";
$conn = mysqli_connect($host, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

class DBController
{
    private $stu_id = 0;
    private $stu_name = "";
    private $stu_sex = "";
    private $stu_score = 0;
    private $action = 1;

    private $msg = "";


    function dbSelect($table_name, $select = '*')
    {
        $host = "localhost";
        $username = "root";
        $password = "root";
        $db = "rupp";
        $conn = mysqli_connect($host, $username, $password, $db);
        $sql = "select " . $select . " from " . $table_name;
        if ($conn) {
            $result = mysqli_query($conn, $sql);
            $num_record = mysqli_num_rows($result);
            if ($num_record > 0) {
                echo '
            <table border="1 solid black">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Sex</th>
                <th>Score</th>
                <th>Action</th>
            </tr>
            ';
                while ($row = mysqli_fetch_array($result)) {
                    $stu_id = $row['stu_id'];
                    $stu_name = $row['stu_name'];
                    $stu_sex = $row['stu_sex'];
                    $stu_score = $row['stu_score'];
                    echo "
                <tr>
                    <td>$stu_id</td>
                    <td>$stu_name</td>
                    <td>$stu_sex</td>
                    <td>$stu_score</td>
                    <td>
                        <a href=\"?action=0&stu_id=$row[0]\">delete</a>
                        <a href=\"?action=2&stu_id=$row[0]&stu_name=$row[1]&stu_sex=$row[2]&stu_score=$row[3]\">edit</a>
                    </td>
                </tr>
                ";
                }
                echo '</table>';
            }
        } else {
            echo "Error: " . $sql;
        }
    }

    function dbInsert($table_name, $name, $sex, $score)
    {
        $host = "localhost";
        $username = "root";
        $password = "root";
        $db = "rupp";
        $conn = mysqli_connect($host, $username, $password, $db);
        global $msg;

        $sql = "insert into " . $table_name . " (stu_name, stu_sex, stu_score) values ('$name' , '$sex' , $score)";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $msg = "Insert sucessfully";
        } else {
            $msg = "Fail to insert";
        }
    }

    function dbDelete($table_name, $id)
    {
        $host = "localhost";
        $username = "root";
        $password = "root";
        $db = "rupp";
        global $msg;
        $conn = mysqli_connect($host, $username, $password, $db);
        $sql = "delete from " . $table_name . " where stu_id = $id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $msg = "Delete sucessfully";
        } else {
            $msg = "Fail to delete";
        }
    }

    function updateForm($table_name, $id, $name, $sex, $score)
    {
        $host = "localhost";
        $username = "root";
        $password = "root";
        $db = "rupp";
        $conn = mysqli_connect($host, $username, $password, $db);

        global $msg;
        global $stu_id;
        global $stu_name;
        global $stu_sex;
        global $stu_score;

        // Bring data to form
        $stu_id = $id;
        $sql = "select * from " . $table_name;
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $stu_name = $name;
        $stu_sex = $sex;
        $stu_score = $score;
    }

    function dbUpdate($table_name, $id, $name, $sex, $score)
    {
        $host = "localhost";
        $username = "root";
        $password = "root";
        $db = "rupp";
        $conn = mysqli_connect($host, $username, $password, $db);

        global $msg;
        global $stu_id;
        global $stu_name;
        global $stu_sex;
        global $stu_score;

        $stu_id = $id;
        $stu_name = $name;
        $stu_sex = $sex;
        $stu_score = $score;

        $sql = "update " . $table_name . " set stu_name='$stu_name', stu_sex='$stu_sex', stu_score=$stu_score where stu_id=$stu_id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $msg = "Update sucessfully";
        } else {
            $msg = "Fail to update";
        }
    }
}