<?php
include_once "./produto.php";

class LivroProduto extends Produto{
    public string $autor;
    public string $editora;
    public string $ISBN;
    public string $genero;
    public int $numeroPaginas;
    public int $anoLancamento;
    public string $idioma;
    public string $tipoCapa;
    public string $faixaEtaria;
    public string $sinopse;

    public function DefinirAutor($autor){
        $this->autor = $autor;
    }

    public function AlterarEditora($editora){
        $this->editora = $editora;
    }

    public function AtualizarSinopse($sinopse){
        $this->sinopse = $sinopse;
    }

    public function AlterarGenero($genero){
        $this->genero = $genero;
    }

    public function InformarFaixaEtaria($faixaEtaria){
        $this->faixaEtaria = $faixaEtaria;
    }

    public function ExibirDadosLivro(){
        echo "<pre>";
        echo "Livro: ".$this->nome.'<br>';
        echo "Autor: ".$this->autor.'<br>';
        echo "Editora: ".$this->editora.'<br>';
        echo "ISBN: ".$this->ISBN.'<br>';
        echo "Gênero: ".$this->genero.'<br>';
        echo "Preço: R$ ".$this->preco;
    }
}
?>
