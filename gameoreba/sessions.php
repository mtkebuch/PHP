<?php
session_start();
include "conn.php";
if(isset($_POST['login'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $query=mysqli_query($conn,"SELECT * FROM users WHERE Username='$user' AND Password='$pass'");
    if(mysqli_num_rows($query)!=0){
        $_SESSION['username']=$user;
        header("location:cruds.php");
    }
    else {
        echo "Invalid username or password";
    }
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
    <form action="" method="post">
        <input type="text" name="user">
        <input type="text" name="pass">
        <button name="login">LOG IN</button>
    </form>
</body>
</html>