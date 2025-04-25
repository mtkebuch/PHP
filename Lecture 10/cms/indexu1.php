<?php
    include_once "includes/connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS</title>
    <link rel="stylesheet" href="front/front.css">
</head>
<body>
    <header></header>
    <main>
        <nav>
            <ul>
                <li><a href="index.php">სტატისტიკები</a></li>
                <li><a href="?nav=role">როლების მართვა</a></li>
                <li><a href="?nav=user">მომხმარებლის მართვა</a></li>
                <li><a href="?nav=hotel">სასტუმროების მართვა</a></li>
                <li><a href="?">ოთახების მართვა</a></li>
            </ul>
        </nav>
        <div class="content">
            <?php
            if(isset($_GET['nav']) && $_GET['nav']=='role'){
                include "includes/roles/roles.php";
            }
            ?>

        </div>
    </main>
    <footer></footer>
</body>
</html>