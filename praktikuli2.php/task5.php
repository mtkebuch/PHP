  <?php
  $name= "";
  $email="";
  $website="";
  $comment="";
  $gender="";
  $nameErr=$emailErr=$genderErr="";
  $stylered="style='color:red'";

  if (!empty($_POST)) {
    if (empty($_POST['name'])){
        $nameErr=$stylered;
    } else {
        $name=$_POST['name'];
    }
    
  }
  if (empty($_POST['email'])){
        $emailErr=$stylered;
    }
    else {
        $email=$_POST['email'];
    }
  if (empty($_POST['gender'])){
    $genderErr=$stylered; 
    
  }else {
        $gender=$_POST['gender'];
    }
    $website=$_POST['website'];
    $comment=$_POST['comment'];
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <link rel="stylesheet" href="form-design.css">
</head>
<body>
  <form method="post">
    <h2>PHP Form Validation Example</h2>
    Name: <input type="text" name="name" value="<?php echo $name;?>"> 
    <span <?php echo "$nameErr"; ?>>*</span>
    <br>

    Email: <input type="text" name="email" value="<?php echo $email;?>"> 
    <span <?php echo "$emailErr";?>>*</span>
    <br>

    Website: <input type="text" name="website" value="<?php echo $website;?>">
    <br>

    Comment: <textarea name="comment" value="<?php echo $comment;?>"></textarea>
    <br>

    Gender: 
    <input type="radio" name="gender" value="female" <?php if ($gender == 'female') echo 'checked'; ?>> Female
    <input type="radio" name="gender" value="male" <?php if ($gender == 'male') echo 'checked'; ?>> Male
    <input type="radio" name="gender" value="other" <?php if ($gender == 'other') echo 'checked'; ?>> Other
    <span <?php echo "$genderErr";?>>*</span>   
    <br>

    <button name="submit">Submit</button>


    <h2>Your Input:</h2>
    <p>Name: <?php echo $name;?></p>
    <p>Email: <?php echo $email;?></p>
    <p>Website: <?php echo $website;?></p>
    <p>Comment: <?php echo $comment;?></p>
    <p>Gender: <?php echo $gender;?></p>


  </form>

</body>
</html>