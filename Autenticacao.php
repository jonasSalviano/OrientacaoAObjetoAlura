<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\{Diretor,Gerente,EditorVideo, Desenvolvedor};
use Alura\Banco\Service\Autenticador;

$autenticador = new Autenticador();
$diretor = new Titular( new Cpf('659.485.498-85'),'Pablo', new Endereco('','','',''));

$autenticador->tentaLogin($diretor, 'abcd');
$variavelTeste = 121;
