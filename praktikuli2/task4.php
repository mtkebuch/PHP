<?php
$cars = array(
    array(
        "Make" => "Toyota",
        "Model" => "Corolla",
        "Color" => "White",
        "Mileage" => 24000,
        "Status" => "Sold"
    ),
    array(
        "Make" => "Toyota",
        "Model" => "Camry",
        "Color" => "Black",
        "Mileage" => 56000,
        "Status" => "Available"
    ),
    array(
        "Make" => "Honda",
        "Model" => "Accord",
        "Color" => "White",
        "Mileage" => 15000,
        "Status" => "Sold"
    )
);
echo "<table>";
echo "<tr>";
foreach ($cars[0] as $key => $value) {
    echo "<th>$key</th>";
}
echo "</tr>";

foreach ($cars as $row) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}

echo "</table>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 4</title>
    <link rel="stylesheet" href="table-style.css">
</head>
<body>

</body>
</html>