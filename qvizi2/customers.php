<?php
include "conn.php";
$selectedCustomers=mysqli_query($conn,"SELECT * FROM customers");

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $deleteCustomer=mysqli_query($conn, "DELETE FROM customers WHERE id='$id'");

}
?>
<table>
<tr>
<th>id</th>
<th>saxeli</th>
<th>gvari</th>
<th>mobile</th>
<th>Delete</th>
<th>Edit</th>
</tr>

<?php
while ($row_customers=mysqli_fetch_assoc($selectedCustomers)) {?>
     <tr>
        <td><?=$row_customers['id']?></td>
        <td><?=$row_customers['saxeli']?></td>
        <td><?=$row_customers['gvari']?></td>
        <td><?=$row_customers['mobile']?></td>
        <td><a href="?nav=customers&delete=<?=$row_customers['id']?>">Delete</a></td>
        <td><a href="?nav=customers&edit=<?=$row_customers['id']?>">Edit</a></td>
     </tr>
<?php
}
?>

</table>

Add customers - <a href="?nav=customers&add">here</a>
<?php
if(isset($_GET['add'])) {
    include "addCustomers.php";
}
if(isset($_GET['edit'])) {
    include "editCustomer.php";
}
?>
