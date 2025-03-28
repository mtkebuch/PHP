<div>
    <form action="" method="post">
        <textarea name="text_f" rows="10" cols="30"></textarea>
        <br><br>
        <button name="insert_f">INSERT</button>
    </form>
</div>

<?php
if(isset($_POST['text_f'])) {
    $text = $_POST['text_f'];
    $file=fopen($_GET['insert_'],"a");
    fwrite($file,$text);
    fclose($file);
    header("location:index.php");

}
?>