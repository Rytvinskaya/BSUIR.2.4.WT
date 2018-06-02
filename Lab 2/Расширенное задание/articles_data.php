<?php

include_once "common_data.php";

$meta_description = "Android Articles";
$meta_keywords = "android, articles, smartphone";
$meta_author = "Spizharny P.A.";
$head_title = "AndroidForce | Статьи";
$stylesheet = "css/style.css";

$all_articles = [];

$article_2_title = "Анатомия зарядки: 7 мифов об аккумуляторах";
$article_2_full_link = "articles/anatomiya-zaryadki-7-mifov-ob-akkumulyatorakh.html";
$article_2_date = "27.02.2018";
$article_2_preview_image = "img/charge_myths.jpg";
$article_2_description = "Смартфоны уже приобрели защиту от влаги и пыли, смотрят на мир двумя камерами, сбрасывают рамки дисплеев и даже обзаводятся искусственным интеллектом. Но их всё ещё объединяет один компонент, который за последние годы изменился не так уж и сильно. Это аккумуляторная батарея: самая капризная и вечно подводящая в самый неподходящий момент деталь мобильного устройства. Вокруг темы, как правильно заряжать аккумулятор и что влияет на автономность смартфона, существует много мифов. В этой статье мы опровергнем самые популярные из них.";
$article_2 = get_article_preview($article_2_title, $article_2_full_link, $article_2_date, $article_2_preview_image, $article_2_description);
array_push($all_articles, $article_2);

$article_6_title = "История версий Android";
$article_6_full_link = "articles/istoriya-versii-android.html";
$article_6_date = "24.02.2018";
$article_6_preview_image = "img/istoriya-android-versii.jpg";
$article_6_description = "Android — свободная операционная система для мобильных телефонов, планшетных компьютеров, умных часов, телевизоров и смартбуков, использующая ядро Linux, разрабатываемая Open Handset Alliance и принадлежащая Google. С момента выхода первой версии в сентябре 2008 года произошло 40 обновлений системы. Эти обновления, как правило, касаются исправления обнаруженных ошибок и добавления новой функциональности в систему.";
$article_6 = get_article_preview($article_6_title, $article_6_full_link, $article_6_date, $article_6_preview_image, $article_6_description);
array_push($all_articles, $article_6);


?>