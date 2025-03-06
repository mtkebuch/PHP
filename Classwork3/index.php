<?php
    include "questions.php"; 

    shuffle($questions); 
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
    <form action="lecturer.php" method="post">
        <table class="table-1">
            <tr>
                <th>Questions</th>
                <th>Answers</th>
                <th>Max Point</th>
            </tr>
            <?php
                for ($i = 0; $i < count($questions); $i++) {
            ?>
            <tr>
                <td><?=$questions[$i]['question']?>
                    <input type="hidden" name="questions[]" value="<?=$questions[$i]['question']?>">
                </td>
                <td><input type="text" name="answers[]"></td>
                <td><?=$questions[$i]['maxpoint']?>
                    <input type="hidden" name="maxpoints[]" value="<?=$questions[$i]['maxpoint']?>">
                </td>
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="3">
                    Student: 
                    <input type="text" placeholder="Name" name="student_n">
                    <input type="text" placeholder="Lastname" name="student_l">
                    <button>Send</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
