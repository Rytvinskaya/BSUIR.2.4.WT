<?php

include_once "common_data.php";

$meta_description = "Android News";
$meta_keywords = "android, news, smartphone";
$meta_author = "Spizharny P.A.";
$head_title = "AndroidForce | Новости";
$stylesheet = "css/style.css";

$all_articles = [];

$article_1_title = "В Сети появились снимки возможного прототипа OnePlus 6";
$article_1_full_link = "news/v-seti-poyavilis-snimki-vozmozhnogo-prototipa-oneplus-6.html";
$article_1_date = "28.02.2018";
$article_1_preview_image = "img/opo_6.jpg";
$article_1_description = "Китайские инсайдеры решили разбавить тематику и опубликовали снимки прототипа OnePlus 6.";
$article_1 = get_article_preview($article_1_title, $article_1_full_link, $article_1_date, $article_1_preview_image, $article_1_description);
array_push($all_articles, $article_1);

?>