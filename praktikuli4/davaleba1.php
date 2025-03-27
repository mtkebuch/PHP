<?php
if (isset($_FILES['file'])) {
    $allowed_types = ['image/png', 'image/jpeg', 'image/gif'];
    $max_size = 100 * 1024 * 1024; // 100MB
    $file = $_FILES['file'];

    if (in_array($file['type'], $allowed_types) && $file['size'] <= $max_size) {
        $upload_dir = 'uploads/';
        if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);
        $file_path = $upload_dir . basename($file['name']);
        
        if (move_uploaded_file($file['tmp_name'], $file_path)) {
            echo "<p style='color: green;'>File uploaded successfully!</p>";
        } else {
            echo "<p style='color: red;'>File upload error!</p>";
        }
    } else {
        echo "<p style='color: red;'>Only PNG, JPG, and GIF files up to 100MB are allowed.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        form {
            padding: 20px;
            border: 1px solid #ccc;
            display: inline-block;
            background: #f9f9f9;
            border-radius: 10px;
        }
        input[type="file"], input[type="submit"] {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h2>Upload an Image</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" accept=".png, .jpg, .jpeg, .gif" required>
        <br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>
