<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>database</title>
</head>
<body>
    <header></header>
    <main>
        <nav>
            <a href="?nav=hotels">Hotels</a>
        </nav>
    </main>
    <footer></footer>

</body>
</html>
<?php
if(isset($_GET['nav'])&&$_GET['nav']==='hotels'){
    include "hotels.php";
    include "conn.php";

    $file=fopen("hotels.txt",'w');
    $select=mysqli_query($conn,"SELECT * FROM hotels");
    
    while($rows=mysqli_fetch_assoc($select)){
        fwrite($file,$rows['id'].','.$rows['name'].','.$rows['rate']."\n");
    }
    fclose($file);

}
?>