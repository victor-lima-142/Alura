<?php

class Conta
{
    private Titular $titular;
    private $saldo;
    private static $numeroDeContas = 0;

    //CONSTRÓI E DESTRÓI
    public function __construct(Titular $titular)
    {
        $this->saldo = 0;
        $this->titular = $titular;
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    //OPERAÇÕES
    public function saca(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível".PHP_EOL;
            return;
        }

        $this->saldo -= $valorASacar;
    }


    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo".PHP_EOL;
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível".PHP_EOL;
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    //NOME
    public function recuperaNome(): string
    {
        return $this->titular->recuperaNome();
    }

    //CPF
    public function recuperaCpf(): string
    {
        return $this->titular->recuperaCpf();
    }

    //SALDO
    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }
    public function defineSaldo($saldo): void
    {
        $this->saldo = $saldo;
    }

    public static function recuperaNumeroDeContas(): int 
    {
        return Conta::$numeroDeContas;
    }
}