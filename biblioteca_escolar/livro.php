<?php
include_once "./itemBiblioteca.php";

class Livro extends ItemBiblioteca{
    public int $numeroPaginas;
    public string $isbn;
    public string $edicao;
    public string $genero;
    public string $idioma;
    public string $capa;
    public string $sinopse;
    public string $colecao;
    public string $tradutor;
    public string $tipoCapa;

    public function CadastrarLivro($titulo, $autor){
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function AlterarISBN($isbn){
        $this->isbn = $isbn;
    }

    public function AlterarPaginas($paginas){
        $this->numeroPaginas = $paginas;
    }

    public function AlterarGenero($genero){
        $this->genero = $genero;
    }

    public function AdicionarExemplar(){
        $this->quantidade = $this->quantidade + 1;
        $this->disponivel = $this->disponivel + 1;
    }

    public function RemoverExemplar(){
        if($this->quantidade > 0){
            $this->quantidade = $this->quantidade - 1;
        }
        if($this->disponivel > 0){
            $this->disponivel = $this->disponivel - 1;
        }
    }
}
?>