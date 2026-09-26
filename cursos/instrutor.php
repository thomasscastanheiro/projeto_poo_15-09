<?php
include_once "./pessoa.php";

class Instrutor extends Pessoa{
    public int $codigoInstrutor;
    public string $areaAtuacao;
    public string $formacao;
    public array $cursosCriados = [];
    public float $avaliacaoMedia;
    public string $biografia;
    public int $anosExperiencia;
    public string $redeSocial;
    public float $valorHora;
    public string $statusInstrutor;

    public function CriarCurso($curso){
        $this->cursosCriados[] = $curso;
        $curso->DefinirInstrutor($this);
    }

    public function PublicarAula($tituloAula){
        echo "Aula publicada: ".$tituloAula;
    }

    public function AtualizarBiografia($texto){
        $this->biografia = $texto;
    }

    public function AlterarValorHora($valor){
        $this->valorHora = $valor;
    }

    public function AdicionarArea($area){
        $this->areaAtuacao = $area;
    }

    public function ExibirDadosInstrutor(){
        echo "<pre>";
        echo "Instrutor: ".$this->nome.'<br>';
        echo "Código: ".$this->codigoInstrutor.'<br>';
        echo "Área: ".$this->areaAtuacao.'<br>';
        echo "Formação: ".$this->formacao.'<br>';
        echo "Anos de experiência: ".$this->anosExperiencia;
    }
}
?>
