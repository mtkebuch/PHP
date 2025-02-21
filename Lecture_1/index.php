<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 2</title>
</head>
<body>
    <?php


$students = [
    'mari' => rand(0, 100),
    'elene'=>rand(0, 100),
    'anano'=> rand(0, 100),
    'sofo' => rand(0, 100),
    'ana'  => rand(0,100)
];
echo "<pre>";
print_r($students);
echo"</pre>";

$sum = 0;
$max_point = 0;
foreach ($students as $student=>$grade){
    echo "Student:$student,Grade:$grade <br>";
    $sum+=$grade;
    if($max_point<$grade)$max_point=$grade;
}
echo "<h1>$sum</h1>";

// $average=$sum/count($students);
// echo "<h1>$average</h1>";

echo "<h1>".$sum/count($students)."</h1>";
echo "<h1>".$max_point."</h1>";

foreach ($students as $student=>$grade){
    if($grade>= $sum/count($students))

    echo"<div>$student,$grade</div>";
  
}

    ?>
    



</body>
</html>