<?php

define("CURRENT_YEAR", 2018);
define("AUTHOR_FULL_NAME", "Спижарный Павел Александрович");
define("AUTHOR_EMAIL", "pavelspizharny@gmail.com");
define("AUTHOR_CITY", "Минск");

######################### HEADER
function get_header($current_element_name)
{
    $header_elements =
    [
        'Главная' => 'index.php',
        'Новости' => 'news.php',
        'Статьи' => 'articles.php',
        'Обзоры' => 'reviews.php',
        'Программы' => 'software.php',
        'Игры' => 'games.php',
        'Обои' => 'wallpapers.php',
        'О проекте' => 'about.php'
    ];
    
    $list = "";            
    foreach ($header_elements as $element_name => $element_file)
    {
        if ($element_name === $current_element_name)
        {
            $list .= "<li class=\"current\">";
        }
        else
        {
            $list .= "<li>";
        }
        
        $list .= "<a href=\"" . $element_file . "\">" . $element_name . "</a>";
        $list .= "</li>";
    }    
    unset($element_name);
    unset($element_file);
    
    $result = file_get_contents("header.html");
    $result = str_replace("{list}", $list, $result);
    
    return $result;    
}
#########################

######################### SEARCH-PANEL
$search_panel = file_get_contents("search-panel.html");
#########################

######################### ARTICLE-PREVIEW
function get_article_preview($article_title, $article_full_link, $article_date, $article_preview_image, $article_description)
{
    $result = file_get_contents("article-preview.html");
    $result = str_replace("{article_title}", $article_title, $result);
    $result = str_replace("{article_full_link}", $article_full_link, $result);
    $result = str_replace("{article_date}", $article_date, $result);
    $result = str_replace("{article_preview_image}", $article_preview_image, $result);
    $result = str_replace("{article_description}", $article_description, $result);
    
    return $result;
}

function get_all_articles_previews($all_articles)
{
    if (!is_array($all_articles)) exit;
    
    $result = "";    
    foreach ($all_articles as $article)
    {
        $result .= $article;
    }    
    unset($article);
    
    return $result;
}
#########################

######################### FOOTER
$footer_text_link = "AndroidForce, Copyright &copy; " . CURRENT_YEAR;
$footer = file_get_contents("footer.html");
$footer = str_replace("{footer_text_link}", $footer_text_link, $footer);
#########################


/*
$article__title = "";
$article__full_link = "";
$article__date = "";
$article__preview_image = "";
$article__description = "";
$article_ = get_article_preview($article__title, $article__full_link, $article__date, $article__preview_image, $article__description);
array_push($all_articles, $article_);
*/

?>