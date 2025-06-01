<?php
include "conn.php";
?>

<form action="" method="post">
    add user <input type="text" name="addUser">
    <button name="addButton">Submit</button>
</form>

<?php
if(isset($_POST['addButton'])){
    $addUser=$_POST['addUser'];
    $addQ=mysqli_query($conn,"INSERT INTO users(Username) VALUES('$addUser')");
}
?>