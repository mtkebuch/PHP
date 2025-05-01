<?php
include "conn.php";
$id=$_GET['edit'];
$selectForEdit=mysqli_query($conn,"SELECT * FROM customers WHERE id='$id'");
$rowEdit=mysqli_fetch_assoc($selectForEdit);

?>

<form method="post">
    <input type="text" name="editValue" value="<?=$rowEdit['saxeli']?>">
    <button name="edit_but">Edit customer</button>
    
</form>

<?php
if(isset($_POST['edit_but'])){
    $editValue=$_POST['editValue'];
    mysqli_query($conn,"UPDATE customers SET saxeli='$editValue' WHERE id='$id'");
}
?>