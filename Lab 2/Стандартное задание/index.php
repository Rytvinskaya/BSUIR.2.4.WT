<?php

# The script prints $source_array items without duplicates using $control_array to follow this rule

$source_array = array(-2, 1, 3, 4, -2, 1, 7, 13, 3, 1, 4, 9, 0, "in_array() strict option was set to true");
$control_array = array();

foreach ($source_array as $item)
{
	if (!in_array($item, $control_array, true))
	{
		echo "$item<br>";		
		array_push($control_array, $item);
	}	
}

unset($item);

?>