<!DOCTYPE html>
<html lang="en">
<?php
include('./includes/connection.php');
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
        <input type="hidden" name="action" value="2">
        <label for="txt_name">Name:</label>
        <input type="text" name="txt_name"> <br />
        <label for="sel_sex">Sex:</label>
        <select name="sel_sex" id="sel_sex">
            <option value="F">Female</option>
            <option value="M">Male</option>
        </select>
        <br />
        <label for="txt_score">Score:</label>
        <input type="text" name="txt_score"> <br />
        <input type="submit" value="Submit">
        <input type="reset" value="Clear" id="clear">
    </form>
    <br>

    <?php
    include('./includes/insert.php');
    include('./includes/select.php');
    include('./includes/delete.php');
    mysqli_close($conn);
    ?>
</body>

</html>