<?php
function passwordStrength($pass){
    $lower=preg_match('/[a-z]/',$pass);
    $upper=preg_match('/[A-Z]/',$pass);
    $digit=preg_match('/\d/',$pass);
    $length=strlen($pass)>=8;

    if ($length && $lower&& $upper && $digit){
        return "Strong";
    }
    elseif ($length && ($lower || $upper)){
        return "Medium";
    }
    else {
        return "Weak";
    }

}
if (isset($_POST['button'])){
      $pass=$_POST['pass'];
    {
        echo passwordStrength($pass);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.9</title>
</head>
<body>
    <form method="post">
   Enter password: <input type="text" name="pass" placeholder="Type...">
   <button name="button">Submit</button>
   </form>
</body>
</html>