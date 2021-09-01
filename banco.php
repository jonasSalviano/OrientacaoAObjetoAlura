<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Conta;

$endereco1 = new Endereco('Rio de Janeiro', 'ANdarai', 'Gastao Penalva', '176');
$jonas =new Titular(new Cpf('123.456.789-10'), 'Jonas', $endereco1);
$primeiraConta = new Conta($jonas);
$primeiraConta->depositar(500);
$primeiraConta->sacar(200);


echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
