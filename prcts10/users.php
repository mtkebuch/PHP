<?php
include "connection.php";

$select=mysqli_query($conn,"SELECT * FROM users");

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $deleteUser=mysqli_query($conn,"DELETE FROM users WHERE id='$id'");
}
?>
<table>
    <tr>
        <th>id</th>
        <th>role_id</th>
        <th>name</th>
        <th>lastname</th>
        <th>email</th>
        <th>password</th>
        <th>mobile</th>
        <th>created_at</th>
        <th>delete</th>
        <th>edit</th>
    </tr>

    <?php
    while($selectedRows=mysqli_fetch_assoc($select)){?>
    <tr>
        <th><?=$selectedRows['id']?></th>
        <th><?=$selectedRows['role_id']?></th>
        <th><?=$selectedRows['name']?></th>
        <th><?=$selectedRows['lastname']?></th>
        <th><?=$selectedRows['email']?></th>
        <th><?=$selectedRows['password']?></th>
        <th><?=$selectedRows['mobile']?></th>
        <th><?=$selectedRows['created_at']?></th>
        <th><a href="?nav=users&delete=<?=$selectedRows['id']?>">delete</a></th>
        <th><a href="?nav=users&edit=<?=$selectedRows['id']?>">edit</a></th>


    </tr>

    
    <?php } ?>
</table>
<br>
Users role - <a href="?nav=users&add">Add</a>
<?php
if(isset($_GET['add'])){
    include "usersAdd.php";
}
if(isset($_GET['edit'])){
    include "editUser.php";
}
?>