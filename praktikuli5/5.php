<?php

if (isset($_POST["myfile"])) {
  move_uploaded_file($_FILES["myfile"]["tmp_name"], "uploads/" . $_FILES["myfile"]["name"]);
  header("Location: drive.php");
  exit();
}


if (isset($_POST["savefile"])) {
  file_put_contents("uploads/" . $_POST["filename"], $_POST["filetext"]);
  echo "<div class='msg'>✅ File saved!</div>";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Mini Google Drive</title>
  <link rel="stylesheet" href="5.css">
</head>
<body>

<div class="container">
  <h1>📁 Mini Google Drive</h1>

  <form method="post" enctype="multipart/form-data" class="card">
    <h2>Upload File</h2>
    <input type="file" name="myfile">
    <button type="submit">Upload</button>
  </form>

  <form method="post" class="card">
    <h2>Write to File</h2>
    <input type="text" name="filename" placeholder="File name">
    <textarea name="filetext" placeholder="Text here..."></textarea>
    <button name="savefile">Save</button>
  </form>

  <div class="card">
    <h2>📂 Files</h2>
    <?php
    $files = scandir("uploads");
    foreach ($files as $file) {
      if ($file != "." && $file != "..") {
        echo "<a href='uploads/$file' target='_blank'>📄 $file</a><br>";
      }
    }
    ?>
  </div>
</div>

</body>
</html>
