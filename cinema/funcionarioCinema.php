<?php
include_once "./pessoa.php";

class FuncionarioCinema extends Pessoa{
    public int $codigoFuncionario;
    public string $cargo;
    public string $turno;
    public float $salario;
    public string $dataContratacao;
    public string $setor;
    public string $cracha;
    public string $supervisor;
    public float $horasTrabalhadas;
    public string $statusFuncionario;

    public function RegistrarEntrada($horario){
        $this->horasTrabalhadas += 8;
    }

    public function RegistrarSaida($horario){
        $this->horasTrabalhadas = $this->horasTrabalhadas;
    }

    public function AlterarCargo($cargo){
        $this->cargo = $cargo;
    }

    public function AlterarTurno($turno){
        $this->turno = $turno;
    }

    public function AtualizarSalario($valor){
        $this->salario = $valor;
    }

    public function ExibirDadosFuncionario(){
        echo "<pre>";
        echo "Funcionário: ".$this->nome.'<br>';
        echo "Cargo: ".$this->cargo.'<br>';
        echo "Turno: ".$this->turno;
    }
}
?>