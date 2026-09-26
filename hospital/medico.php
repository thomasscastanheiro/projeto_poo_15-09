<?php
include_once "./pessoa.php";

class Medico extends Pessoa{
    public string $CRM;
    public string $especialidade;
    public string $horarioAtendimento;
    public string $salaAtendimento;
    public array $pacientesAtendidos = [];
    public string $telefoneProfissional;
    public string $emailProfissional;
    public int $anosExperiencia;
    public float $valorConsulta;
    public string $statusMedico;

    public function DefinirEspecialidade($especialidade){
        $this->especialidade = $especialidade;
    }

    public function AlterarHorario($horario){
        $this->horarioAtendimento = $horario;
    }

    public function AdicionarPaciente($paciente){
        array_push($this->pacientesAtendidos, $paciente);
    }

    public function AtualizarValorConsulta($valor){
        $this->valorConsulta = $valor;
    }

    public function AlterarSala($sala){
        $this->salaAtendimento = $sala;
    }

    public function ExibirDadosMedico(){
        echo "<pre>";
        echo "Médico: ".$this->nome.'<br>';
        echo "CRM: ".$this->CRM.'<br>';
        echo "Especialidade: ".$this->especialidade.'<br>';
        echo "Horário: ".$this->horarioAtendimento.'<br>';
        echo "Sala: ".$this->salaAtendimento.'<br>';
        echo "Valor da consulta: R$ ".$this->valorConsulta;
    }
}
?>
