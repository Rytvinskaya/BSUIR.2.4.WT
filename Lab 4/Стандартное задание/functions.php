<?php

include 'LinguaStemRu.php';

// Searching occurences of $str in $text and highlighting them.
// 
function search_occurrences(string $str, string $text)
{
    if (($str === "") || ($text === ""))
    {
        return $text;
    }

    // Initializing a new instance of the LinguaStemRu class
    // that is used for stemming russian words.
    $stemmer = new LinguaStemRu();

    // Get $str_words array of all russian words from $str.
    $any_rus_word = "/([А-Яа-я]+)/u";
    preg_match_all($any_rus_word, $str, $str_words);

    
    for ($i = 0; $i < count($str_words[1]); $i++)
    {
        // Deletes prepositions from $str_words[1] if 
        // private $unset_preposition flag in LinguaStemRu is set.
        if ($stemmer->stem_string($str_words[1][$i]) === '')
        {
            $str_words[1][$i] = '';
            //unset($str_words[1][$i]);            
        }
    }
    $str_words[1] = array_filter($str_words[1], function($value) { return $value !== ''; });

    if (count($str_words[1]) === 0)
    {
        return $text;
    } 

    // If $str is in quotes (need to search as whole line).
    if ( strpos($str, "\"") === 0
            && strrpos($str, "\"") === strlen($str) - 1
        || strpos($str, "'") === 0
            && strrpos($str, "'") === strlen($str) - 1 )
    {        
        // Save first word to $all_words variable.
        $all_words = $stemmer->stem_string($str_words[1][0]) . "[\А-Яа-я]*";
        // Concatenate all another words to $all_words variable.
        for ($i = 1; $i < count($str_words[1]); $i++)
        {            
            $all_words .= "[^\w\d]+".$stemmer->stem_string($str_words[1][$i]) . "[\А-Яа-я]*";                 
        }

        $all_words_any_pos = "/(^|[^\w\d]+)(".$all_words.")/iu";
        preg_match_all($all_words_any_pos, $text, $matches);        
        
        foreach ($matches[2] as $match)
        {
            $text = preg_replace("/(^|[^\w\d>\-]+)(".$match.")/iu", "$1<span style=\"background-color:orange;\">$2</span>", $text);
        }
        unset($match);

        //echo $text;
        return $text;
    }
    else
    {     
        foreach ($str_words[1] as $word)
        {            
            $word_form = "(".$stemmer->stem_string($word)."[А-Яа-я]*)";
            $word_form_any_pos = "/(^|[^\w\d]+)".$word_form."/iu";
            preg_match_all($word_form_any_pos, $text, $matches);                        

            foreach ($matches[2] as $match)
            {
                $text = preg_replace("/(^|[^\w\d>\-]+)(".$match.")/iu", "$1<span style=\"background-color:orange;\">$2</span>", $text);
            }
            unset($match);   
        }
        unset($word);

        //echo $text;        
        return $text;
    }
}

?>