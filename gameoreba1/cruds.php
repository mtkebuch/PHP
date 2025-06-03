<?php
session_start();
include "conn.php";
if(isset($_GET['logout'])){
    unset($_SESSION['username']);
    session_destroy();
    header("location:sessions.php");
    echo "You have been logged out";
}

if(!isset($_SESSION['username'])){
    header("location:sessions.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operations</title>
</head>
<body>
    <header>
        <a href="?logout">Log out</a>
    </header>
    <main>
        <nav>
            <a href="?nav=movies">Movies</a>
            <a href="?nav=customers">Customers</a>
        </nav>
    </main>
    <footer></footer>
</body>
</html>
<?php
if(isset($_GET['nav']) && $_GET['nav']=='movies'){
    include "movies.php";
}
if(isset($_GET['nav']) && $_GET['nav']=='customers'){
    include "customers.php";
}
?>

<?php
$file=fopen('customers.txt','w');
$query=mysqli_query($conn,"SELECT * FROM customers");
while($row=mysqli_fetch_assoc($query)){
    fwrite($file,$row["customer_id"].''.$row["name"].''.$row['email']."\n");
}
?>
<br><br>
<form action="" method="post">
    <h3>Create file</h3>
    <input type="text" name="file">
    <h3>Write text for file</h3>
    <textarea name="text"></textarea>
    <button name="fileBtn">click!</button>
</form>



<?php
if(isset($_POST['fileBtn'])){
    $file=$_POST['file'];
    $text=$_POST['text'] ?? '';
    if(!empty($file) && !is_file("storage/"."$file".".txt")){
        $f=fopen("storage/"."$file".".txt",'w');
        fwrite($f,$text);
        fclose($f);
        echo "file created";
    }
    else {
        echo "file already exists";
    }
}

?>
<form action="" method="post">
    <h3>Create folder</h3>
    <input type="text" name="folder">
    <button name="folderBtn">click!</button>
</form>

<?php
if(isset($_POST['folderBtn'])){
    $folder=$_POST['folder'];
    if(!empty($folder) && !is_dir("storage/".$folder)){
        mkdir("storage/".$folder);
        echo "folder successfully created!";
    }
    else {
        echo "folder already exists";
    }

}

?>