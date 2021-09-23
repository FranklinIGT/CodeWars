<?php
function descendingOrder(int $n) {

        if (is_int($n)) {
                $str = strval($n);
                $arr1 = str_split($str);
                arsort($arr1);
                $string = implode("",$arr1); 
                return $string+0;
        }
}
