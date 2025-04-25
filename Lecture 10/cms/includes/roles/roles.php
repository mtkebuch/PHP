<div>Roles - <a href="?nav=role&action=add">დამატება</a></div>
<?php
$q_roles="SELECT * FROM roles";
$result_q= mysqli_query($conn,$q_roles);
// $row_roles=mysqli_fetch_assoc($result_q);

// echo "<pre>";
// //print_r(value: $result_q);
// print_r($row_roles);
// echo "</pre>";

?>
<?php
if(isset($_GET['action']) && $_GET['action']=="add"){
    include "includes/roles/insert.php";
}else if(isset($_GET['drop'])) {
    $id=$_GET['drop'];
    mysqli_query($conn,"DELETE FROM roles WHERE id='$id'");
    header("location:index.php?nav=role");
}else if(isset($_GET['edit'])){
    include "includes/roles/edit.php";
}
?>

<table class="datatable">
    <tr>
        <th>Id</th>
        <th>Type</th>
        <th>Created_at</th>
    </tr>

    <?php
    while($row_roles=mysqli_fetch_assoc($result_q)){
    ?>
    <tr>
        <td><?=$row_roles['id']?></td>
        <td><?=$row_roles['status']?></td>
        <td><?=$row_roles['created_at']?></td>
        <td><a href="">Edit</a> <a href="?nav=role&drop=<?=$row_roles['id']?>">drop</a></td>

    </tr>
    <?php
    }
    ?>

</table>