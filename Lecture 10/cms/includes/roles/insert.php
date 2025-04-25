<form method="post">
    <input type="text" name="role">-
    <button name="add">დამატება</button>
</form>

<?php
if(isset($_POST['add'])){
    $status=$_POST['role'];
    $query_ins="INSERT INTO roles(status) VALUES ('$status')";
    mysqli_query(mysql:$conn,query:$query_ins);
    header("location:index.php?nav=role&action=add");
}
?>