<?php
include "conn.php";

?>
<?php
$id=$_GET['edit'];
$selectQ=mysqli_query($conn,"SELECT * FROM hotels WHERE id='$id'");
$rows=mysqli_fetch_assoc($selectQ);
?>

<form action="" method="post">
    <input type="text" name="editedHotel" value="<?=$rows['name']?>">
    <button name="editHotel">Edit</button>
</form>

<?php
if(isset($_POST['editHotel'])){
    $editedHotel=$_POST['editedHotel'];
    $result=mysqli_query($conn,"UPDATE hotels SET name=('$editedHotel') WHERE id='$id'");
}
?>