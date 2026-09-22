<?php
class LivroProduto extends Produto{
    public string $autor;
    public string $editora;
    public int $isbn;
    public string $genero;
    public int $numeroPaginas;
    public int $ano;
    public string $idioma;
    public string $tipoCapa;
    public int $faixaEtaria;
    public string $sinopse;

    public function DefinirAutor($autor){
        $this->autor = $autor;
    }

    public function AtualizarEditora($editora){
        $this->editora = $editora;
    }

    public function AtualizarSinopse($sinopse){
        $this->sinopse = $sinopse;
    }

    public function AlterarGenero($genero){
        $this->genero = $genero;
    }

    public DefinirFaixaEtaria($faixaEtaria){
        $this->faixaEtaria = $faixaEtaria;
    }

    public function ExibirDados(){
        echo 'Nome: '.$this->nome.'<br>';
        echo 'Código: '.$this->codigo.'<br>';
        echo 'Preço: '.$this->preco.'<br>';
        echo 'Marca: '.$this->marca.'<br>';
        echo 'Status: '.$this->status.'<br>';
        echo 'Autor: '.$this->autor.'<br>';
        echo 'Editora: '.$this->editora.'<br>';
        echo 'Gênero: '.$this->genero.'<br>';
        echo 'Ano de lançamento: '.$this->ano.'<br>';
        echo 'Faixa Etária: '.$this->faixaEtaria.'<br>';
        echo 'Sinopse: '.$this->sinopse.'<br>';
    }
}