<?php

$full_filename = isset($_POST['full_filename']) ? $_POST['full_filename'] : "";

if (file_exists($full_filename))
{
    if (unlink($full_filename))
    {
        echo "Success!";
    }
}
else
{
    exit("The file path is not specified correctly.");
}

?>