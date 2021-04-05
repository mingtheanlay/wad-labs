<!DOCTYPE html>
<html lang="en">
<?php
$action = 1;
$stu_id = 0;
$stu_name = "";
$stu_sex = "";
$stu_score = 0;

$url = "./index-oop.php";

include './function/crub-oop.php';

$dbController = new DBController();

if ($conn) {
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        if ($action == 0) {
            $stu_id = $_GET['stu_id'];
            $dbController->dbDelete("studentdb", $stu_id);
            $action = 1;
            header("Location: $url");
        } else if ($action == 1) {
            $stu_name = $_GET['txt_name'];
            $stu_sex = $_GET['sel_sex'];
            $stu_score = $_GET['txt_score'];
            $dbController->dbInsert("studentdb", $stu_name, $stu_sex, $stu_score);
            header("Location: $url");
        } else if ($action == 2) {
            $stu_id = $_GET['stu_id'];
            $stu_name = $_GET['stu_name'];
            $stu_sex = $_GET['stu_sex'];
            $stu_score = $_GET['stu_score'];
            $dbController->updateForm("studentdb", $stu_id, $stu_name, $stu_sex, $stu_score);
            $action = 3;
        } else if ($action == 3) {
            $stu_id = $_GET['stu_id'];
            $stu_name = $_GET['txt_name'];
            $stu_sex = $_GET['sel_sex'];
            $stu_score = $_GET['txt_score'];
            $dbController->dbUpdate("studentdb", $stu_id, $stu_name, $stu_sex, $stu_score);
            $action = 1;
            header("Location: $url");
        }
    }
}

mysqli_close($conn);
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
            echo '<input type="button" value="Cancel" onclick= "window.location.href=\'index-oop.php\'"> ';
        }
        ?>
    </form>
    <br />
    <?= $msg ?>
    <br />
    <?php
    $dbController->dbSelect("studentdb");
    mysqli_close($conn);
    ?>
</body>

</html>