<?php
include "conn.php";
?>

<form action="" method="post">
    <input type="text" name="addGenre">
    <button name="submit">Submit</button>
</form>

<?php
if(isset($_POST['submit'])){
    $addGenre=$_POST['addGenre'];
    if(!empty($addGenre)){
        $addQuery=mysqli_query($conn,"INSERT INTO genres(GenreName) VALUES('$addGenre')");
        echo "Genre Added";
    }
    else {
        echo "Please enter a genre.";
    }
}
?>