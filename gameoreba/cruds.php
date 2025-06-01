<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header></header>
    <main>
        <nav>
            <a href="?nav=genres">genres</a>
            <a href="?nav=users">users</a>
        </nav>
    </main>
    <footer></footer>
</body>
</html>
<?php
if(isset($_GET['nav'])&&$_GET['nav']==='genres'){
    include "genres.php";
}
if(isset($_GET['nav'])&&$_GET['nav']==='users'){
    include "users.php";
}
?>

