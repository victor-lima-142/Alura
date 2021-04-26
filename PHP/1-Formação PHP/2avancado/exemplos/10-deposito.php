<?php
//FUNÇÕES
function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar >= $conta['saldo']) {
        exibeMensagem ("Não é possível efetuar operação");
    } else {
        $conta['saldo'] -= $valorASacar;  
    }
    return $conta;
};
function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depósitos precisam ser postivos");
    }
    return $conta;
}
function exibeMensagem(string $mensagem){
    echo "$mensagem".PHP_EOL;
}

//CRIAÇÃO DO ARRAY
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

//OPERAÇÕES
$contasCorrentes['123.456.789-13'] = sacar($contasCorrentes['123.456.789-13'], 400.65);
$contasCorrentes['123.454.789-10'] = depositar($contasCorrentes['123.454.789-10'], 4500);

echo PHP_EOL;

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf.' '.$conta['titular'].' '.$conta['saldo']);
}
