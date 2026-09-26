<?php
include_once "./evento.php";

class Oficina extends Evento{
    public string $nomeInstrutor;
    public string $temaPratico;
    public string $materiaisNecessarios;
    public int $numeroComputadores;
    public int $duracaoMinutos;
    public string $nivelConhecimento;
    public string $atividadeFinal;
    public int $quantidadeGrupos;
    public string $softwareUtilizado;
    public string $entregaObrigatoria;

    public function DefinirInstrutor($nome){
        $this->nomeInstrutor = $nome;
    }

    public function AdicionarMaterial($material){
        $this->materiaisNecessarios = $material;
    }

    public function AlterarNivel($nivel){
        $this->nivelConhecimento = $nivel;
    }

    public function DefinirAtividadeFinal($atividade){
        $this->atividadeFinal = $atividade;
    }

    public function InformarSoftware($software){
        $this->softwareUtilizado = $software;
    }

    public function ExibirDadosOficina(){
        echo "<pre>";
        echo "Oficina: ".$this->titulo.'<br>';
        echo "Instrutor: ".$this->nomeInstrutor.'<br>';
        echo "Tema: ".$this->temaPratico.'<br>';
        echo "Nível: ".$this->nivelConhecimento.'<br>';
        echo "Software: ".$this->softwareUtilizado;
    }
}
?>