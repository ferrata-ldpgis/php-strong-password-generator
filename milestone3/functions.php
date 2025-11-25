<?php

function generatePassword($length, $useLetters, $useUppercase, $useNumbers, $useSymbols, $allowRepeat) {

    $chars = '';

    if ($useLetters) {
        $chars .= 'abcdefghijklmnopqrstuvwxyz';
    }

    if ($useUppercase) {
        $chars .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }

    if ($useNumbers) {
        $chars .= '0123456789';
    }

    if ($useSymbols) {
        $chars .= '!@#$%^&*()-_=+[]{};:,.<>?';
    }

    // Nessun set selezionato → errore
    if ($chars === '') {
        return false;
    }

    $password = '';

    // Se NON sono permesse ripetizioni
    if (!$allowRepeat) {

        // Se i caratteri disponibili sono meno della lunghezza richiesta → impossibile
        if ($length > strlen($chars)) {
            return false;
        }

        // Convertiamo in array e mescoliamo
        $charsArray = str_split($chars);
        shuffle($charsArray);

        // Prendiamo i primi N caratteri
        for ($i = 0; $i < $length; $i++) {
            $password .= $charsArray[$i];
        }

        return $password;
    }

    // Se le ripetizioni sono permesse
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[random_int(0, strlen($chars) - 1)];
    }

    return $password;
}
