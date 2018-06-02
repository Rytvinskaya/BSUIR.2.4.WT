<?php

$dir_to_save = isset($_POST['dir']) ? $_POST['dir'] : "";

if  (is_dir($dir_to_save) && $_FILES["file"]["error"] == 0)
{
    $full_save_path = pathinfo($dir_to_save)['dirname'] . "\\" . $_FILES["file"]["name"];            

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $full_save_path))
    {
        echo "Success!<br>";

        // Printing first 30 characters from file according the task.        
        if (strpos($_FILES["file"]['type'], 'text') === 0)
        {
            $handle = fopen($full_save_path, "r");

            $bytes_to_read = 30;
            $contents = fread($handle, $bytes_to_read);
            
            fclose($handle);
            
            echo $contents;
        }
        // Displaying image according the task
        elseif (strpos($_FILES["file"]['type'], 'image') === 0)
        {
            copy($full_save_path, "." . "\\" . pathinfo($full_save_path)['basename']);            

            echo "<img src=\"" . pathinfo($full_save_path)['basename'] . "\">";            
        }
    }
}
elseif (!is_dir($dir_to_save))
{
    exit("Incorrect directory path!");    
}
else
{
    exit("Uploading error!");
}

?>