<?php

class Templater
{
    // Processing all templates.
    public static function process_template(string $page_template_file, string $config_file, string $vars_file)
    {        
        if (!file_exists($page_template_file))
        {
            return "Page template file \"" . $page_template_file . "\" not found!";
        }

        $page_template = file_get_contents($page_template_file);

        $page_template = Templater::process_file($page_template);
        $page_template = Templater::process_config($page_template, $config_file);
        $page_template = Templater::process_var($page_template, $vars_file);           
        $page_template = Templater::process_db_table($page_template);
        
        return $page_template;
    }

    // Processing {FILE="..."} template.
    private static function process_file(string $page_template)
    {                
        preg_match_all("/({FILE=\"(.*)\"})/u", $page_template, $matches);

        for ($i = 0; $i < count($matches[1]); $i++)
        {            
            $page_template = str_replace(
                $matches[1][$i],
                file_exists($matches[2][$i]) ? file_get_contents($matches[2][$i]) : "",
                $page_template);
        }

        return $page_template;
    }

    // Processing {CONFIG="..."} template.
    private static function process_config(string $page_template, string $config_file)
    {        
        if (!file_exists($config_file))
        {
            return "Config file \"" . $config_file . "\" not found!";
        }
        include $config_file; // contains $config_array array with config values

        $page_lang = 'ru';
     
        preg_match_all("/({CONFIG=\"(.*)\"})/u", $page_template, $matches);

        for ($i = 0; $i < count($matches[1]); $i++)
        {
            $page_template = str_replace(
                $matches[1][$i],
                isset($config_array[$page_lang][$matches[2][$i]]) ? $config_array[$page_lang][$matches[2][$i]] : "",
                $page_template);
        }    
        
        return $page_template;
    }

    // Processing {VAR="..."} template.
    private static function process_var(string $page_template, string $vars_file)
    {
        if (!file_exists($vars_file))
        {
            return "Variables file \"" . $vars_file . "\" not found!";
        }
        include $vars_file; // contains $VARS array with variables values.

        preg_match_all("/({VAR=\"(.*)\"})/u", $page_template, $matches);

        for ($i = 0; $i < count($matches[1]); $i++)
        {
            $page_template = str_replace(
                $matches[1][$i],
                isset($VARS[$matches[2][$i]]) ? $VARS[$matches[2][$i]] : "",
                $page_template);
        }

        return $page_template;
    }

    // Processing {DBTABLE="...", DBTPLFILE="..."} template.
    private static function process_db_table(string $page_template)
    {        
        define('MYSQL_SERVER', 'localhost');
        define('MYSQL_USER', 'root');
        define('MYSQL_PASSWORD', 'qwertyuiop');
        define('MYSQL_DB', 'android_force_articles');

        $mysqli = new mysqli(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);                
        //$mysqli->query("SET NAMES 'utf8'");

        if ($mysqli->connect_errno)
        {
            echo "Соединение не удалось: %s\n" . $mysqli->connect_error . "<br/>";
            return $page_template;
        }


        preg_match_all("/({DBTABLE=\"(.*)\", DBTPLFILE=\"(.*)\"})/u", $page_template, $matches);

        for ($i = 0; $i < count($matches[1]); $i++)
        {
            if (!file_exists($matches[3][$i]))
            {
                echo "Template file \"" . $matches[3][$i] . "\" for insert from DB not found! <br/>";
                $page_template = str_replace($matches[1][$i], "", $page_template);    
                return $page_template;
            }

            $db_template = file_get_contents($matches[3][$i]);
            
            $replace_string = "";

            //$select_all_query = "SELECT * FROM $matches[2][$i]";
            $select_all_query = "SELECT * FROM articles_short";
            if ($select_all_result = $mysqli->query($select_all_query))
            {                
                while ($table_row = $select_all_result->fetch_assoc())
                {                    
                    $replace_string .= Templater::process_db_values($db_template, $table_row);                    
                }
                
                $select_all_result->free();
            }

            $page_template = str_replace(
                $matches[1][$i],
                $replace_string,
                $page_template);
        }        
        $mysqli->close();

        return $page_template;
    }

    // Processing {DBVALUE="..."} template.
    private static function process_db_values(string $db_template, $table_row)
    {        
        if (!is_array($table_row))
        {
            echo '$table_row' . "isn't an array!";
            die();
        }

        preg_match_all("/({DBVALUE=\"(.*)\"})/u", $db_template, $matches);

        for ($i = 0; $i < count($matches[1]); $i++)
        {                               
            $db_template = str_replace(
                $matches[1][$i],
                isset($table_row[$matches[2][$i]]) ? $table_row[$matches[2][$i]] : "",
                $db_template);
        }

        return $db_template;
    }
}




?>