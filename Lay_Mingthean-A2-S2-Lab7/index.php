<?php
$dir = __DIR__ . DIRECTORY_SEPARATOR . "gallery" . DIRECTORY_SEPARATOR;
$images = glob($dir . "*.{jpg,jpeg,gif,png,bmp,webp,avi,mp4}", GLOB_BRACE);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="./style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="./gallery.js"></script>
    <title>Image Gallery</title>
</head>

<body>
    <div id="lbOuter" onclick="gallery.hide()">
        <div id="lbInner"></div>
    </div>
    <div id="gallery">
        <?php
        foreach ($images as $i) {
            $img = basename($i);
            printf("<img src='gallery/%s'/>", $img);
        }
        ?>



        <form action="upload.php" method="post" enctype="multipart/form-data" class="container">
            <div class="mb-3">
                <label for="formFile" class="form-label">Choose your picture to upload</label>
                <input class="form-control" type="file" name="the_file" id="fileToUpload" id="file-input"
                    onchange="previewFile(this);" multiple required>
                <div id=" thumb-output">
                </div>
            </div>
            <img id="previewImg" src="">
            <br>
            <button type="submit" class="btn btn-primary" name="submit" value="Start Upload">Upload Files</button>
        </form>
    </div>


</html>