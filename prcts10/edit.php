<?php
if(isset($_GET['edit'])) {
    include "connection.php";
    $id=$_GET['edit'];
    $selectForEdit=mysqli_query($conn,"SELECT * FROM roles WHERE id='$id'");
    $editRows=mysqli_fetch_assoc($selectForEdit);
}
?>

<form method="post">
<input type="text" name="editText" value="<?=$editRows['status']?>">
<button name="edit_but">Edit</button>
</form>

<?php
if(isset($_POST['edit_but'])){
    $status=$_POST['editText'];
    $edit_query=mysqli_query($conn,"UPDATE roles SET status='$status' WHERE id='$id'");
}
?>