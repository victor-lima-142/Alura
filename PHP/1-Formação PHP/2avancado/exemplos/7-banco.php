<?php
$contasCorrentes = [
    '123.456.789-13' =>  [
        'titular' => 'Thiago',
        'saldo' => 5000
    ], 
    '123.454.789-10' => [
        'titular' => 'Flávia',
        'saldo' => 4000
    ], 
    '123.456.789-50' => [
        'titular'  => 'Victor',
        'saldo' => 2000
    ],
    '123.321.753-92' => [
        'titular' => 'Max',
        'saldo' => 4500
    ]
];

$valor = 400;
$contasCorrentes['123.456.789-50']['saldo'] -= 250;
    if ($valor >= $contasCorrentes['123.321.753-92']['saldo']) {
        echo "Não é possível efetuar operação";
    } else {
        $contasCorrentes['123.321.753-92']['saldo'] -= $valor;
        
    }

echo PHP_EOL;

foreach ($contasCorrentes as $cpf => $conta) {
    echo 'O titular é '.$conta['titular'].PHP_EOL;
    echo 'O cpf é ' . $cpf.PHP_EOL;
    echo "Seu saldo é " . $conta['saldo'];
    echo PHP_EOL . PHP_EOL;
}