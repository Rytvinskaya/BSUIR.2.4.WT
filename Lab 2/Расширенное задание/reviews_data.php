<?php

include_once "common_data.php";

$meta_description = "Android Revews";
$meta_keywords = "android, reviews, smartphone";
$meta_author = "Spizharny P.A.";
$head_title = "AndroidForce | Обзоры";
$stylesheet = "css/style.css";

$all_articles = [];

$article_3_title = "Xiaomi Redmi 5";
$article_3_full_link = "reviews/xiaomi-redmi-5.html";
$article_3_date = "26.02.2018";
$article_3_preview_image = "img/xiaomi_redmi_5.jpg";
$article_3_description = "Смартфон Xiaomi Redmi 5 смело можно назвать одним из лучших доступных смартфонов для потребления контента. Компактный размер, отличный экран широкого формата 18:9, приятный звук в наушниках и через динамик, продолжительное время работы и достойный уровень производительности.";
$article_3 = get_article_preview($article_3_title, $article_3_full_link, $article_3_date, $article_3_preview_image, $article_3_description);
array_push($all_articles, $article_3);

?>