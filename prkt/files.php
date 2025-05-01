<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="fileName">
        <button type="submit">Create file</button>
    </form>
    <?php
    if(isset($_POST['fileName'])){
        $fileName = $_POST['fileName'];
        $createFile = fopen("folder/" . $fileName . ".txt", 'w');
        if ($createFile) {
            echo "File created successfully!";
        } else {
            echo "Error creating file.";
        }
    }
    ?>
</body>
</html>
