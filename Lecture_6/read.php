<div>

<?php

$file=$_GET['read'];
$f=fopen($file,'r');
$contents=fread($f,filesize($file));
fclose($f);
echo $content;

?>

</div>