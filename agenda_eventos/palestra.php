<?php
include_once "./evento.php";

class Palestra extends Evento{
    public string $nomePalestrante;
    public string $tema;
    public string $miniCurriculo;
    public string $recursosNecessarios;
    public int $duracaoMinutos;
    public string $certificado;
    public int $quantidadeInscritos = 0;
    public string $materialApoio;
    public string $linkApresentacao;
    public string $areaConhecimento;

    public function DefinirPalestrante($nome){
        $this->nomePalestrante = $nome;
    }

    public function AlterarTema($tema){
        $this->tema = $tema;
    }

    public function AdicionarRecurso($recurso){
        $this->recursosNecessarios = $recurso;
    }

    public function AtivarCertificado($status){
        $this->certificado = $status;
    }

    public function AdicionarInscrito($quantidade){
        $this->quantidadeInscritos = $this->quantidadeInscritos + $quantidade;
    }

    public function ExibirDadosPalestra(){
        echo "<pre>";
        echo "Palestra: ".$this->titulo.'<br>';
        echo "Palestrante: ".$this->nomePalestrante.'<br>';
        echo "Tema: ".$this->tema.'<br>';
        echo "Inscritos: ".$this->quantidadeInscritos;
    }
}
?>