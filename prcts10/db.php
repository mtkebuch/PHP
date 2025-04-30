<?php
include "connection.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <link rel="stylesheet" href="db1.css">
</head>
<body>
    <header></header>
    <a href="?nav=roles">როლების მართვა</a>
    <br>
    <a href="?nav=users">მომხმარებლის მართვა</a>
    <br>
    <footer></footer>
    <br>
    <?php
    if(isset($_GET['nav']) && $_GET['nav']==="roles") {
        include "roles.php";
    }
    if(isset($_GET['nav']) && $_GET['nav']==="users") {
        include "users.php";
    }
    ?>
</body>
</html>
