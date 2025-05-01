<?php
include "conn.php";
$query=mysqli_query($conn,"SELECT * FROM hotels");

if(isset($_GET['delete'])) {
    $id=$_GET['delete'];
    $delete_h=mysqli_query($conn,"DELETE FROM hotels WHERE id='$id'");
}
?>


<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>address</th>
        <th>rate</th>
        <th>crated_at</th>
    </tr>

    <?php
    while($row=mysqli_fetch_assoc($query)){?>
     <tr>
        <td><?=$row['id']?></td>
        <td><?=$row['name']?></td>
        <td><?=$row['address']?></td>
        <td><?=$row['rate']?></td>
        <td><?=$row['crated_at']?></td>
        <td><a href="?nav=hotels&delete=<?=$row['id']?>">delete</a></td>
        <td><a href="?nav=hotels&edit=<?=$row['id']?>">edit</a></td>
     </tr>

    <?php
     }
        ?>
    
</table>

Add hotel - <a href="?nav=hotels&add">here</a>
<?php
if(isset($_GET['add'])){
    include "addHotel.php";
}
if(isset($_GET['edit'])){
    include "editHotel.php";
}
?>