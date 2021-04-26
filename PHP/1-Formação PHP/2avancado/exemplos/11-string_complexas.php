<?php
/*FORMAS DE CHAMAR ARQUIVOS COMO FUNÇÃO MESMO - NAO USUAL:
inclue ('funcoes.php');
*/
/*FORMA DE CHAMAR ARQUIVO MAIS USUAL:
include '12-funcoes.php';
*/
//FORMA MAIS SEGURA-MELHOR-USUAL:
require_once '12-funcoes.php';

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
$contasCorrentes['123.456.789-13'] = sacar(
    $contasCorrentes['123.456.789-13'], 400.65
);

$contasCorrentes['123.454.789-10'] = depositar(
    $contasCorrentes['123.454.789-10'], 4500
);
titularLetrasMaiuscula($contasCorrentes['123.456.789-50']);
/*REMOVENDO:*/
unset($contasCorrentes['123.456.789-13']);
//Modo errado
/*foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        "$cpf.' '.$conta['titular'].' '.$conta['saldo']"
    );
}*/

//Modo correto (FORMA SIMPLES)
/*foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        "$cpf  $conta[titular] $conta[saldo]"
    );
}*/

//Modo correto (FORMA COMPLEXA) ***MELHORRRRR***:
foreach ($contasCorrentes as $cpf => $conta) {
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    exibeMensagem(
        "$cpf $titular $saldo"
    );
}

