<?php
class Consulta{
    public int $codigoConsulta;
    public $paciente;
    public $medico;
    public string $dataConsulta;
    public string $horarioConsulta;
    public string $motivo;
    public string $statusConsulta;
    public string $observacoes;
    public float $valorConsulta;
    public string $formaPagamento;

    public function AgendarConsulta($paciente, $medico){
        $this->paciente = $paciente;
        $this->medico = $medico;
        $medico->AdicionarPaciente($paciente);
        $this->statusConsulta = "Agendada";
    }

    public function AlterarData($data){
        $this->dataConsulta = $data;
    }

    public function AlterarHorario($horario){
        $this->horarioConsulta = $horario;
    }

    public function CancelarConsulta($motivo){
        $this->statusConsulta = "Cancelada";
        $this->motivo = $motivo;
    }

    public function RegistrarObservacao($texto){
        $this->observacoes = $texto;
    }

    public function ExibirDadosConsulta(){
        echo "<pre>";
        echo "Paciente: ".$this->paciente->nome.'<br>';
        echo "Médico: ".$this->medico->nome.'<br>';
        echo "Especialidade: ".$this->medico->especialidade.'<br>';
        echo "Data: ".$this->dataConsulta.'<br>';
        echo "Horário: ".$this->horarioConsulta.'<br>';
        echo "Motivo: ".$this->motivo.'<br>';
        echo "Status: ".$this->statusConsulta.'<br>';
        echo "Observações: ".$this->observacoes;
    }
}
?>
