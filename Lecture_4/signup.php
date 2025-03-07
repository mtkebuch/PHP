<?php
$error="error";
if(isset($_POST['email'])&& empty($_POST['email'])){
    $error="error";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    
</head>
<body>
<form method="post">
    <input type="text" name="email" placeholder="email">-
    <span class="error">*</span>
    <br>
    <input type="text" name="user" placeholder="user">-*
    <br>
    <input type="radio" name="age" > 18-25
    <input type="radio" name="age" > 26-30
    <br>
    <button name="SignUp">Sign Up</button>
</form>

<?php
    if(isset($_POST['SignUp'])){
        $email = $_POST['email'];
        $user = $_POST['user'];
        $age = $_POST['age'];
        echo "<h3>$email $user $age.</h3>";
    }
?>
</body>
</html>