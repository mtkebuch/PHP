


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="num1" id="num1">
        <input type="number" name="num2" id="num2">
        <input type="number" name="num3" id="num3"> 
        <br>
        <button name="button">Submit</button>

    </form>
   
</body>
</html>
<?php


if(isset($_POST['button'])){
    $num1=$_POST['num1']?? 0;
    $num2=$_POST['num2']?? 0;
    $num3=$_POST['num3']?? 0;

    if($num1<10||$num1>90) {
        echo "Incorrect,range is 10,99";
    }

    elseif($num2<100||$num2>999) {
        echo "Incorrect,range is 100,999";
    }

    elseif($num3<1000||$num3>9999) {
        echo "Incorrect,range is 1000,9999";
    }

    else {
        $sum=$num1+$num2+$num3;
        echo "Sum is : $sum";
        echo "<br>";
        $product=$num1*$num2*$num3;
        echo "Product is : $product";
        echo "<br>";
        $average=$sum/3;
        echo "Average is : $average";

    }
}
?>