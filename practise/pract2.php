<?php 
$name='';
$name=isset($_POST['name']) ? $_POST['name'] : '';
$nameErr='';
$redErr= "style='color:red;font-size:20px'";
$greenErr= "style='color:green;font-size:20px'";

if (empty($_POST['name'])) {
    $nameErr=$redErr;
}
else {
    $nameErr=$greenErr;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pract2</title>
</head>
<body>
    <form method="post">
    Name: <input type="text" name="name" value= "<?php echo "$name" ?>" >
    <span <?php echo "$nameErr"?>>✖</span>
    <button>Click!</button>
    <br>
    <h3>Your name: <?php echo "$name" ?></h3>
    </form>
</body>
</html>