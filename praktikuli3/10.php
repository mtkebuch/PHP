<?php
function func4($url) {
    if (preg_match ("/\d/",$url)){
        return "It contains numbers";
    }
    else {
        return "It does not contain numbers";
    }
}
if (isset($_POST['button'])){
    $url=$_POST['url'];
    echo func4($url);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.10</title>
</head>
<body>
    <form method="post">
    URL: <input type="text" name="url" placeholder="Type...">
    <br>
    <button name='button'>Go</button>
   </form>
</body>
</html>