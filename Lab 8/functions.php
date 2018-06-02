<?php

class ExpandBraces
{
    private const REGEX = "/\{([а-яА-Я,| ]*?)\}/u";

    public static function RandomCase(string $source_text)
    {
        $result_text = $source_text;        

        preg_match(ExpandBraces::REGEX, $result_text, $matches);
        do {       
            $alternatives = explode('|', $matches[1]);                
            $index = rand(0, count($alternatives) - 1);        
            $result_text = str_replace($matches[0], $alternatives[$index], $result_text);
            preg_match(ExpandBraces::REGEX, $result_text, $matches);
        } while (isset($matches[1]));

        return $result_text;
    }

    public static function AllPossibleCases(string $source_text)
    {    
        $old = [];
        $new = [];

        $old[0] = $source_text;
        preg_match(ExpandBraces::REGEX, $old[0], $matches);
        while (isset($matches[1])) {
            $new = [];

            foreach ($old as $old_value) {
                preg_match(ExpandBraces::REGEX, $old_value, $local_matches);
                $alternatives = explode('|', $local_matches[1]);
                foreach ($alternatives as $alt_value) {
                    $new[] = str_replace($local_matches[0], $alt_value, $old_value);
                }                
            }                    

            $old = $new;

            preg_match(ExpandBraces::REGEX, $old[0], $matches);
        }
        
        //unset($old_value);
        //unset($alt_value);
        
        return $new;
    }
}

?>