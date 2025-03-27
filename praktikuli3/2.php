<?php
function func2($M,$N,$a,$b){
    if ($M<=0|| $N<=0 || $a>$b)
    {
        echo "Error!Please enter correct Data";
        return;
    }
    echo "<table class='tableDesign'>";
    for ($i=0; $i < $M ; $i++) { 
        echo "<tr>";
        for ($j=0; $j < $N; $j++) {
            $randomNum=rand($a,$b) ;
            echo "<td>".$randomNum."</td>"   ;
        }
        echo "</tr>";
    }
    echo "</table>"; 
    

 
}    
if(!empty($_POST['M'])&&!empty($_POST['N'])&&!empty($_POST['a'])&&!empty($_POST['b'])){
        $M=$_POST['M'];
        $N=$_POST['N'];
        $a=$_POST['a'];
        $b=$_POST['b'];

        func2($M,$N,$a,$b);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.2</title>
    <link rel="stylesheet" href="tableDesign.css">
</head>
<body>
    <form action="" method="post">
        <input type="number" name="M" placeholder="Input M"><br>
        <input type="number" name="N" placeholder="Input N"><br>
        <input type="number" name="a" placeholder="Input a"><br>
        <input type="number" name="b" placeholder="Input b"><br>
        <button>Generate</button>
    </form>

 
</body>
</html>