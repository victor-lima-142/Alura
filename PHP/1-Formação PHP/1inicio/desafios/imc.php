<?php
$altura = 1.78;
$peso = 75.5;
$imc1 = $peso/($altura**2);
$imc = round($imc1, 2);

echo "Seu imc é $imc".PHP_EOL;
if ($imc < 18.50) {
    echo "Você está abaixo do peso pois seu IMC é $imc.";
} elseif ($imc < 25) {   
    echo "Seu peso está normal. Seu IMC é $imc";
}elseif ($imc < 30) {
    echo "Você está com sobrepeso. Seu IMC é $imc";
}   elseif ($imc > 30){
    echo "Obesidade mórbida. Seu IMC é $imc";
}