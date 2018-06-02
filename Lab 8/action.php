<?php

include('functions.php');

$source_text = $_POST['source_text'];
$result_text = ExpandBraces::RandomCase($source_text);
$result_array = ExpandBraces::AllPossibleCases($source_text);

echo "<b>Случайное раскрытие:</b><br>";
echo $result_text;
echo "<br><br><b>Все возможные варианты:</b><br>";
foreach ($result_array as $key => $value) {
    echo "[" . $key . "] => " . $value . "<br>";
}

?>