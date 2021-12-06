<?php

require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$umaConta = new Conta(new Titular(new Cpf(12345678910), "Thais Pinheiro", new Endereco ('Rio Preto', 'eldorado', 'alguma', '12')));
$umaConta->depositar(10000);
$umaConta->sacar(300);

var_dump($umaConta);

echo Conta::recuperarNumeroContas() . PHP_EOL;
// echo $umaConta->titular->recuperarCpf();
echo $umaConta->recuperarNome() . PHP_EOL;
echo $umaConta->recuperarCpf() . PHP_EOL;
echo $umaConta->recuperarSaldo() . PHP_EOL;
echo $umaConta->recuperarTitular()->recuperarEndereco();

