<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grade Form</title>
</head>
<body>

<form method="post" action="">
    <label for="student_name">Student First Name:</label>
    <input type="text" id="student_name" name="student_name"><br><br>

    <label for="student_lastname">Student Last Name:</label>
    <input type="text" id="student_lastname" name="student_lastname"><br><br>

    <label for="course">Course:</label>
    <input type="text" id="course" name="course"><br><br>

    <label for="semester">Semester:</label>
    <input type="text" id="semester" name="semester"><br><br>

    <label for="subject">Subject:</label>
    <input type="text" id="subject" name="subject"><br><br>

    <label for="grade">Grade:</label>
    <input type="number" id="grade" name="grade"><br><br>

    <label for="lecturer_name">Lecturer First Name:</label>
    <input type="text" id="lecturer_name" name="lecturer_name"><br><br>

    <label for="lecturer_lastname">Lecturer Last Name:</label>
    <input type="text" id="lecturer_lastname" name="lecturer_lastname"><br><br>

    <label for="dean_name">Dean First Name:</label>
    <input type="text" id="dean_name" name="dean_name"><br><br>

    <label for="dean_lastname">Dean Last Name:</label>
    <input type="text" id="dean_lastname" name="dean_lastname"><br><br>

    <input type="submit" value="Submit">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $grade = $_POST['grade'];
    $grade_comment = "";

    if ($grade >= 90) {
        $grade_comment = "A - Excellent";
    } elseif ($grade >= 80) {
        $grade_comment = "B - Very Good";
    } elseif ($grade >= 70) {
        $grade_comment = "C - Good";
    } elseif ($grade >= 60) {
        $grade_comment = "D - Satisfactory";
    } else {
        $grade_comment = "F - Fail";
    }

    echo "<table border='1'>
            <tr>
                <th>Student Name</th>
                <th>Course</th>
                <th>Semester</th>
                <th>Subject</th>
                <th>Grade</th>
                <th>Grade Comment</th>
                <th>Lecturer</th>
                <th>Dean</th>
            </tr>
            <tr>
                <td>{$_POST['student_name']} {$_POST['student_lastname']}</td>
                <td>{$_POST['course']}</td>
                <td>{$_POST['semester']}</td>
                <td>{$_POST['subject']}</td>
                <td>{$_POST['grade']}</td>
                <td>{$grade_comment}</td>
                <td>{$_POST['lecturer_name']} {$_POST['lecturer_lastname']}</td>
                <td>{$_POST['dean_name']} {$_POST['dean_lastname']}</td>
            </tr>
          </table>";
}
?>

</body>
</html>
