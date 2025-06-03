<form action="" method="post">
    <input type="text" name="addMovie" placeholder="movie">
    <button name="addBtn">click to add movie</button>
</form>
<?php
if(isset($_POST['addBtn'])){
    $addMovie=$_POST['addMovie'];
    $addQ=mysqli_query($conn,"INSERT INTO movies(title) VALUES('$addMovie')");
}
else {
    echo "no movie added";
}
?>