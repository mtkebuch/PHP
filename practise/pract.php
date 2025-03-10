<?php
$id='';
$id=isset($_POST['id']) ? $_POST['id'] : '';
$idError='';
$redError="style='color:red'";
$greenError="style='color:green'";

if (empty($_POST['id'])){
    $idError=$redError;
}
else {
    $idError=$greenError;

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Input ur ID: <input type="number" name="id" value="<?php echo $id ?>" >
        <span <?php echo $idError ?>>X</span>
        <button>Go</button>

        <h3>Your ID: <?php echo $id ?> </h3>
    </form>
</body>
</html>