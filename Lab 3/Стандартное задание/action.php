<?php

include 'functions.php';

$full_filename = isset($_POST['full_filename']) ? $_POST['full_filename'] : "";

if (file_exists($full_filename))
{
    $normalized_filename = normalize_filename(pathinfo($full_filename)['basename']);

    $unconflict_normalized_filename = get_unconflict_filename($normalized_filename, pathinfo($full_filename)['dirname']);

    if (copy($full_filename, pathinfo($full_filename)['dirname'] . "/" . $unconflict_normalized_filename))
    {
        echo "Success!";
    }
}
else
{
    exit("The file name and/or path to the file is not specified correctly.");
}

?>
