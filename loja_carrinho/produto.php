<?php
class Produto{
    public string $nome;
    public int $codigo;
    public float $preco;
    public string $marca;
    public string $categoria;
    public string $descricao;
    public int $quantidadeEstoque;
    public float $peso;
    public string $fornecedor;
    public string $statusProduto;

    public function CadastrarProduto($nome, $codigo, $preco){
        $this->nome = $nome;
        $this->codigo = $codigo;
        $this->preco = $preco;
    }

    public function AlterarPreco($preco){
        $this->preco = $preco;
    }

    public function AplicarDesconto($percentual){
        $this->preco = $this->preco - ($this->preco * $percentual / 100);
    }

    public function AtualizarEstoque($quantidade){
        $this->quantidadeEstoque = $quantidade;
    }

    public function AlterarStatus($status){
        $this->statusProduto = $status;
    }

    public function ExibirDados(){
        echo "<pre>";
        echo "Nome: ".$this->nome.'<br>';
        echo "Código: ".$this->codigo.'<br>';
        echo "Preço: R$ ".$this->preco.'<br>';
        echo "Marca: ".$this->marca.'<br>';
        echo "Categoria: ".$this->categoria.'<br>';
        echo "Estoque: ".$this->quantidadeEstoque.'<br>';
        echo "Status: ".$this->statusProduto;
    }
}
?>
