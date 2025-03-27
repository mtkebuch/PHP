<?php
$firstChoice = range(10,99);
$secondChoice = range(100,999);
$thirdChoice = range(1000,9999);


if (isset($_POST['button']))   {
    
$firstchoice = (int)$_POST['firstChoice'] ?? 0;
$secondchoice = (int)$_POST['secondChoice'] ?? 0;
$thirdchoice = (int)$_POST['thirdChoice'] ?? 0;


$sum=$firstchoice+$secondchoice+$thirdchoice;
$average=$sum/3;
$product=$firstchoice*$secondchoice*$thirdchoice;
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

        <select name="firstChoice" value="">
         
        
        <?php
        foreach ($firstChoice as $numbers) {
            echo "<option value='$numbers'>$numbers</option>";
        }
        ?>

        </select>

        <br>

        <select name="secondChoice" value="">

        <?php
        foreach ($secondChoice as $numbers) {
            echo "<option value='$numbers'>$numbers</option>";
        }
          
        
        ?>
        
        </select>
        <br>

        <select name="thirdChoice" value="";>
           <?php
           foreach ($thirdChoice as $numbers) {
              echo "<option values='$numbers'>$numbers</option>";
           }
           ?>

            
        </select>

        <br>

        <button name="button">Go</button>
    </form>

<?php

if (isset($_POST['button'])) {
    echo "Sum: $sum <br> Average: $average <br> Product: $product";
    }

?>
</body>
</html>