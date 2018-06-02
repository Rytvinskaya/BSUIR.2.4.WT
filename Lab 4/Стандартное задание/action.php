<?php

include 'functions.php';

$source_string = isset($_POST['source_string']) ? $_POST['source_string'] : "";
$source_text = isset($_POST['source_text']) ? $_POST['source_text'] : "";

$result_to_print = search_occurrences($source_string, $source_text);

echo $result_to_print;

?>