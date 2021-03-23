<!DOCTYPE html>
<html lang="en">
<?php
include('./connection.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Student in RUPP</title>
    <script src="../js/getback.js"></script>
</head>

<body>
    <h1>List of Student in RUPP</h1>
    <?php
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        $stu_id = $_GET['stu_id'];
        $stu_name = $_GET['stu_name'];
        $stu_sex = $_GET['stu_sex'];
        $stu_score = $_GET['stu_score'];
    }
    ?>
    <form method=get>
        <input type="hidden" name="action" value="4">
        <input type="hidden" name="stu_id" value="<?php echo "$stu_id" ?>">
        <label for="txt_name">Name:</label>
        <input type="text" name="txt_name" value=<?= $stu_name ?>> <br />
        <label for="sel_sex">Sex:</label>
        <select name="sel_sex" id="sel_sex">
            <?php
            if ($stu_sex == "M") {
                echo '
                    <option value="F">Female</option>
                    <option value="M" selected>Male</option>
                ';
            } else {
                echo '
                <option value="F" selected>Female</option>
                <option value="M">Male</option>
            ';
            }
            ?>
        </select>
        <br />
        <label for="txt_score">Score:</label>
        <input type="text" name="txt_score" value=<?= $stu_score ?>> <br />
        <input type="submit" value="Submit">
        <input type="reset" value="Cancel" id="clear" onclick="GetBack();">
    </form>
    <br>
    <?php
    if ($conn) {
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
            if ($action == 4) {
                $stu_id = $_GET['stu_id'];
                $stu_name = $_GET['txt_name'];
                $stu_sex = $_GET['sel_sex'];
                $stu_score = $_GET['txt_score'];
                $sql = "update studentdb set stu_name='$stu_name', stu_sex='$stu_sex', stu_score=$stu_score where stu_id=$stu_id";
                $result = mysqli_query($conn, $sql);
                header('Location: ' . "$home");
            }
        }
    } else {
    }
    ?>
    <?php
    include('./insert.php');
    include('./select.php');
    include('./delete.php');
    mysqli_close($conn);
    ?>
</body>

</html>