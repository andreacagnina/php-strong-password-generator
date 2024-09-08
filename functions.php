<?php

function generateRandomPassword($lunghezza)
{
    $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?@#-_/*+<>()[]{}';
    $passwordGen = '';
    for ($i = 0; $i < $lunghezza; $i++) {
        $passwordGen .= $str[rand(0, strlen($str) - 1)];
    }
    return $passwordGen;
};
