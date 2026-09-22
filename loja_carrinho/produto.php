<?php
class Produto{
    public string $nome;
    public int $codigo;
    public int $preco;
    public string $marca;
    public string $categoria;
    public string $descricao;
    public int $quantidadeEstoque;
    public int $peso;
    public string $fornecedor;
    public string $status = "Ativo";

    public function Cadastrar($nome, $codigo, $preco){
        $this->nome = $nome;
        $this->codigo = $codigo;
        $this->preco = $preco;
    }

    public function AtualizarPreco($novoPreco){
        $this->preco = $novoPreco;
    }

    public function AplicarDesconto($percentual){
        $this->preco = ($this->preco*$percentual)/100;
    }

    public function AtualizarEstoque($quantidade){
        $this->quantidadeEstoque = $quantidade;
    }

    public function AtualizarStatus(){
        if ($this->status === "Ativo") {
            $this->status = "Indisponível";
        } else {
            $this->status = "Ativo";
        }
    }

    public function ExibirDados(){
        echo 'Nome: '.$this->nome.'<br>';
        echo 'Código: '.$this->codigo.'<br>';
        echo 'Preço: '.$this->preco.'<br>';
        echo 'Marca: '.$this->marca.'<br>';
        echo 'Status: '.$this->status.'<br>';
    }
}
?>