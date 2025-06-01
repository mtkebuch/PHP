<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numbers</title>
</head>
<body>
<form action="" method="post">
    <?php
    echo "<select name='select1'>";
    for ($i=1; $i < 100 ; $i++) { 
       echo "<option value='$i'>$i</option>";
    }
    echo "</select>";
    ?>
    <?php
    echo "<select name='select2'>";
    for ($i=100; $i <1000 ; $i++) { 
        echo "<option value='$i'>$i</option>";
    }
    echo "</select>";
    ?>
    <?php
    echo "<select name='select3'>";
    for ($i=1000; $i < 9999; $i++) { 
        echo "<option value='$i'>$i</option>";   
    }
    echo "</select>";
    ?>
    <button name="submit">Submit</button>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $sum=0;
    $num1=$_POST['select1'];
    $num2=$_POST['select2'];
    $num3=$_POST['select3'];
    $sum=$num1+$num2+$num3;
    echo "$sum";
}
?>