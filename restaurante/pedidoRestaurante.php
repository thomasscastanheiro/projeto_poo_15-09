<?php
class PedidoRestaurante{
    public int $codigoPedido;
    public string $nomeCliente;
    public int $mesa;
    public array $itens = [];
    public float $valorTotal;
    public string $statusPedido;
    public string $formaPagamento;
    public string $dataPedido;
    public string $observacoes;
    public float $taxaServico;

    public function AdicionarItem($item){
        array_push($this->itens, $item);
           }

    public function RemoverItem($item){
        $posicao = array_search($item, $this->itens, true);
        if($posicao !== false){
            unset($this->itens[$posicao]);
        }
    }

    public function CalcularTotal(){
        $this->valorTotal = $this->taxaServico;
        foreach($this->itens as $item){
            $this->valorTotal = $this->valorTotal + $item->preco;
        }
        return $this->valorTotal;
    }

    public function AlterarStatus($status){
        $this->statusPedido = $status;
    }

    public function AdicionarObservacao($texto){
        $this->observacoes = $texto;
    }

    public function ExibirResumo(){
        echo "<pre>";
        echo "Cliente: ".$this->nomeCliente.'<br>';
        echo "Mesa: ".$this->mesa.'<br>';
        echo "Itens: ".count($this->itens).'<br>';
        echo "Total: R$ ".$this->valorTotal;
    }
}
?>