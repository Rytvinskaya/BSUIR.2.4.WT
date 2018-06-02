<?php

$full_filename = isset($_POST['full_filename']) ? $_POST['full_filename'] : "";
$new_directory = isset($_POST['new_directory']) ? $_POST['new_directory'] : "";

if (file_exists($full_filename) && is_dir($new_directory))
{
    if (rename($full_filename, $new_directory . "\\" . pathinfo($full_filename)['basename']))
    {
        echo "Success!";
    }
}
elseif (!file_exists($full_filename))
{
    exit("The file path is not specified correctly.");
}
else
{
    exit("Incorrect new directory path!"); 
}

?>
