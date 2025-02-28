<?php
    include "questions.php";
    // echo "<pre>";
    // print_r($questions);
    // echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClassWork 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="LecturerSide.php" method="post">
        <table class="table-1">
            <tr>
                <th>Questions</th>
                <th>Answers</th>
                <th>Max Point</th>
            </tr>
            <?php
                for($i=0; $i<count($questions); $i++){
            ?>
            <tr>
                <td><?=$questions[$i]['question']?></td>
                <td><input type="text"></td>
                <td><?=$questions[$i]['maxpoint']?></td>
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="3">
                    Student: 
                    <input type="text" placeholder="Name">
                    <input type="text" placeholder="Lastname">
                    <button>Send</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
