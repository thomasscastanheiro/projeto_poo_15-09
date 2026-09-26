<?php
class ProdutoCardapio{
    public string $nome;
    public int $codigo;
    public float $preco;
    public string $descricao;
    public string $categoria;
    public int $tempoPreparo;
    public string $disponivel;
    public string $ingredientesBase;
    public string $imagem;
    public int $quantidadeVendida;

    public function CadastrarProduto($nome, $preco){
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function AlterarPreco($preco){
        $this->preco = $preco;
    }

    public function AlterarDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function MudarDisponibilidade($status){
        $this->disponivel = $status;
    }

    public function AtualizarTempoPreparo($tempo){
        $this->tempoPreparo = $tempo;
    }

    public function ExibirDados(){
        echo "<pre>";
        echo "Nome: ".$this->nome.'<br>';
        echo "Preço: R$ ".$this->preco.'<br>';
        echo "Categoria: ".$this->categoria.'<br>';
        echo "Disponível: ".$this->disponivel;
    }
}
?>