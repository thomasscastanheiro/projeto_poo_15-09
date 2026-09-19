<?php

include_once "./sistema_biblioteca/itemBiblioteca.php";

class Revista extends ItemBiblioteca{
    public int $numeroEdicao;
    public string $mesPublicacao;
    public string $periodicidade;
    public string $issn;
    public string $tema;
    public string $editor;
    public string $imagemCapa;
    public int $numeroPaginas;
    public string $dataPublicacao;
    public string $tipoRevista;

    public function CadastrarRevista($titulo, $edicao){
        $this->titulo = $titulo;
        $this->numeroEdicao = $edicao;
    }

    public function AlterarEdicao($edicao){
        $this->numeroEdicao = $edicao;
    }

    public function AlterarTema($tema){
        $this->tema = $tema;
    }

    public function AlterarPeriodicidade($periodicidade){
        $this->periodicidade = $periodicidade;
    }

    public function AlterarISSN($issn){
        $this->issn = $issn;
    }

    public function ExibirRevista(){
        echo "<pre>";
        echo "Título: ".$this->titulo;
        echo "Edição: ".$this->numeroEdicao;
        echo "Tema: ".$this->tema;
        echo "Periodicidade: ".$this->periodicidade;
        echo "ISSN: ".$this->issn;
        echo "</pre>";
    }
}
?>