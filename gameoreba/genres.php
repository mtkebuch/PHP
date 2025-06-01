<?php
include "conn.php";
$query=mysqli_query($conn,"SELECT * FROM genres");
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $delete=mysqli_query($conn,"DELETE FROM genres WHERE GenreID='$id'");
}
?>

<table border="1">
    <tr>
        <th>genreID</th>
        <th>GenreName</th>
        <th>Delete action</th>
        <th>Edit action</th>
    </tr>

    <?php while($row=mysqli_fetch_assoc($query)){?>
    <tr>
        <td><?=$row['GenreID']?></td>
        <td><?=$row['GenreName']?></td>
        <td><a href="?nav=genres&delete=<?=$row['GenreID']?>">DELETE</a></td>
        <td><a href="?nav=genres&edit=<?=$row['GenreID']?>">EDIT</a></td>
    </tr>

    <?php
    }
    ?>
</table>

Add genres - <a href="?nav=genres&add">here</a>

<?php
if(isset($_GET['add'])){
    include "addGenres.php";
}
if(isset($_GET['edit'])){
    include "editGenres.php";
}
?>