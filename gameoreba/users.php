<?php
include "conn.php";
$query=mysqli_query($conn,"SELECT * FROM users ");
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $deleteq=mysqli_query($conn,"DELETE FROM users WHERE UserID='$id'");
}
?>

<table border="1">
<tr>
    <th>UserID</th>
    <th>Username</th>
    <th>Password</th>
    <th>Email</th>
    <th>Edit action</th>
    <th>Delete action</th>
</tr>
<?php while($row=mysqli_fetch_assoc($query)){?>
    <tr>
        <td><?=$row['UserID']?></td>
        <td><?=$row['Username']?></td>
        <td><?=$row['Password']?></td>
        <td><?=$row['Email']?></td>
        <td><a href="?nav=users&edit=<?=$row['UserID']?>">Edit</a></td>
        <td><a href="?nav=users&delete=<?=$row['UserID']?>">Delete</a></td>
    </tr>
<?php
}
?>
</table>

Add user - <a href="?nav=users&add">here</a>

<?php
if(isset($_GET['add'])){
    include "addUser.php";
}
if(isset($_GET['edit'])){
    include "editUser.php";
}
?>