<?php
include_once "./pessoa.php";
include_once "./jogador.php";
include_once "./tecnico.php";
include_once "./time.php";

$tecnico = new Tecnico();
$tecnico->CadastrarPessoa("Carlos", 45);
$tecnico->DefinirEstrategia("Ofensiva");
$tecnico->AlterarFormacao("4-3-3");

$jogador1 = new Jogador();
$jogador1->CadastrarPessoa("João", 20);
$jogador1->numeroCamisa = 10;
$jogador1->AlterarPosicao("Atacante");
$jogador1->MarcarGol(2);

$jogador2 = new Jogador();
$jogador2->CadastrarPessoa("Pedro", 22);
$jogador2->numeroCamisa = 8;
$jogador2->AlterarPosicao("Meio campo");
$jogador2->MarcarGol(1);

$jogador3 = new Jogador();
$jogador3->CadastrarPessoa("Lucas", 24);
$jogador3->numeroCamisa = 4;
$jogador3->AlterarPosicao("Zagueiro");

$time = new Time();
$time->nomeTime = "Estrela FC";
$time->DefinirTecnico($tecnico);
$time->AdicionarJogador($jogador1);
$time->AdicionarJogador($jogador2);
$time->AdicionarJogador($jogador3);
$time->CalcularPontos(3);
$tecnico->ComandarJogo($time);

$tecnico->ExibirDadosTecnico();
$jogador1->ExibirDadosJogador();
$jogador2->ExibirDadosJogador();
$jogador3->ExibirDadosJogador();
$time->ExibirDados();
$time->ListarJogadores();
?>