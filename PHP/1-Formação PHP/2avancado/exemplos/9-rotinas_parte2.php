<?php
function sacar($conta, $valorASacar){
    if ($valorASacar >= $conta['saldo']) {
        exibeMensagem ("Não é possível efetuar operação");
    } else {
        $conta['saldo'] -= $valorASacar;  
    }
    return $conta;
};
function exibeMensagem($mensagem){
    echo "$mensagem".PHP_EOL;
}
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

$contasCorrentes['123.456.789-13'] = sacar($contasCorrentes['123.456.789-13'], 9000);

$valor = 7500;
$contasCorrentes['123.456.789-50']['saldo'] -= 250;

echo PHP_EOL;

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf.' '.$conta['titular'].' '.$conta['saldo']);
}
