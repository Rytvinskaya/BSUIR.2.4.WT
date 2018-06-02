<!DOCTYPE html>
{LANG="en"}
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="Android Articles">
        <meta name="keywords" content="android, articles, smartphone">
        <meta name="author" content="Spizharny P.A.">
        <title>{CONFIG="title_articles"}</title>
        <link rel="stylesheet" href="css/style.css">		
    </head>
    <body>
        <header>{FILE="templates\header.tpl"}</header>

        {FILE="templates\search-bar.tpl"}       
				
        {DBTABLE="articles_short", DBTPLFILE="templates\article-short.tpl"}        
        
		{FILE="templates\footer.tpl"}
    </body>
<html>