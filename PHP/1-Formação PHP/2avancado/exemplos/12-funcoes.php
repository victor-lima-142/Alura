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
function exibeMensagem(string $mensagem)
{
    echo "$mensagem".PHP_EOL;
}
function titularLetrasMaiuscula(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}