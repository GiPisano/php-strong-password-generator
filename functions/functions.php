<?php

require_once __DIR__ . "/../data/data.php";

function generate_password($user_length, $alphabet, $uppercase, $symbols, $numbers){
    $combine_chars = $alphabet . $uppercase . $symbols . $numbers;
    $password = '';
    $combine_chars_length = strlen($combine_chars);

    while(strlen($password) < $user_length){
        $random_chars = rand(0, $combine_chars_length -1);
        $password .= $combine_chars[$random_chars];
    }

    return $password;
}