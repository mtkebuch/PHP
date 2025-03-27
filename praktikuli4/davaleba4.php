<?php
$upload_dir = 'uploads/';
if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);

$allowed_extensions = ['png', 'jpg', 'gif'];
$max_size = 100 * 1024 * 1024;

function get_next_file_index($dir) {
    $files = array_filter(scandir($dir), fn($f) => !is_dir($f));
    return count($files) + 1;
}

if (isset($_POST['upload'])) {
    $file = $_FILES['file'];
    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    if (!in_array(strtolower($extension), $allowed_extensions)) {
        echo "Invalid file type. Only PNG, JPG, and GIF are allowed.";
    } elseif ($file['size'] > $max_size) {
        echo "File size exceeds the 100MB limit.";
    } else {
        $index = get_next_file_index($upload_dir);
        $date = date("d-m-y");
        $new_name = "{$index}-{$date}.{$extension}";
        $file_path = $upload_dir . $new_name;
        
        if (move_uploaded_file($file['tmp_name'], $file_path)) {
            echo "File uploaded successfully: $new_name";
        } else {
            echo "Error uploading file.";
        }
    }
}

if (isset($_GET['delete'])) {
    $file_to_delete = $upload_dir . basename($_GET['delete']);
    if (file_exists($file_to_delete)) {
        unlink($file_to_delete);
        echo "File deleted successfully.";
    }
}

$files = array_filter(scandir($upload_dir), fn($f) => !is_dir($f));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h2>Upload a File</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <input type="submit" name="upload" value="Upload">
    </form>

    <h3>Uploaded Files</h3>
    <ul>
        <?php foreach ($files as $file): ?>
            <li>
                <a href="uploads/<?php echo $file; ?>" download><?php echo $file; ?></a>
                <a href="?delete=<?php echo $file; ?>" style="color: red;">[Delete]</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
