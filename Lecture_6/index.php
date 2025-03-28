<?php
    include "folder_file.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <form method="post">
            <input type="text" name="dir_name"> - 
            <button name="cr_dir">Create a Folder</button>
            <span class="erorr"><?=$error_fold?></span>  
            <br><br>
            <input type="text" name="f_name"> - 
            <button name="cr_file">Create a File</button>
            <span class="erorr"><?=$error_file?></span> 
        </form>
    </header>
    <main>
        <table>
            <tr>
                <th>status</th>
                <th>size(bytes)</th>
                <th>name</th>
                <th>action</th>
            </tr>
            <?php
                for($i=2; $i<count($content); $i++){
            ?>

            <tr>
                <td>
                    <?php
                        if(is_dir($storage_patch."/".$content[$i])) echo "Folder"; else echo "File";
                    ?>
                </td>
                <td>
                    <?=filesize($storage_patch."/".$content[$i])?>
                </td>
                <td><?=$content[$i]?></td>
                <td>
                    <a  href="?drop=<?=$storage_patch."/".$content[$i]?>">Delete</a>
                    <a  href="?drop=<?=$storage_patch."/".$content[$i]?>">Insert</a>
                    <a  href="?drop=<?=$storage_patch."/".$content[$i]?>">Read</a>
                    
                </td>
            </tr>        

            <?php
                }
            ?>
            <div>
                <?php
                if(isset($_GET['insert'])) {
                    include "insert.php";
                }
                if(isset($_GET['read'])) {
                    include "read.php";
                }
                ?>
            </div>
        </table>
    </main>
</body>
</html>
