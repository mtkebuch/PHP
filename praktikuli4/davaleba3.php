<?php
$upload_dir = 'uploads/';
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}
if (!file_exists($upload_dir)) {
    die("Upload directory does not exist and could not be created.");
}

if (isset($_POST['create'])) {
    $filename = preg_replace("/[^a-zA-Z0-9_-]/", "", $_POST['filename']) . ".txt";
    $file_path = $upload_dir . $filename;
    
    if (!file_exists($file_path)) {
        file_put_contents($file_path, "");
    }
}

if (isset($_POST['write'])) {
    $file_path = $upload_dir . $_POST['selected_file'];
    file_put_contents($file_path, $_POST['content']);
}

if (isset($_GET['delete'])) {
    $file_to_delete = $upload_dir . basename($_GET['delete']);
    if (file_exists($file_to_delete)) {
        unlink($file_to_delete);
    }
}

$files = array_filter(scandir($upload_dir), fn($f) => pathinfo($f, PATHINFO_EXTENSION) === 'txt');
$selected_file = $_POST['selected_file'] ?? ($files[0] ?? "");
$content = $selected_file && file_exists($upload_dir . $selected_file) ? file_get_contents($upload_dir . $selected_file) : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text File Manager</title>
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
        textarea {
            width: 100%;
            height: 100px;
        }
    </style>
</head>
<body>
    <h2>Create a Text File</h2>
    <form action="" method="post">
        <input type="text" name="filename" required>
        <input type="submit" name="create" value="Create">
    </form>
    
    <div class="files">
        <h3>Manage Files</h3>
        <form action="" method="post">
            <select name="selected_file" onchange="this.form.submit()">
                <?php foreach ($files as $file): ?>
                    <option value="<?php echo $file; ?>" <?php echo $file === $selected_file ? 'selected' : ''; ?>>
                        <?php echo $file; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </form>
        
        <form action="" method="post">
            <input type="hidden" name="selected_file" value="<?php echo $selected_file; ?>">
            <textarea name="content"><?php echo htmlspecialchars($content); ?></textarea>
            <br>
            <input type="submit" name="write" value="Save">
        </form>
        
        <a href="?delete=<?php echo $selected_file; ?>" style="color: red;">[Delete]</a>
    </div>
</body>
</html>
