<?php
session_start();
if(isset($_GET['logout'])){
    unset($_SESSION['username']);
    session_destroy();
    header(location:"sessions.php");
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
    <header>
        <a href="?logout">Log Out</a>
    </header>
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
<?php
include "conn.php";
$file=fopen("authors.txt",'w');
$query=mysqli_query($conn,"SELECT * FROM authors");
while($fetch=mysqli_fetch_assoc($query)){
fwrite($file, $fetch['AuthorID'] . '. ' . $fetch['FirstName'] . ' ' . $fetch['LastName'] . "\n");

}
fclose($file);
?>

