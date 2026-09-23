<?php
class CarrinhoCompra{
    public int $codigoCarrinho;
    public string $cliente;
    public array $produtos = [''];
    public int $quantidadeItens = $produtos.length;
    public int $precoTotal;
    public int $descontoTotal;
    public int $dataCompra;
    public string $formaPagamento;
    public string $statusCarrinho;
    public string $enderecoEntrega;
    
    public function AdicionarProduto($produto){
        array_push($produtos, $produto);
    }

    public function
}