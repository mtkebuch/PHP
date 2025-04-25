<?php
$id=$_GET['edit'];
$result=mysqli_query($conn, "SELECT * FROM roles WHERE id='$id'");
$rows=mysqli_fetch_assoc($result);
?>

<form method="post">
    <input type="text" name="role" value="?rows['status']?>">
</form>
