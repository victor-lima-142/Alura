<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    switch ($errno) {
        case E_WARNING:
            echo "Aviso: Isos é perigoso";
            break;
        case E_NOTICE:
            echo "Melhor não fazer isso";
            break;
    }
});

echo $variavel;
echo $array[12];

echo CONSTANTE;
