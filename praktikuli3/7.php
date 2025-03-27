<?php
function vector($a,$b,$M) {
    $result=[];
    for ($i=0; $i <$M ; $i++) { 
        $result[]=rand($a,$b);
        }
    return $result;
    }
if (isset($_POST['button'])){
    if (!empty($_POST['M']) && !empty($_POST['a']) && !empty($_POST['b']))
    {
    $M=$_POST['M'];
    $a=$_POST['a'];
    $b=$_POST['b'];
    $vector = vector($a,$b,$M);

   
    echo "Generated vector: " . implode(",", $vector);
}
    else {
        echo "Please input all fields!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.7</title>
    <link rel="stylesheet" href="input.css">
</head>
<body>

    <form method="post">
        Enter M <input type="number" name="M" placeholder="M">
        <br>
        Enter a <input type="number" name="a" placeholder="a">
        <br>
        Enter b <input type="number" name="b" placeholder="b">
        <br>
        <button name="button">Click</button>
    </form>
    
</body>
</html>