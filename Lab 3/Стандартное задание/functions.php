<?php

// Returns normalized filename according to the task.
function normalize_filename(string $filename)
{
    // Make filename lowercase.
    // Using mb_strtolower() to lower cyrillyc (Unicode) characters also.
    $result = mb_strtolower($filename);
    
    // Contains replace pairs for filename transliteration.
    $trans = array(
        "а" => "a",
        "б" => "b",
        "в" => "v",
        "г" => "g",
        "д" => "d",
        "е" => "e",
        "ё" => "e",
        "ж" => "zh",
        "з" => "z",
        "и" => "i",
        "й" => "i",
        "к" => "k",
        "л" => "l",
        "м" => "m",
        "н" => "n",
        "о" => "o",
        "п" => "p",
        "р" => "r",
        "с" => "s",
        "т" => "t",
        "у" => "u",
        "ф" => "f",
        "х" => "kh",
        "ц" => "ts",
        "ч" => "ch",
        "ш" => "sh",
        "щ" => "shch",
        "ъ" => "ie",
        "ы" => "y",
        "ь" => "",
        "э" => "e",
        "ю" => "iu",
        "я" => "ia"
    );

    // Make filename transliteration.
    $result = strtr($result, $trans);

    // Get position of dot before extension.
    $extension_dot_pos = strrpos($result, ".");

    // Replace all characters that are not letters, not digits and not underscores to underscores.
    $result = preg_replace("/[^\w]/", "_", $result);

    // If filename originally had extension (e.g. had at least one dot).
    if ($extension_dot_pos !== false)
    {
        // Return extension dot to its initial place.
        $result{$extension_dot_pos} = ".";
    }
    
    return $result;
}

// Returns unconflict filename with extra postfix.
function get_unconflict_filename(string $filename, string $directory)
{
    // If file with this filename already exists in this directory.
    if (file_exists(realpath($directory . "/" . $filename)))
    {
        // Filename postfix to resolve name conflict.
        $postfix = 0;
        $new_file_name = "";

        do
        {
            $postfix++;
            $new_file_name = pathinfo($filename)['filename'] . "_" . (string)$postfix . "." . pathinfo($filename)['extension'];
        }
        while (file_exists(realpath($directory . "/" . $new_file_name)));

        return $new_file_name;
    }
    else
    {
        return $filename;
    }
}

?>