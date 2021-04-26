<?php
/*FORMAS DE CHAMAR ARQUIVOS COMO FUNÇÃO MESMO - NAO USUAL:
inclue ('funcoes.php');
*/
/*FORMA DE CHAMAR ARQUIVO MAIS USUAL:
include '12-funcoes.php';
*/
//FORMA MAIS SEGURA-MELHOR-USUAL:
require_once 'funcoes.php';

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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conta Correntes</h1>
    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3><?= $conta['titular']; ?>
                <?= $cpf; ?></h3>
            </dt>
            <dd>
                Saldo: <?= $conta['saldo']; ?>
            </dd>
        <?php } ?>
    </dl>
</body>
</html>