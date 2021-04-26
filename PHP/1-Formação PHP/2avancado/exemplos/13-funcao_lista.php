<?php
$idadeLista = [
    100, 
    161, 
    25, 
    78,
    31
];

/*
$idadeFlavia = $idadeLista[0];
$idadeThiago = $idadeLista[1];
$idadeVictor = $idadeLista[2];
$idadeDaniel = $idadeLista[3];
*/

list($idadeDaniel, $idadeThiago, $idadeVictor, $idadeFlavia) = $idadeLista;

$idadeLista[] = 13;

foreach ($idadeLista as $idade) {
    echo $idade . PHP_EOL;
}
