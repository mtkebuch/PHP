<?php
include "conn.php";
$query=mysqli_query($conn,"SELECT * FROM movies")
?>
<?php
if(isset($_GET['delete'])){
    $movie_id=$_GET['delete'];
    $deleteQ=mysqli_query($conn,"DELETE FROM movies WHERE movie_id='$movie_id'");
}
else {
    echo "sorry movie cant be deleted!";
}
?>
<table border="1">

<tr>
    <th>movie_id</th>
    <th>title</th>
    <th>genre_id</th>
    <th>delete action</th>
    <th>edit action</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($query)){?>
<tr>
    <td><?=$row['movie_id']?></td>
    <td><?=$row['title']?></td>
    <td><?=$row['genre_id']?></td>
    <td><a href="?nav=movies&delete=<?=$row['movie_id']?>">delete</a></td>
    <td><a href="?nav=movies&edit=<?=$row['movie_id']?>">edit</a></td>
</tr>
<?php
}
?>
</table>

add movie - <a href="?nav=movies&add">here</a>
<?php
if(isset($_GET['add'])){
    include "addMovie.php";
}
if(isset($_GET['edit'])){
    include "editMovie.php";
}
?>