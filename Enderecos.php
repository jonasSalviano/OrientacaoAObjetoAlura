<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;

require_once 'autoload.php';

$umEndereco = new Endereco('Rio de janiero', 'Andarai', 'Gastao', '176');

$outroEndereco = new Endereco('Rj', 'Grajau', 'Lineu', '198');

$desenvolvedor = new Desenvolvedor('Jonas', new Cpf('568.987.587-69'), 1500);
echo $desenvolvedor->nome;
echo $outroEndereco->cidade;
