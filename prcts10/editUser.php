<?php
include "connection.php";
if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $editUser=mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");
    $editF=mysqli_fetch_assoc($editUser);
}
?>

<form  method="post">
<input type="text" name="updatedName" value="<?=$editF['name']?>">
<button name="editUser">Edit</button>
</form>

<?php
if(isset($_POST['editUser'])) {
    $name=$_POST['updatedName'];
    $update_q=mysqli_query($conn,"UPDATE users SET name='$name' WHERE id='$id'");
}
?>