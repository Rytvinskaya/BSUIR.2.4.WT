<?php

include_once "common_data.php";

$meta_description = "Android Software";
$meta_keywords = "android, software, smartphone";
$meta_author = "Spizharny P.A.";
$head_title = "AndroidForce | Программы";
$stylesheet = "css/style.css";

$all_articles = [];

$article_4_title = "Что за приложение GetContact и почему его запрещают в разных странах?";
$article_4_full_link = "software/chto-za-prilozhenie-GetContact-i-pochemu-ego-zapreschaut-v-raznykh-stranakh.html";
$article_4_date = "25.02.2018";
$article_4_preview_image = "img/get_contact.jpg";
$article_4_description = "Несколько дней назад интернет «взорвался» от нового мобильного приложения GetContact. Изначально оно должно было блокировать SMS-спам и нежелательные звонки, но позже разработчики добавили функцию показа во время звонка информации об абоненте. Пользователи нашли этому приложению иное применение — проверять, как они записаны в телефонах других людей. Это породило тысячи шуток, но в действительности данная программа не такая уж и безобидная.";
$article_4 = get_article_preview($article_4_title, $article_4_full_link, $article_4_date, $article_4_preview_image, $article_4_description);
array_push($all_articles, $article_4);

?>