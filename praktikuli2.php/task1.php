<?php
$numbers=[];
for ($i=0; $i < 12; $i++) { 
    $numbers[] = rand(1, 100);
}

$less=0;
$greater=0;
$x = $_POST['x'] ?? 0;

foreach ($numbers as $n) {
    if ($n<$x) $less++;
    if($n>$x) $greater++;
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
        <label>Enter X:</label>
        <input type="number" name="x" required>
        <button>Submit</button>
    </form>
<?php
echo "<h3>Random Numbers:". implode(",",$numbers)."</h3>";
echo "<p>Numbers less than X:$less</p>";
echo "<p>Numbers greater than x:$greater</p>";
?>
</body>

</html>
