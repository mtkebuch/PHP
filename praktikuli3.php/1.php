<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tableDesign.css">
</head>
<body>
    <h3>1.</h3>
<?php 
function func1() {
    $numbers=[];
    echo "<table class='tableDesign'>";
    for ($i=0; $i < 10 ; $i++) { 
        echo "<tr>";
        for ($j=0; $j < 10 ; $j++) { 
            echo "<td>" . rand(10, 99) . "</td>";
        }
        echo "</tr>";
    }    
    echo "</table>";
}

func1();
?>
</body>
</html>