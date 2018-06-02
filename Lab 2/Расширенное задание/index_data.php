<?php

include_once "common_data.php";

$meta_description = "Android News, Articles, Reviews, Software, Games, Wallpapers";
$meta_keywords = "android, news, smartphone, article, review, software, game, wallpaper";
$meta_author = "Spizharny P.A.";
$head_title = "AndroidForce | Главная";
$stylesheet = "css/style.css";

$all_articles = [];

$article_1_title = "В Сети появились снимки возможного прототипа OnePlus 6";
$article_1_full_link = "news/v-seti-poyavilis-snimki-vozmozhnogo-prototipa-oneplus-6.html";
$article_1_date = "28.02.2018";
$article_1_preview_image = "img/opo_6.jpg";
$article_1_description = "Китайские инсайдеры решили разбавить тематику и опубликовали снимки прототипа OnePlus 6.";
$article_1 = get_article_preview($article_1_title, $article_1_full_link, $article_1_date, $article_1_preview_image, $article_1_description);
array_push($all_articles, $article_1);

$article_2_title = "Анатомия зарядки: 7 мифов об аккумуляторах";
$article_2_full_link = "articles/anatomiya-zaryadki-7-mifov-ob-akkumulyatorakh.html";
$article_2_date = "27.02.2018";
$article_2_preview_image = "img/charge_myths.jpg";
$article_2_description = "Смартфоны уже приобрели защиту от влаги и пыли, смотрят на мир двумя камерами, сбрасывают рамки дисплеев и даже обзаводятся искусственным интеллектом. Но их всё ещё объединяет один компонент, который за последние годы изменился не так уж и сильно. Это аккумуляторная батарея: самая капризная и вечно подводящая в самый неподходящий момент деталь мобильного устройства. Вокруг темы, как правильно заряжать аккумулятор и что влияет на автономность смартфона, существует много мифов. В этой статье мы опровергнем самые популярные из них.";
$article_2 = get_article_preview($article_2_title, $article_2_full_link, $article_2_date, $article_2_preview_image, $article_2_description);
array_push($all_articles, $article_2);

$article_3_title = "Xiaomi Redmi 5";
$article_3_full_link = "reviews/xiaomi-redmi-5.html";
$article_3_date = "26.02.2018";
$article_3_preview_image = "img/xiaomi_redmi_5.jpg";
$article_3_description = "Смартфон Xiaomi Redmi 5 смело можно назвать одним из лучших доступных смартфонов для потребления контента. Компактный размер, отличный экран широкого формата 18:9, приятный звук в наушниках и через динамик, продолжительное время работы и достойный уровень производительности.";
$article_3 = get_article_preview($article_3_title, $article_3_full_link, $article_3_date, $article_3_preview_image, $article_3_description);
array_push($all_articles, $article_3);

$article_4_title = "Что за приложение GetContact и почему его запрещают в разных странах?";
$article_4_full_link = "software/chto-za-prilozhenie-GetContact-i-pochemu-ego-zapreschaut-v-raznykh-stranakh.html";
$article_4_date = "25.02.2018";
$article_4_preview_image = "img/get_contact.jpg";
$article_4_description = "Несколько дней назад интернет «взорвался» от нового мобильного приложения GetContact. Изначально оно должно было блокировать SMS-спам и нежелательные звонки, но позже разработчики добавили функцию показа во время звонка информации об абоненте. Пользователи нашли этому приложению иное применение — проверять, как они записаны в телефонах других людей. Это породило тысячи шуток, но в действительности данная программа не такая уж и безобидная.";
$article_4 = get_article_preview($article_4_title, $article_4_full_link, $article_4_date, $article_4_preview_image, $article_4_description);
array_push($all_articles, $article_4);

$article_5_title = "Snake II — олдскул в чистом виде";
$article_5_full_link = "games/snake-2-oldskul-v-chistom-vide.html";
$article_5_date = "24.02.2018";
$article_5_preview_image = "img/snake2.jpg";
$article_5_description = "Ностальгия — чувство, присущее каждому человеку. Так приятно порой бывает потосковать о давно минувшем, чего бы конкретно это ни касалось! Например, видеоигры. Переиздания старых хитов для ПК и консолей выходят постоянно, некоторые игры переиздают даже не один раз. А почему бы и нет, затраты на разработку куда меньше, а аудитория у игры уже есть. В мобильном игрострое всё пока что немного иначе — ведь история у него практически отсутствует. Но и здесь уже есть настоящая классика. Например, всем прекрасно знакомая «Змейка», на ремейк которой мы сегодня и посмотрим.";
$article_5 = get_article_preview($article_5_title, $article_5_full_link, $article_5_date, $article_5_preview_image, $article_5_description);
array_push($all_articles, $article_5);

$article_6_title = "История версий Android";
$article_6_full_link = "articles/istoriya-versii-android.html";
$article_6_date = "24.02.2018";
$article_6_preview_image = "img/istoriya-android-versii.jpg";
$article_6_description = "Android — свободная операционная система для мобильных телефонов, планшетных компьютеров, умных часов, телевизоров и смартбуков, использующая ядро Linux, разрабатываемая Open Handset Alliance и принадлежащая Google. С момента выхода первой версии в сентябре 2008 года произошло 40 обновлений системы. Эти обновления, как правило, касаются исправления обнаруженных ошибок и добавления новой функциональности в систему.";
$article_6 = get_article_preview($article_6_title, $article_6_full_link, $article_6_date, $article_6_preview_image, $article_6_description);
array_push($all_articles, $article_6);

?>