<?php



function encryptThis($text)
{

    $words = explode(' ', $text);
    foreach ($words as &$word) {
    $chars = str_split($word);
    $chars[0] = ord($chars[0]);
    
    $length = strlen($word);
    if ($length >= 3) {
        [$chars[1], $chars[$length - 1]] = [$chars[$length - 1], $chars[1]];
    }
    
    $word = implode('', $chars);
    }

    return implode(' ', $words);

}
    
    
    


