<?php
    $error_fold = "";
    $error_file = "";

    if(isset($_POST['cr_dir'])){
        $folder = $_POST['dir_name'];
        if(!empty($folder)  &&  !is_dir("storage/".$folder)){
            mkdir("storage/".$folder);  
        }else{
           $error_fold = "Folder already exists or is empty"; 
        }
    }

    if(isset($_POST['cr_file'])){
        $file = $_POST['f_name'];
        if(!empty($file)  &&  !is_file("storage/".$file.".txt")){
            // mkdir("storage/".$folder); 
             fopen("storage/".$file.".txt", 'w');
        }else{
            $error_file = "File already exists or is empty"; 
        }
    }

    $storage_patch = "storage";
    $content = scandir($storage_patch);
    // echo "<pre>";
    // print_r($content);
    // echo "</pre>";
?>
