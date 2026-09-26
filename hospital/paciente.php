<?php
include_once "./pessoa.php";

class Paciente extends Pessoa{
    public int $numeroProntuario;
    public string $tipoSanguineo;
    public string $convenio;
    public string $sintomas;
    public string $alergias;
    public string $medicamentosEmUso;
    public string $historicoMedico;
    public float $peso;
    public float $altura;
    public string $statusPaciente;

    public function InformarSintoma($sintoma){
        $this->sintomas = $sintoma;
    }

    public function AdicionarAlergia($alergia){
        $this->alergias = $alergia;
    }

    public function AtualizarPeso($peso){
        $this->peso = $peso;
    }

    public function AtualizarAltura($altura){
        $this->altura = $altura;
    }

    public function RegistrarMedicamento($medicamento){
        $this->medicamentosEmUso = $medicamento;
    }

    public function ExibirDadosPaciente(){
        echo "<pre>";
        echo "Paciente: ".$this->nome.'<br>';
        echo "Prontuário: ".$this->numeroProntuario.'<br>';
        echo "Tipo sanguíneo: ".$this->tipoSanguineo.'<br>';
        echo "Sintomas: ".$this->sintomas.'<br>';
        echo "Alergias: ".$this->alergias.'<br>';
        echo "Medicamentos: ".$this->medicamentosEmUso;
    }
}
?>
