<?php
include "conn.php";
?>

<form method="post">
    <input type="text" name="addSaxeli">
    <input type="text" name="addGvari">
    <button name="add_but">Add customer</button>
</form>

<?php


if(isset($_POST['add_but'])){
$saxeli=$_POST['addSaxeli'];
$gvari=$_POST['addGvari'];
if(!empty($saxeli) && !empty($gvari)){
      $addCustomers=mysqli_query($conn,"INSERT INTO customers(saxeli,gvari) VALUES ('$saxeli','$gvari')");
      echo "Added!";
}
else {
    echo "Something is incorrect!";
}
}

?>