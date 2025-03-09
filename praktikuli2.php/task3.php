<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="table-style.css">
</head>
<body>
    <h3>6x5 Matrix with Sum of Indices</h3>
<?php 
//step 1 
$matrix=[];
for ($i=0; $i <6 ; $i++) { 
    for ($j=0; $j <5 ; $j++) { 
        $matrix[$i][$j]=$i+$j;
    }
}
//step 2
echo "<table>";
foreach ($matrix as $row) {
    echo "<tr>";
    foreach ($row as $element) {
        echo "<td>$element</td>";
    }
    echo "</tr>";
}
echo "</table>"

?>
</body>
</html>

