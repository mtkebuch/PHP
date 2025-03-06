<?php
    
    $questions = $_POST['questions'] ?? [];
    $answers = $_POST['answers'] ?? [];
    $maxpoints = $_POST['maxpoints'] ?? [];

    
    $data = [];
    for ($i = 0; $i < count($questions); $i++) {
        $data[] = [
            'question' => $questions[$i],
            'answer' => $answers[$i],
            'maxpoint' => $maxpoints[$i]
        ];
    }

    
    shuffle($data);
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
<form action="result.php" method="post">
    <table class="table-1">
        <tr>
            <td colspan="4">
                Student: <?=$_POST['student_n']." ".$_POST['student_l']?>
                <input type="hidden" name="student_n" value="<?=$_POST['student_n']?>">
                <input type="hidden" name="student_l" value="<?=$_POST['student_l']?>">
            </td>
        </tr>
        <tr>
            <th>Questions</th>
            <th>Student Answers</th>
            <th>Max Points</th>
            <th>Lecturer's Grade</th>
        </tr>
        <?php foreach ($data as $index => $item) { ?>
        <tr>
            <td><?=$item['question']?></td>
            <td><?=$item['answer']?></td>
            <td><?=$item['maxpoint']?></td>
            <td><input type="text" name="grades[<?=$index?>]" required></td> 
        </tr>
        <?php } ?>
        <tr>
            <td colspan="4">
                Lecturer: 
                <input type="text" name="lecturer_n" placeholder="Name">
                <input type="text" name="lecturer_l" placeholder="Lastname">
                <button type="submit">Submit Grades</button>
            </td>
        </tr>
    </table>
</form>

</body>
</html>
