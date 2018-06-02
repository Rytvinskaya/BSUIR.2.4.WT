<?php
include_once "common_data.php";
include_once "about_data.php";
?>

<!DOCTYPE html>
<html>
    
	<head>
        <meta charset="utf-8">        
        <meta name="description" content="<?=$meta_description?>">
        <meta name="keywords" content="<?=$meta_keywords?>">
        <meta name="author" content="<?=$meta_author?>">
		<title><?=$head_title?></title>
        <link rel="stylesheet" href="<?=$stylesheet?>">
	</head>
	
	<body>
		
        <?=get_header('О проекте')?>
        
        <?=$search_panel?>
        
        <section class="articles"><?=$article_about?></section>
        
        <?=$footer?>
        
	</body>
    
</html>