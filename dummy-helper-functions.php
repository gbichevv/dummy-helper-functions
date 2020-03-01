<?php

/*
 * Dummy functions  
 * @version 1.0.0
 * @author gbichev <Gbichevv@gmail.com>
 */

/**
 * Dump
 * @decription this functions is formatted var_dump
 */
function dump($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

/**
 * Hour to minutes convert
 * @param type $time
 * @return type minutes
 */
function hourTominutes($time) {
    if ($time) {
        $time_explode = explode(':', $time);
        $hour = $time_explode[0];
        $minutes = $time_explode[1];
        return ($hour * 60) + $minutes;
    }
}

dump(mostWorstHelloWorld());
/**
 * Most Worst Hello World;
 * This function is only for FUN! DON'T USE FOR COMMERCIAL PURPOSES
 * @return type Hello World
 */
function mostWorstHelloWorld() {
    // string with alphabet
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';
    //convert string in to array 
    $alphabet_array = str_split(trim($alphabet));
    $array = array();
    foreach ($alphabet_array as $key => $alph) {
        //make new array with necessary symbols
        switch ($alph) {
            case $alph == 'h':
                $array[$alph] = $alph;
            case $alph == 'e';
                $array[$alph] = $alph;
            case $alph == 'l';
                $array[$alph] = $alph;
            case $alph == 'l';
                $array[$alph] = $alph;
            case $alph == 'o';
                $array[$alph] = $alph;
            case $alph == 'w':
                $array[$alph] = $alph;
            case $alph == 'o';
                $array[$alph] = $alph;
            case $alph == 'r';
                $array[$alph] = $alph;
            case $alph == 'l';
                $array[$alph] = $alph;
            case $alph == 'd';
                $array[$alph] = $alph;
                break;
        }
    }
    //get only ones from symbols 
    $unique = array_unique($array);
    //sort them
    sort($unique);
    //add to strings every symbol
    for ($i = 0; $i < count($unique); $i++) {
           if($unique[$i] == 'h'){
               $str_h = 'h';
           }
           if($unique[$i] == 'e'){
               $str_he = 'e';
           }
           if($unique[$i] == 'l'){
               $str_hel = 'l';
           }
           if($unique[$i] == 'o'){
               $str_helo = 'o';
           }
           if($unique[$i] == 'w'){
               $str_helow = 'w';
           }
           if($unique[$i] == 'o'){
               $str_helowo = 'o';
           }
           if($unique[$i] == 'r'){
               $str_helowor = 'r';
           }
           if($unique[$i] == 'l'){
               $str_heloworl = 'l';
           }
           if($unique[$i] == 'd'){
               $str_heloworld = 'd';
           } 
    }
    // concatination all strings
    $concatenation = $str_h . $str_he . $str_hel . $str_helo . $str_helow . $str_helowo  . $str_helowor . $str_heloworl . $str_heloworld; 
    // add double 'l'
    $add_l = substr_replace($concatenation, 'l', strpos($concatenation, 'l'), 0);
    //add space between hello and world
    $add_space = preg_replace('/^.{5}/', "$0 ", $add_l);
    // add uppercases
    $ucwords = ucwords($add_space);
    // check is string and return Hello World or Error
    if(filter_var($ucwords, FILTER_SANITIZE_STRING)){
       return $ucwords;
    }else{
        return 'Sorry but you are stupid and you functions is f@$#% up :)';
    }
}
