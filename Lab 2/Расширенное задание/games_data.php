<?php

include_once "common_data.php";

$meta_description = "Android Games";
$meta_keywords = "android, games, smartphone";
$meta_author = "Spizharny P.A.";
$head_title = "AndroidForce | Игры";
$stylesheet = "css/style.css";

$all_articles = [];

$article_5_title = "Snake II — олдскул в чистом виде";
$article_5_full_link = "games/snake-2-oldskul-v-chistom-vide.html";
$article_5_date = "24.02.2018";
$article_5_preview_image = "img/snake2.jpg";
$article_5_description = "Ностальгия — чувство, присущее каждому человеку. Так приятно порой бывает потосковать о давно минувшем, чего бы конкретно это ни касалось! Например, видеоигры. Переиздания старых хитов для ПК и консолей выходят постоянно, некоторые игры переиздают даже не один раз. А почему бы и нет, затраты на разработку куда меньше, а аудитория у игры уже есть. В мобильном игрострое всё пока что немного иначе — ведь история у него практически отсутствует. Но и здесь уже есть настоящая классика. Например, всем прекрасно знакомая «Змейка», на ремейк которой мы сегодня и посмотрим.";
$article_5 = get_article_preview($article_5_title, $article_5_full_link, $article_5_date, $article_5_preview_image, $article_5_description);
array_push($all_articles, $article_5);

?>