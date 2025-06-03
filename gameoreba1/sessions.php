<?php
session_start();
include "conn.php";
if(isset($_POST['Btn'])){
    $username=$_POST['username'];
    $password=$_POST['pass'];
    $query=mysqli_query($conn,"SELECT * FROM customers");
    if(mysqli_num_rows($query)!=0){
        $_SESSION['username']=$username;
        echo "Login Success";
    }
    else {
        echo "No user found";
    }
}

?>

<form action="" method="post">
    <input type="text" name="username">
    <input type="password" name="pass">
    <button name="Btn">Click</button>
    <a href="cruds.php">Admin</a>
</form>
