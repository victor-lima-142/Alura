<?php
$idade = 19;
$numerodepessoas = 2;
echo "Você só pode entrar se tiver 18 anos.";
echo "Com 16 anos somente acompanhado.".PHP_EOL;
if ($idade >= 18) {
    echo "Você pode entrar você tem $idade anos.";
}   else { 
    if ($idade >= 16 && $numerodepessoas >= 2) {
        echo "Você tem $idade e está acompanhado(a). Pode entrar.";
    } else {
        echo "Você não pode entrar. Você tem $idade anos.";   
    }
}