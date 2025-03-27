<?php
$upload_dir = 'uploads/';
if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);

if (isset($_FILES['file'])) {
    $max_size = 50 * 1024 * 1024; // 50MB
    $file = $_FILES['file'];
    
    if ($file['size'] <= $max_size) {
        $file_path = $upload_dir . basename($file['name']);
        
        if (move_uploaded_file($file['tmp_name'], $file_path)) {
            echo "<p style='color: green;'>File uploaded successfully!</p>";
        } else {
            echo "<p style='color: red;'>File upload error!</p>";
        }
    } else {
        echo "<p style='color: red;'>File must be up to 50MB.</p>";
    }
}

if (isset($_GET['delete'])) {
    $file_to_delete = $upload_dir . basename($_GET['delete']);
    if (file_exists($file_to_delete)) {
        unlink($file_to_delete);
        echo "<p style='color: green;'>File deleted successfully!</p>";
    }
}
$files = array_diff(scandir($upload_dir), ['.', '..']);
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
        form, .files {
            padding: 20px;
            border: 1px solid #ccc;
            display: inline-block;
            background: #f9f9f9;
            border-radius: 10px;
            margin-top: 20px;
        }
        input[type="file"], input[type="submit"] {
            margin-top: 10px;
        }
        .file-list {
            text-align: left;
            display: inline-block;
            margin-top: 10px;
        }
        .file-item {
            padding: 5px;
            border-bottom: 1px solid #ddd;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .delete-link {
            color: red;
            text-decoration: none;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <h2>Upload a File</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <br>
        <input type="submit" value="Upload">
    </form>
    
    <div class="files">
        <h3>Uploaded Files</h3>
        <div class="file-list">
            <?php foreach ($files as $file): ?>
                <div class="file-item">
                    <a href="uploads/<?php echo $file; ?>" download><?php echo $file; ?></a>
                    <a href="?delete=<?php echo $file; ?>" class="delete-link">[Delete]</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
