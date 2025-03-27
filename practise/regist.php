<?php 
$name=$_POST['name'] ?? '';
$age=$_POST['age'] ?? 0 ;
$email=$_POST['email'] ??'';
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

    Name: <input type="text" name="name" value="<?php echo $_POST['name'] ?? '';?>">
    <br>
    Age: <input type="number" name="age" value="<?php echo $_POST['age'] ?? 0; ?>">
    <br>
    Email: <input type="text" name="email" value="<?php echo $_POST['email'] ?? '';?>">
    <br>
    <button name="button">Submit</button>

    </form>

    <?php
   

   

    if(isset($_POST['button'])) {
        if (empty($_POST['name']) || empty($_POST['age']) || empty($_POST['email'])) {
            echo "Please fill in all fields.";
        }
        elseif ($_POST['age']<18) {
                echo "Must be over 18";
            }
        elseif (strlen($_POST['email'])<10) {
                echo "Email must be at least 10 characters long";
            }

        else {
            echo "name:$name ,<br> age:$age,<br> email:$email";
        }
        }
    
    ?>

</body>
</html>