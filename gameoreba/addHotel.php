<?php
include "conn.php";
?>

<form action="" method="post">
    <input type="text" name="addHotel">
    <button name="add_but">Add</button>
</form>

<?php
if(isset($_POST['add_but'])){
    $addHotel=$_POST['addHotel'];
    if(!empty($addHotel)){
    $addQuery=mysqli_query($conn,"INSERT INTO hotels(name) VALUES ('$addHotel')");
    }
    else {
        echo "Please input name";
    }
}
?>