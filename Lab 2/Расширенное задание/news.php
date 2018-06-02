<?php
include_once "common_data.php";
include_once "news_data.php";
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
		
        <?=get_header('Новости')?>
        
        <?=$search_panel?>
        
        <section class="articles"><?=get_all_articles_previews($all_articles)?></section>
        
        <?=$footer?>
        
	</body>
    
</html>