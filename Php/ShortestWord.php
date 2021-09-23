<?php

function findShort($str){
        $strings = explode(' ', $str);
        $pivot=strlen($strings[0]);
        
        if (is_null($str)) {
            return $length=1;
        }
        foreach ($strings as $string) {
            $temp=strlen($string);
            if ($pivot >= $temp) {
                $length=$temp;
                $pivot=$length;
    
            }
            
        }
        return $length;
    
}