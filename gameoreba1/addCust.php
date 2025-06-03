<?php
include "conn.php";
?>
<form action="" method="post">
    <input type="text" name="addCust" >
    <button name="addBtn">add customer</button>
</form>

<?php
if(isset($_POST['addBtn'])){
    $addCust=$_POST['addCust'];
    $addQ=mysqli_query($conn,"INSERT INTO customers(name) VALUES('$addCust')");
}
?>