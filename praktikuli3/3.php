<?php
$numbers=rand(10000,99999);
$hiddenInput=$_POST['hiddenInput'] ?? '';
$userInput=$_POST['userInput'] ?? '';

if (isset($_POST['userInput'])) {
    if ($userInput==$hiddenInput)
    {
        echo "Correct!";
    }
    else 
    {
        echo "Incorrect!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.3</title>
</head>
<body>
    <form method="post">
     <p>Generated Code: <strong><?php echo $numbers ;?></strong></p>
     <input type="hidden" name="hiddenInput" value="<?php echo $numbers;?>">
     Ender Code: <input type="number" name="userInput">
     <br>
     <br>
     <button style="color:purple;">Next</button>
    </form>
    
</body>
</html>

