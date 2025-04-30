<?php
include "connection.php";
?>

<form  method="post">
    <input type="text" name="addRole">
    <button name="roleAdd">Click</button>
</form>

<?php
if(isset($_POST['roleAdd'])){
    $addRole=$_POST['addRole'];
    $add_q=mysqli_query($conn,"INSERT INTO users(role_id) VALUES('$addRole')");
}
?>