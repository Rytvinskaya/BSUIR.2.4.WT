<?php

require_once('Templater.php');

$templater = new Templater();
$page_tpl = Templater::process_template('index.tpl', 'config.php', 'vars.php');
echo $page_tpl;

//echo file_get_contents('index.tpl');

?>