<?php
include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>database</title>
    <link rel="stylesheet" href="custom.css">
</head>
<body>
    <header></header>
    <main>
        <nav>
            <ul><a href="?nav=customers">მომხმარებლის მართვა</a></ul>
        </nav>
    </main>
    <footer></footer>
</body>
</html>

<?php
if (isset($_GET['nav']) && $_GET['nav'] === "customers") {
    include "customers.php"; 
}
include "conn.php";

$file=fopen("customers.txt",'w');

$selectQ=mysqli_query($conn,"SELECT * FROM customers");

while($row=mysqli_fetch_assoc($selectQ)){
    fwrite($file,$row['id'].",".$row['saxeli'].",".$row['gvari']."\n");
}
fclose($file);
?>


