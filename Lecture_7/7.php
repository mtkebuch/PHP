<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="f_name" >
            <br><br>
            <button name="up_file">Upload File</button>
        </form>
        <div class="info">

            <?php
             if(isset($_POST['up_file'])) {
                $max_size=1024*1024*4;
                 echo "<pre>";
                 print_r($_FILES);
                 echo "</pre>";

                 $f_info = $_FILES['f_name'];
                 
                 if($f_info['size']<=$max_size){
                     
                     move_uploaded_file($f_info['tmp_name'], 'storage/'.$f_info['name']);
                 }
                 else {
                    echo "File size is too big";
                 }

                 echo "<pre>";
                 print_r(pathinfo($f_info['name']));
                 echo "</pre>";
                 echo pathinfo($f_info['name'])['extension'];

                 


              }

            ?>
        </div>
    </div>

</body>

</html>
<?php

?>