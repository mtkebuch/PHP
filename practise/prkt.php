<?php
$num1=$_POST['num1'] ?? 0;
$num2=$_POST['num2'] ?? 0;
$num3=$_POST['num3'] ?? 0;
$sum=0;
$avg=0;
$prod=1;

if (isset($_POST['button'])) {
    if (!empty($_POST['num1']) && !empty($_POST['num2']) && !empty($_POST['num3']) ) {
        $sum=$num1+$num2+$num3;
        echo "<br>";
        $avg=$sum/3;
        echo "<br>";
        $prod=$num1*$num2*$num3;

    }
    else {
        echo "Please enter all numbers!";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <input type="number" name="num1" value="" placeholder="num1">
    <br>
    <input type="number" name="num2" value="" placeholder="num2">
    <br>
    <input type="number" name="num3" value="" placeholder="num3">
    <br>
    <button name="button">Click </button>
    </form>

 <?php
 if(isset($_POST['button'])) {
    echo "Sum of numbers is: $sum";
    echo "<br>";
    echo "Avg of numbers is: $avg";
    echo "<br>";
    echo "Product of numbers is: $prod";
 }
 ?>

</body>
</html>

