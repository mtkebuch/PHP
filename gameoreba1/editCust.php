<?php
include "conn.php";
$id=$_GET['edit'];
$query=mysqli_query($conn,"SELECT * FROM customers WHERE customer_id='$id'");
$row=mysqli_fetch_assoc($query);
?>
<form action="" method="post">
    <input type="text"  name="editCust" value="<?=$row['name']?>">
    <button name="editBtn">edit customer name</button>
</form>

<?php
if(isset($_POST['editBtn'])){
    $editCust=$_POST['editCust'];
    $editQ=mysqli_query($conn,"UPDATE customers SET name='$editCust' WHERE customer_id='$id'" );
}
?>