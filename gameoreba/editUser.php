<?php
include "conn.php";

$id=$_GET['edit'];
$query=mysqli_query($conn,"SELECT * FROM users WHERE UserID='$id'");
$fetch=mysqli_fetch_assoc($query);
?>

<form action="" method="post">
    <input type="text" name="editUser" value="<?=$fetch['Username']?>">
    <button name="editBtn">Edit</button>
</form>

<?php
if(isset($_POST['editBtn'])){
    $editUser=$_POST['editUser'];
    $editQ=mysqli_query($conn,"UPDATE users SET Username='$editUser' WHERE UserID='$id'");
}
?>