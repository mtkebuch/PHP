<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Quiz Form</title>
</head>
<body>

<h2>Student Quiz</h2>

<form method="post" action="">
 
    <h3>1. What is PHP?</h3>
    <input type="radio" id="q1a" name="question1" value="A">
    <label for="q1a">A. Hypertext Preprocessor</label><br>
    <input type="radio" id="q1b" name="question1" value="B">
    <label for="q1b">B. Preprocessor Hypertext</label><br>
    <input type="radio" id="q1c" name="question1" value="C">
    <label for="q1c">C. Programming Hypertext Preprocessor</label><br>
    <input type="radio" id="q1d" name="question1" value="D">
    <label for="q1d">D. None of the above</label><br><br>


    <h3>2. How do you write a PHP script?</h3>
    <input type="radio" id="q2a" name="question2" value="A">
    <label for="q2a">A. <code>&lt;html&gt;</code>...</label><br>
    <input type="radio" id="q2b" name="question2" value="B">
    <label for="q2b">B. <code>&lt;?php ... ?&gt;</code></label><br>
    <input type="radio" id="q2c" name="question2" value="C">
    <label for="q2c">C. <code>&lt;script&gt; ... &lt;/script&gt;</code></label><br>
    <input type="radio" id="q2d" name="question2" value="D">
    <label for="q2d">D. None of the above</label><br><br>

    
    <h3>3. What type of language is PHP?</h3>
    <input type="radio" id="q3a" name="question3" value="A">
    <label for="q3a">A. HTML</label><br>
    <input type="radio" id="q3b" name="question3" value="B">
    <label for="q3b">B. Server-side scripting language</label><br>
    <input type="radio" id="q3c" name="question3" value="C">
    <label for="q3c">C. Client-side scripting language</label><br>
    <input type="radio" id="q3d" name="question3" value="D">
    <label for="q3d">D. None of the above</label><br><br>

    
    <h3>4. What is the full meaning of PHP?</h3>
    <input type="text" name="question4"><br><br>

   
    <h3>5. What is HTML?</h3>
    <input type="text" name="question5"><br><br>

    <input type="submit" value="Submit">
</form>
<?php


$correct_answers = array(
    'question1' => 'A',
    'question2' => 'C',
    'question3' => 'B',
    'question4' => 'PHP',
    'question5' => 'HTML'
);

$score = 0;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if ($_POST['question1'] == $correct_answers['question1']) {
        $score++;
    }
    if ($_POST['question2'] == $correct_answers['question2']) {
        $score++;
    }
    if ($_POST['question3'] == $correct_answers['question3']) {
        $score++;
    }

   
    if ($_POST['question4'] == $correct_answers['question4']) {
        $score++;
    }
    if ($_POST['question5'] == $correct_answers['question5']) {
        $score++;
    }

    echo "<h3>Your score: $score/5</h3>";
}
?>
</body>
</html>

