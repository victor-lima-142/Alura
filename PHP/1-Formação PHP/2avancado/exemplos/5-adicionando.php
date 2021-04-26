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
//O PHP QUANDO SE COLOCA APENAS [], INSERE COMO ÍNDICE O PRÓXIMO ESPAÇO VAGO. NO CASO, 3;
$contasCorrentes[] = [
    'titular' => 'Max',
    'saldo' => 4500
];

foreach ($contasCorrentes as $jiu => $contas) {
    echo $jiu . " " . $contas['titular'] . PHP_EOL;
}

echo PHP_EOL;

foreach ($contasCorrentes as $cpf => $conta) {
    echo 'O titular é '.$conta['titular'].PHP_EOL;
    echo 'O cpf é ' . $cpf.PHP_EOL;
    echo "Seu saldo é " . $conta['saldo'];
    echo PHP_EOL . PHP_EOL;
}

//SEGUNDA PARTE
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
    ]
];
//O PHP QUANDO SE COLOCA APENAS [], INSERE COMO ÍNDICE O PRÓXIMO ESPAÇO VAGO. NO CASO, 3;
$contasCorrentes[] = [
    'titular' => 'Max',
    'saldo' => 4500
];

foreach ($contasCorrentes as $jiu => $contas) {
    echo $jiu . " " . $contas['titular'] . PHP_EOL;
}

echo PHP_EOL;

foreach ($contasCorrentes as $cpf => $conta) {
    echo 'O titular é '.$conta['titular'].PHP_EOL;
    echo 'O cpf é ' . $cpf.PHP_EOL;
    echo "Seu saldo é " . $conta['saldo'];
    echo PHP_EOL . PHP_EOL;
}