<?php

$conta1 = [
    'titular' => 'Thiago',
    'saldo' => 5000
];
$conta2 = [
    'titular' => 'Flávia',
    'saldo' => 4000
];
$conta3 = [
    'titular' => 'Victor',
    'saldo' => 2000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

//LOOP COM ARRAY ASSOCIATIVO
for ($i=0; $i < count($contasCorrentes); $i++) { 
    echo $contasCorrentes[$i]['titular'].PHP_EOL;
    echo 'R$ '.$contasCorrentes[$i]['saldo'].PHP_EOL;
    echo PHP_EOL;
}