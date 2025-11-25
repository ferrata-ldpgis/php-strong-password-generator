 
<?php

function generatePassword($length) {
    // Caratteri disponibili
    $chars = 'abcdefghijklmnopqrstuvwxyz';
    $chars .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $chars .= '0123456789';
    $chars .= '!@#$%^&*()-_=+[]{};:,.<>?';

    $password = '';

    // Generazione casuale
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[random_int(0, strlen($chars) - 1)];
    }

    return $password;
}