<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="Android Articles">
        <meta name="keywords" content="android, articles, smartphone">
        <meta name="author" content="Spizharny P.A.">
        <title>AndroidForce | Статьи</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="branding">
                    <a href="index.html"><h1>AndroidForce</h1></a>
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="index.html">Главная</a>
                        </li>
                        <li>
                            <a href="news.html">Новости</a>
                        </li>
                        <li class="current">
                            <a href="articles.html">Статьи</a>
                        </li>
                        <li>
                            <a href="reviews.html">Обзоры</a>
                        </li>
                        <li>
                            <a href="software.html">Программы</a>
                        </li>
                        <li>
                            <a href="games.html">Игры</a>
                        </li>
                        <li>
                            <a href="wallpapers.html">Обои</a>
                        </li>
                        <li>
                            <a href="about.html">О проекте</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="search-bar">
            <form>
                <input type="text" class="input-find" placeholder="Поиск...">
                <button type="submit" class="button-find">Найти</button>
            </form>
        </div>

        <p>{FILE="FILE_test.txt"}</p>
        <p>{VAR="test_str_var"}</p>        
        <p>{CONFIG="some_text"}</p>

        <?php if ({VAR="test_int_var"} == 123): ?>
        <p>$VARS['test_int_var'] equals to 123.</p>
        <?php endif; ?>

        {DBTABLE="articles_short", DBTPLFILE="article_short.tpl"}        
        
        <footer>
            <a href="about.html">AndroidForce, Copyright &copy; 2018</a>
        </footer>
    </body>
</html>
