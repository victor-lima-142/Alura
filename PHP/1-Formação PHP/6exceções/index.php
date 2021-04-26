<?php

 ini_set('display_errors',1);
 error_reporting(E_ALL);
 header('Content-Type: text/html; charset=utf-8');



require "Validacao.php";
require "ContaCorrente.php";




$contaJoao = new ContaCorrente("Joao","1212","343477-9",2000.00);

$contaMaria = new ContaCorrente("Maria","1212","343423-9",6000.00);

$contaJose = new ContaCorrente("Jose","1212","343423-9",6000.00);

$contaFernanda = new ContaCorrente("Fernanda","1212","1343423-9",6000.00);

$contaBernardo = new ContaCorrente("Bernardo","1212","2343423-9",6000.00);

$contaFelipe = new ContaCorrente("Felipe","1212","3343423-9",6000.00);

$contaLucas = new ContaCorrente("Lucas","1212","4343423-9",6000.00);


echo "total de contas: ".ContaCorrente::$totalDeContas;

echo "<br>";

echo "taxa: ".ContaCorrente::$taxaOperacao;




echo "<h1>Contas Correntes</h1>";



echo "<h2>Conta Corrente: Titular: ".$contaJoao->getTitular()."</h2>";

var_dump($contaJoao);
echo "<br>";

try{
    $contaJoao->transferir(-10,$contaMaria);
}catch(Exception $error){
    echo $error->getMessage();
}

echo "<br>";
var_dump($contaJoao);
