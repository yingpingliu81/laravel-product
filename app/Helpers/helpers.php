<?php

if (!function_exists('stringSplitToJson')) {
    function stringSplitToJson($string, $split = ",")
    {
        try {
            return json_encode(explode($split, $string));
        } catch (\Exception $exception) {
            return json_encode([]);
        }
    }
}

if (!function_exists('removeStyle')) {
    function removeStyle($html)
    {
       return  preg_replace('/\sstyle=("|\').*?("|\')/i', '', $html);
    }
}

