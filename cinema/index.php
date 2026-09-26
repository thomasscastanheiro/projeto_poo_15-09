<?php
include_once "./pessoa.php";
include_once "./clienteCinema.php";
include_once "./funcionarioCinema.php";
include_once "./sessaoCinema.php";

$funcionario = new FuncionarioCinema();
$funcionario->CadastrarPessoa("Carlos", "111.111.111-11");
$funcionario->AlterarCargo("Atendente");
$funcionario->AlterarTurno("Noite");

$cliente1 = new ClienteCinema();
$cliente1->CadastrarPessoa("João", "222.222.222-22");
$cliente1->tipoIngresso = "Inteira";
$cliente1->EscolherAssento("A10");

$cliente2 = new ClienteCinema();
$cliente2->CadastrarPessoa("Pedro", "333.333.333-33");
$cliente2->tipoIngresso = "Meia";
$cliente2->EscolherAssento("A11");

$sessao = new SessaoCinema();
$sessao->tituloFilme = "Filme de Ação";
$sessao->sala = 3;
$sessao->horario = "20:00";
$sessao->capacidadeSala = 100;
$sessao->DefinirFuncionario($funcionario);
$cliente1->ComprarIngresso($sessao);
$cliente2->ComprarIngresso($sessao);

$funcionario->ExibirDadosFuncionario();
$cliente1->ExibirDadosCliente();
$cliente2->ExibirDadosCliente();
$sessao->ExibirDadosSessao();
?>