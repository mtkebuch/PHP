<?php
include_once "connection.php";
$select_q=mysqli_query($conn,"SELECT * FROM roles");

if(isset($_GET['drop'])) {
    $id=$_GET['drop'];
    $delete=mysqli_query($conn,"DELETE FROM roles WHERE id=$id");
}

?>

<table>
    <tr>
        <th>Id</th>
        <th>Status</th>
        <th>Created_at</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    <?php while($row_roles=mysqli_fetch_assoc($select_q)){?>
        <tr>
            <td><?=$row_roles['id']?></td>
            <td><?=$row_roles['status']?></td>
            <td><?=$row_roles['created_at']?></td>
            <td><a href="?nav=roles&edit=<?=$row_roles['id']?>">Edit</a></td>
            <td><a href="?nav=roles&drop=<?=$row_roles['id']?>">Drop</a></td>
        </tr>
    <?php } ?>
</table>

<br>
Add roles- <a href="?nav=roles&add">დამატება</a>
<?php
if(isset($_GET['add'])){
    include "insert.php";
}
if(isset($_GET['edit'])){
    include "edit.php";
}

?>