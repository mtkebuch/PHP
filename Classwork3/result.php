<?php
    $student = $_POST['student_n'] . " " . $_POST['student_l'];
    $lecturer = $_POST['lecturer_n'] . " " . $_POST['lecturer_l'];
    $grades = $_POST['grades'] ?? []; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Student: <?=$student?></h2>
    <h3>Graded by: <?=$lecturer?></h3>
    <table class="table-1">
        <tr>
            <th>Questions</th>
            <th>Points</th>
        </tr>
        <?php
            foreach ($grades as $index => $grade) {
                echo "<tr><td>Question " . ($index + 1) . "</td><td>" . htmlspecialchars($grade) . "</td></tr>";
            }
        ?>
    </table>
</body>
</html>

