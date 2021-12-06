<?php

class Conta
{
    private Titular $titular;
    private float $saldo;
    private static $numeroContas = 0;


    public function __construct (Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroContas++;
    }

    public function __destruct()
    {
        self::$numeroContas--;
    }

    public function sacar(float $valorSacar): void
    {
        if ($valorSacar > $this->saldo) {
            echo 'Saldo indisponível';
            return;
        } 

        $this->saldo -= $valorSacar;
    }

    public function depositar(float $valorDepositar): void 
    {
        if ($valorDepositar < 0) {
            echo 'Valor precisa ser positivo'; 
            return;
        }

        $this->saldo += $valorDepositar;
                   
    }

    public function transferir(float $valorTransferir, Conta $contaDestino  ): void
    {
        if ($valorTransferir > $this->saldo) {
            echo 'Valor de transferência incorreto';
            return;
        } 

        $this->sacar($valorTransferir);
        $contaDestino->depositar($valorTransferir);
    }

    public function recuperarCpf(): int
    {
        return $this->titular->recuperarCpf();
    }

    public function recuperarNome(): string
    {
        return $this->titular->recuperarNome();
    }

    public function recuperarSaldo(): float //get devolvem o valor de um atributo da classe
    {
        return $this->saldo;
    }

    public function recuperarTitular(): Titular 
    {
        return $this->titular;
    }

    public static function recuperarNumeroContas (): int
    {
      return self::$numeroContas; 
    }
}


