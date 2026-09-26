<?php
class CarrinhoCompra{
    public int $codigoCarrinho;
    public string $cliente;
    public array $produtos = [];
    public int $quantidadeItens;
    public float $valorTotal;
    public float $descontoTotal;
    public string $dataCompra;
    public string $formaPagamento;
    public string $statusCarrinho;
    public string $enderecoEntrega;

    public function AdicionarProduto($produto){
        $this->produtos[] = $produto;
        $this->quantidadeItens = count($this->produtos);
    }

    public function RemoverProduto($produto){
        $posicao = array_search($produto, $this->produtos, true);
        if($posicao !== false){
            unset($this->produtos[$posicao]);
            $this->quantidadeItens = count($this->produtos);
        }
    }

    public function CalcularTotal(){
        $this->valorTotal = 0;
        foreach($this->produtos as $produto){
            $this->valorTotal = $this->valorTotal + $produto->preco;
        }
        $this->valorTotal = $this->valorTotal - $this->descontoTotal;
        return $this->valorTotal;
    }

    public function AplicarCupom($valor){
        $this->descontoTotal = $valor;
    }

    public function AlterarFormaPagamento($formaPagamento){
        $this->formaPagamento = $formaPagamento;
    }

    public function ExibirResumo(){
        echo "<pre>";
        echo "Cliente: ".$this->cliente.'<br>';
        echo "Quantidade de itens: ".$this->quantidadeItens.'<br>';
        echo "Desconto: R$ ".$this->descontoTotal.'<br>';
        echo "Total: R$ ".$this->valorTotal.'<br>';
        echo "Forma de pagamento: ".$this->formaPagamento;
    }
}
?>
