<?php

include_once "common_data.php";

$meta_description = "Android About";
$meta_keywords = "android, about, smartphone";
$meta_author = "Spizharny P.A.";
$head_title = "AndroidForce | О проекте";
$stylesheet = "css/style.css";

$article_date = "24.02.2018";
$article_about = file_get_contents("article-about.html");
$article_about = str_replace("{article_date}", $article_date, $article_about);
$article_about = str_replace("{AUTHOR_FULL_NAME}", AUTHOR_FULL_NAME, $article_about);
$article_about = str_replace("{AUTHOR_EMAIL}", AUTHOR_EMAIL, $article_about);
$article_about = str_replace("{AUTHOR_CITY}", AUTHOR_CITY, $article_about);

?>