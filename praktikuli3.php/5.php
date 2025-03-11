<?php
function number_length($number){
     return strlen($number);

}


if(isset($_POST['number'])) {
    if (!empty ($_POST['number'])){
        echo "<p> Digits:".number_length($_POST['number']). "</p>";

    }
    else {
        echo "Please enter a number!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
        <input type="number" name="number" placeholder="Enter a number:">
        <button name="count">Enter</button>
    </form>
</body>
</html>
