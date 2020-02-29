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
