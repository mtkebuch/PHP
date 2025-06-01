<?php
include "conn.php";
?>

<?php
$id=$_GET['edit'];
$query=mysqli_query($conn,"SELECT * FROM genres WHERE GenreID='$id'");
$rows=mysqli_fetch_assoc($query);
?>

<form action="" method="post">
    <br>
    Edit genre <input type="text" name="editGenre" value="<?=$rows['GenreName']?>">
    <button name="submit">Submit</button>
</form>

<?php
if(isset($_POST['submit'])){
    $editGenre=$_POST['editGenre'];
    $editQuery=mysqli_query($conn,"UPDATE genres SET GenreName=('$editGenre') WHERE GenreID='$id'");
}
?>