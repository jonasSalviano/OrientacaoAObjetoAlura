<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Diretor, Gerente,EditorVideo};
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Cpf;

$umFuncionario = new Desenvolvedor('Jonas', new Cpf('123.345.643-89'), 1000);
$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente('Yasmin', new Cpf('659.457.235-89'), 3000);

$umDiretor = new Diretor('Roberto', new Cpf('124.987.549-85'),5000);

$umEditorVideo = new EditorVideo('Adilson', new Cpf('168.985.677-89'), 1500);

$controlador = new ControladorDeBonificacoes();

$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umEditorVideo);

echo $controlador->recuperaTotal();