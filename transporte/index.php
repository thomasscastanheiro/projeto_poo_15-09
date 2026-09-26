<?php
include_once "./veiculo.php";
include_once "./carro.php";
include_once "./onibus.php";
include_once "./garagem.php";

$carro = new Carro();
$carro->CadastrarVeiculo("ABC-1234", "Onix");
$carro->marca = "Chevrolet";
$carro->Acelerar(50);

$onibus = new Onibus();
$onibus->CadastrarVeiculo("ABC-5678", "Marcopolo");
$onibus->numeroLinha = "631";
$onibus->capacidadePassageiros = 40;
$onibus->passageirosAtuais = 15;

$garagem = new Garagem();
$garagem->nomeGaragem = "Garagem Central";
$garagem->capacidadeMaxima = 20;
$garagem->AdicionarVeiculo($carro);
$garagem->AdicionarVeiculo($onibus);

$carro->ExibirDadosCarro();
$onibus->ExibirDadosOnibus();
$garagem->ExibirDados();
$garagem->ListarVeiculos();
?>