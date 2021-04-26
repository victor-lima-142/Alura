<?php
$contasCorrentes = [
    12345678913 =>  [
        'titular' => 'Thiago',
        'saldo' => 5000
    ], 
    12345478910 => [
        'titular' => 'Flávia',
        'saldo' => 4000
    ], 
    12345678950 => [
        'titular'  => 'Victor',
        'saldo' => 2000
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo 'O titular é '.$conta['titular'].PHP_EOL;
    echo 'O cpf é ' . $cpf.PHP_EOL;
    echo "Seu saldo é " . $conta['saldo'];
    echo PHP_EOL . PHP_EOL;
}