<?php
include_once "./pessoa.php";

class Tecnico extends Pessoa{
    public int $registroTecnico;
    public string $estrategia;
    public int $anosExperiencia;
    public int $titulosConquistados;
    public float $salario;
    public string $estiloJogo;
    public string $auxiliarTecnico;
    public string $formacaoPreferida;
    public int $jogosComandados = 0;
    public string $statusTecnico;

    public function DefinirEstrategia($estrategia){
        $this->estrategia = $estrategia;
    }

    public function AlterarFormacao($formacao){
        $this->formacaoPreferida = $formacao;
    }

    public function AdicionarTitulo($titulo){
        $this->titulosConquistados = $this->titulosConquistados + $titulo;
    }

    public function AtualizarSalario($valor){
        $this->salario = $valor;
    }

    public function ComandarJogo($time){
        $this->jogosComandados = $this->jogosComandados + 1;
        $time->DefinirTecnico($this);
    }

    public function ExibirDadosTecnico(){
        echo "<pre>";
        echo "Técnico: ".$this->nome.'<br>';
        echo "Estratégia: ".$this->estrategia.'<br>';
        echo "Formação: ".$this->formacaoPreferida;
    }
}
?>