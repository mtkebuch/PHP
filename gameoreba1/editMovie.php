<?php
include "conn.php";
$id=$_GET['edit'];
$query=mysqli_query($conn,"SELECT * FROM movies where movie_id='$id'");
$row=mysqli_fetch_assoc($query);
?>
<form action="" method="get">
    <input type="text" name="editMovie" value="<?=$row['title']?>">
    <button name="editBtn">edit movie</button>
</form>

<?php
if(isset($_GET['editBtn'])){
    $editMovie=$_GET['editMovie'];
    $id=$_GET['edit'];
    $editQ=mysqli_query($conn,"UPDATE movies SET title='$editMovie' WHERE movie_id='$id'");
}
?>