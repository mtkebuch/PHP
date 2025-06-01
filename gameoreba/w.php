<?php
include "conn.php";
$file=fopen("authors.txt",'w');
$query=mysqli_query($conn,"SELECT * FROM authors");
while($fetch=mysqli_fetch_assoc($query)){
fwrite($file, $fetch['AuthorID'] . '. ' . $fetch['FirstName'] . ' ' . $fetch['LastName'] . "\n");

}
fclose($file);
?>
