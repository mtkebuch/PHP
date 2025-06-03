<?php
include "conn.php";
$q=mysqli_query($conn,"SELECT * FROM customers");

//delete
if(isset($_GET['delete'])){
$customer_id=$_GET['delete'];
$deleteQ=mysqli_query($conn,"DELETE FROM customers WHERE customer_id='$customer_id'");
}
?>

<table border='1'>
    <tr>
        <th>customer_id</th>
        <th>name</th>
        <th>email</th>
        <th>action delete</th>
        <th>action edit</th>
    </tr>

    <?php while($row=mysqli_fetch_assoc($q)){?>
        <tr>
            <td><?=$row['customer_id']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['email']?></td>
            <td><a href="?nav=customers&delete=<?=$row['customer_id']?>">delete</a></td>
            <td><a href="?nav=customers&edit=<?=$row['customer_id']?>">edit</a></td>
        </tr>

        <?php
    }
    ?>

</table>

add customer - <a href="?nav=customers&add">here</a>
<?php
if(isset($_GET['add'])){
    include "addCust.php";
}
if(isset($_GET['edit'])){
    include "editCust.php";
}
?>