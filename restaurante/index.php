<?php
include_once "./produtoCardapio.php";
include_once "./prato.php";
include_once "./bebida.php";
include_once "./pedidoRestaurante.php";

$prato = new Prato();
$prato->CadastrarProduto("Hambúrguer", 25);
$prato->codigo = 1;
$prato->tipoPrato = "Lanche";
$prato->DefinirAcompanhamento("Batata frita");
$prato->AdicionarIngrediente("Carne");

$bebida = new Bebida();
$bebida->CadastrarProduto("Refrigerante", 8);
$bebida->codigo = 2;
$bebida->AlterarVolume(600);
$bebida->AlterarSabor("Cola");

$pedido = new PedidoRestaurante();
$pedido->nomeCliente = "João";
$pedido->mesa = 5;
$pedido->taxaServico = 5;
$pedido->AdicionarItem($prato);
$pedido->AdicionarItem($bebida);
$pedido->CalcularTotal();

$prato->ExibirDadosPrato();
$bebida->ExibirDadosBebida();
$pedido->ExibirResumo();
?>