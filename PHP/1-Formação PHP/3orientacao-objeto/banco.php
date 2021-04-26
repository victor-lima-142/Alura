<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/cpf.php';

$vinicius = new Conta(new Titular(new CPF('523.155.785-87'), 'Vinicius'));
$vinicius->deposita(4000);
$vinicius->saca(100);

echo $vinicius->recuperaNome().PHP_EOL;
echo $vinicius->recuperaSaldo().PHP_EOL;

$patricia = new Titular(new CPF('523.153.752-77'), 'Patricia');
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF(123), 'Victor'));

