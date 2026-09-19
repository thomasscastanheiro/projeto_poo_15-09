<?php

class ItemBiblioteca{
    public string $titulo;
    public string $autor;
    public string $codigo;
    public string $categoria;
    public int $anoPublicacao;
    public string $editora;
    public int $quantidade;
    public int $disponivel;
    public string $localizacao;
    public string $status;

    public function CadastrarItem($titulo, $codigo){
        $this->titulo = $titulo;
        $this->codigo = $codigo;
    }

    public function Emprestar(){
        if($this->disponivel > 0){
            $this->disponivel = $this->disponivel - 1;
            $this->status = "Emprestado";
        }
    }

    public function Devolver(){
        $this->disponivel = $this->disponivel + 1;
        $this->status = "Disponível";
    }

    public function AlterarQuantidade($quantidade){
        $this->quantidade = $quantidade;
        $this->disponivel = $quantidade;
    }

    public function AlterarStatus($status){
        $this->status = $status;
    }

    public function ExibirDados(){
        echo "<pre>";
        echo "Título: ".$this->titulo;
        echo "Autor: ".$this->autor;
        echo "Código: ".$this->codigo;
        echo "Categoria: ".$this->categoria;
        echo "Ano de publicação: ".$this->anoPublicacao;
        echo "Editora: ".$this->editora;
        echo "Quantidade: ".$this->quantidade;
        echo "Disponível: ".$this->disponivel;
        echo "Localização: ".$this->localizacao;
        echo "Status: ".$this->status;
        echo "</pre>";
    }
}
?>