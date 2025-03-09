<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="table-style.css">
</head>
<body>
    <h3>Operations for matrices</h3>
    <form method="post">
     <input type="number" name="x" placeholder="Input x">
     <br>
     <button name="GO">GO!</button>

    </form>
<?php
//1
for ($i=0; $i <4 ; $i++) {
    
        for ($j=0; $j <4 ; $j++) {
            $matrix[$i][$j] = rand(1,100);
    }
    
}
//2
echo "<table>";
foreach ($matrix as $row) {
    echo "<tr>";    
    foreach ($row as $element) {
        echo "<td>$element</td>";
    }
    echo "</tr>";
}
echo "</table>";
//3
echo "<h3>Main diagonal above elements:</h3>";

echo "<table>";
for ($i=0; $i <4 ; $i++) { 
    for ($j=$i+1; $j < 4 ; $j++) { 
        echo "<tr><td>".$matrix[$i][$j]."</td?</tr>";
    }
}
echo"</table>";
//4
$x=$_POST['x'] ?? 0;
echo "<h3>Multiples of x: $x</h3>";
if (isset($_POST['GO'])){
$x=$_POST['x'] ?? 0;}
if(empty($x)){
    echo '<h4 style="color:red;">Please enter a number to make operation</h4>';
}
else {

foreach ($matrix as $row) {
    foreach ($row as $element) {
        if ($element%$x==0){
        echo "(","$element)";
    }
  }
}
}

//56
$sum=0;
foreach ($matrix as $row) {
    foreach ($row as $element) {
        $sum+=$element; 
    }
}
echo "<h3>Sum of elements: $sum.</h3>";

//6
$product=1;
foreach ($matrix as $row) {
    foreach($row as $element)
    {
        $product*=$element;
    }
}
echo "<h3>Product of elements: $product.</h3>";

//7
$average=$sum/16;
echo "<h3>Average of numbers: $average.</h3>";

//8
echo "<h3>The sum of the digits of each element:</h3>";
echo "<table>";
foreach ($matrix as $row) {
   echo "<tr>";
   foreach ($row as $element) {
    $digit_sum=0;
    while ($element > 0) {
        $digit_sum+=$element%10;
        $element=(int)($element/10);
    }
    echo "<td>$digit_sum</td>";
   }
   echo "</tr>";
}

echo "</table>";
?>

</body>
</html>