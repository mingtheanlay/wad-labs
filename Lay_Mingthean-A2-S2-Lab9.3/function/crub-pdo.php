<?php
$host = "localhost";
$username = "root";
$password = "root";
$db = "rupp";
$dsn = 'mysql:host=' . $host . ';dbname=' . $db;

class DBController
{
    private $st_id = 0;
    private $st_name = "";
    private $st_sex = "";
    private $st_score = 0;
    private $action = 1;

    function dbSelect($table_name, $select = '*')
    {
        global $username, $password, $db, $dsn;
        $pdo = new PDO($dsn, $username, $password);
        $stmt = $pdo->prepare("select " . $select . " from " . $table_name);
        $stmt->execute();
        if ($stmt) {
            $num_record = $stmt->rowCount();
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
                while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
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
            echo "Error: " . $stmt;
        }
    }

    function dbInsert($table_name, $name, $sex, $score)
    {
        global $dsn, $username, $password;
        $pdo = new PDO($dsn, $username, $password);
        $stmt = $pdo->prepare("insert into " . $table_name . " (stu_name, stu_sex, stu_score) values (?,?,?)");
        $stmt->execute([$name, $sex, $score]);
    }

    function dbDelete($table_name, $id)
    {
        global $dsn, $username, $password;
        $pdo = new PDO($dsn, $username, $password);
        $stmt = $pdo->prepare("delete from " . $table_name . " where stu_id = $id");
        $stmt->execute();
    }

    function updateForm($table_name, $id, $name, $sex, $score)
    {
        global $dsn, $username, $password, $st_id, $st_name, $st_sex, $st_score;
        $pdo = new PDO($dsn, $username, $password);

        // Bring data to form
        $stmt = $pdo->prepare("select * from " . $table_name);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_BOTH);
        $st_id = $id;
        $st_name = $name;
        $st_sex = $sex;
        $st_score = $score;
    }

    function dbUpdate($table_name, $id, $name, $sex, $score)
    {
        global $dsn, $username, $password, $st_id, $st_name, $st_sex, $st_score;
        $pdo = new PDO($dsn, $username, $password);

        $st_id = $id;
        $st_name = $name;
        $st_sex = $sex;
        $st_score = $score;
        $stmt = $pdo->prepare("update " . $table_name . " set stu_name='$st_name', stu_sex='$st_sex', stu_score=$st_score where stu_id=$st_id");
        $stmt->execute();
    }
}