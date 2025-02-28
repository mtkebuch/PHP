<?php
    include "questions.php";
    // echo "<pre>";
    // print_r($questions);
    // echo "</pre>";

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table class="table-1">
        <tr>
            <td colspan="4">
                Student: 
            </td>
        </tr>
        <tr>
            <th>Questions</th>
            <th>Answers</th>
            <th>Max Point</th>
            <th>Point</th>
        </tr>
        <?php
            for($i=0; $i<count($questions); $i++){
        ?>
        <tr>
            <td><?=$questions[$i]['question']?></td>
            <td><?=$_POST["answers"][$i]?></td>
            <td><?=$questions[$i]['maxpoint']?></td>
            <td><input type="text"></td>
        </tr>
        <?php
            }
        ?>
        <tr>
            <td colspan="4">
                Lecturer: 
                <input type="text" placeholder="Name">
                <input type="text" placeholder="Lastname">
                <button>Send</button>
            </td>
        </tr>
    </table>
</body>
</html>
