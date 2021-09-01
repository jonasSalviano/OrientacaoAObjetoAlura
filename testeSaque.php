<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};


$conta = new ContaCorrente(
    new Titular(
        new Cpf('133.154.657-25'),
        'Jonas',
        new Endereco('RIo de Janeiro', 'Andarai', 'Gastao', '71')
    )
);

$conta->transferir(255, $conta);
$conta->depositar(500);
$conta->sacar(100);

echo $conta->recuperaSaldo() . PHP_EOL;