<?php

$conn = mysqli_connect($host, $username, $password, $db);

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
                <a href=\"./includes/update.php?action=1&stu_id=$row[0]&stu_name=$row[1]&stu_sex=$row[2]&stu_score=$row[3]\">edit</a>
                </td>
            </tr>
            ";
        }
        echo '</table>';
    }
} else {
    echo "Error: " . $sql;
}