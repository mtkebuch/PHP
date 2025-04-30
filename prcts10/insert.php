<?php
include "connection.php"


?>
<form method="post">
    <input type="text" name="roleAdd">
    <button name="add_but">Add role</button>
</form>

<?php 
if(isset($_POST['add_but'])){
    $roleAdd=$_POST['roleAdd'];
    $resultAdd=mysqli_query($conn,"INSERT INTO roles(status) VALUES ('$roleAdd')");
}
?>
