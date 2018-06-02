<?php

require_once('Templater.php');

$page_tpl = Templater::process_template('templates\index.tpl', 'config.php');
echo $page_tpl;

?>