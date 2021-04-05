<!DOCTYPE html>
<html lang="en">
<?php
$host = "localhost";
$username = "root";
$password = "root";
$db = "rupp";
$conn = mysqli_connect($host, $username, $password, $db);

$st_id = 0;
$st_name = "";
$st_sex = "";
$st_score = 0;
$action = 1;

$msg = "";

$url = "./index.php";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($conn) {
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        // Delete
        if ($action == 0) {
            $stu_id = $_GET['stu_id'];
            $sql = "delete from studentdb where stu_id = $stu_id";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $msg = "Delete sucessfully";
            } else {
                $msg = "Fail to delete";
            }
            header("Location: $url");
        }
        // Insert
        else if ($action == 1) {
            $stu_name = $_GET['txt_name'];
            $stu_sex = $_GET['sel_sex'];
            $stu_score = $_GET['txt_score'];
            $sql = "insert into studentdb (stu_name, stu_sex, stu_score) values ('$stu_name' , '$stu_sex' , $stu_score)";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $msg = "Insert sucessfully";
            } else {
                $msg = "Fail to insert";
            }
            header("Location: $url");
        }
        // Update 
        else if ($action == 2) {
            // Bring data to form
            $action = 3;
            $stu_id = $_GET['stu_id'];
            $sql = "select * from studentdb";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $stu_name = $_GET['stu_name'];
            $stu_sex = $_GET['stu_sex'];
            $stu_score = $_GET['stu_score'];
        } else if ($action == 3) {
            // Update DB
            $stu_id = $_GET['stu_id'];
            $stu_name = $_GET['txt_name'];
            $stu_sex = $_GET['sel_sex'];
            $stu_score = $_GET['txt_score'];
            $sql = "update studentdb set stu_name='$stu_name', stu_sex='$stu_sex', stu_score=$stu_score where stu_id=$stu_id";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $msg = "Update sucessfully";
            } else {
                $msg = "Fail to update";
            }
            $action = 1;
            header("Location: $url");
        }
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Student in RUPP</title>
</head>

<body>
    <h1>List of Student in RUPP</h1>
    <form method=get>
        <input type="hidden" name="action" value="<?= $action ?>">
        <input type="hidden" name="stu_id" value="<?= $stu_id ?>">
        <label for="txt_name">Name:</label>
        <input type="text" name="txt_name" value="<?= $stu_name ?>"> <br />
        <label for=" sel_sex">Sex:</label>
        <select name="sel_sex" id="sel_sex">
            <option value="F" <?php echo ($stu_sex == "F" ? "selected" : "") ?>>Female</option>
            <option value="M" <?php echo ($stu_sex == "M" ? "selected" : "") ?>>Male</option>
        </select>
        <br />
        <label for="txt_score">Score:</label>
        <input type="text" name="txt_score" value="<?= $stu_score ?>"> <br />
        <input type="submit" <?php echo ($action == 3 ? "value = \"Update\"" : "value = \"Submit\"") ?>>
        <?php
        if ($action == 1) {
            echo '<input type="reset" value="Clear" >';
        } else if ($action == 3) {
            echo '<input type="button" value="Cancel" onclick= "window.location.href=\'index.php\'"> ';
        }
        ?>
    </form>
    <br />
    <?= $msg ?>
    <br />
    <?php
    $sql = "select * from studentdb";
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
    mysqli_close($conn);
    ?>
</body>

</html>