<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="file">
        <button name="fileBtn">create file</button>
        <br><br>
        <input type="text" name="folder">
        <button name="folderBtn">create folder</button>
    </form>
</body>
</html>

<?php
if(isset($_POST['fileBtn'])){
    $file=$_POST['file'];
    if(!empty($file)&&!is_file("storage/".$file.".txt")){
        fopen("storage/".$file.".txt",'w');
    }
    else {
        echo "file already exists or input is empty";
    }
}

if(isset($_POST['folderBtn'])){
    $folder=$_POST['folder'];
    if(!empty($folder)&&!is_dir("storage/".$folder)){
        mkdir("storage/".$folder);
    }
    else {
        echo "folder already exists or input is empty";
    }

}
?>