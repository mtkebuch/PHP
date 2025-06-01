<?php

if (isset($_POST['folderBtn'])) {
    $folderName = $_POST['folder'];
    if (!empty($folderName) && !is_dir("storage/" . $folderName)) {
        mkdir("storage/" . $folderName);  
    } else {
        echo "Folder exists or empty";
    }
}

if (isset($_POST['fileBtn'])) {
    $fileName = $_POST['file'];
    if (!empty($fileName) && !is_file("storage/" . $fileName . ".txt")) {
        fopen("storage/" . $fileName . ".txt", 'w');
    } else {
        echo "File exists or empty";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
   <form action="" method="post">
    <input type="text" name="file">
    <button name="fileBtn">Create file</button>
    <br>
    <input type="text" name="folder">
    <button name="folderBtn">Create folder</button>
   </form>
</body>
</html>
