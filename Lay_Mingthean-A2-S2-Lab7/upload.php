<?php
if (isset($_POST['submit'])) {
    $countfiles = count($_FILES['files']['name']);
    $upload_dir = 'gallery' . DIRECTORY_SEPARATOR;
    $allowed_types = array('jpg', 'png', 'jpeg', 'gif');
    $maxsize = 5 * 1024 * 1024;
    if (!empty(array_filter($_FILES['files']['name']))) {
        for ($i = 0; $i < $countfiles; $i++) {
            echo $i . "/" . $countfiles;
            $filename = $_FILES['files']['name'][$i];
            $file_tmpname = $_FILES['files']['tmp_name'][$i];
            $file_name = $_FILES['files']['name'][$i];
            $file_size = $_FILES['files']['size'][$i];

            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
            $filepath = $upload_dir . $file_name;
            if (in_array(strtolower($file_ext), $allowed_types)) {
                if ($file_size >= $maxsize)
                    echo "Error: File size is larger than limit.";

                if (file_exists($filepath)) {
                    $filepath = $upload_dir . $file_name;

                    if (move_uploaded_file($file_tmpname, $filepath)) {
                        echo " {$file_name} successfully uploaded <br />";
                    } else {
                        echo "Error uploading {$file_name} <br />";
                    }
                } else {

                    if (move_uploaded_file($file_tmpname, $filepath)) {
                        echo " {$file_name}  successfully uploaded <br />";
                    } else {
                        echo "Error uploading {$file_name} <br />";
                    }
                }
            } else {
                echo "Error uploading {$file_name} ";
                echo "({$file_ext} file type is not allowed)<br / >";
            }
        }
    } else {
        echo "No files selected.";
    }
}

header("Location: http://localhost/Lay_Mingthean-A2-S2-Lab7/");
exit();