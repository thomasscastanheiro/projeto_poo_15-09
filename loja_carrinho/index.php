<?php
include_once "./produto.php";
include_once "./livroProduto.php";
include_once "./eletronico.php";
include_once "./carrinhoCompra.php";

$livro = new LivroProduto();
$livro->CadastrarProduto("Inter", 1, 80);
$livro->marca = "Colrado";
$livro->categoria = "Esporte";
$livro->quantidadeEstoque = 5;
$livro->DefinirAutor("Thomas");
$livro->AlterarEditora("Colorada");
$livro->genero = "Esporte";
$livro->numeroPaginas = 1909;
$livro->InformarFaixaEtaria("Livre");
$livro->ISBN = "04041909";
$livro->AplicarDesconto(10);

$eletronico = new Eletronico();
$eletronico->CadastrarProduto("Mouse", 2, 120);
$eletronico->marca = "Logitech";
$eletronico->categoria = "Informática";
$eletronico->quantidadeEstoque = 10;
$eletronico->modelo = "3";
$eletronico->DefinirGarantia(12);
$eletronico->AlterarVoltagem("USB");
$eletronico->AtualizarCapacidade("8000 DPI");
$eletronico->InformarAcessorios("Cabo USB");

$carrinho = new CarrinhoCompra();
$carrinho->codigoCarrinho = 1;
$carrinho->cliente = "João";
$carrinho->statusCarrinho = "Aberto";
$carrinho->enderecoEntrega = "Rua Legal";
$carrinho->AdicionarProduto($livro);
$carrinho->AdicionarProduto($eletronico);
$carrinho->AplicarCupom(10);
$carrinho->AlterarFormaPagamento("Cartão");
$carrinho->CalcularTotal();

$livro->ExibirDadosLivro();
$eletronico->ExibirDadosEletronico();
$carrinho->ExibirResumo();
?>
