<?php
include_once "./pessoa.php";
class Professor extends Pessoa{
    public int $registro;
    public string $disciplina;
    public int $cargaHoraria = 0;
    public int $salario = 0;
    public string $formacao;
    public string $especialidade;
    public array $turmas = [];
    public $horarioAula;
    public int $anoContrataçao;
    public string $status;

    public function atribuirDisciplina($disciplina) {
         $this->disciplina = $disciplina; 
    }

    public function adicionarTurma($turma) {
        $this->turmas[] = $turma;
    }

    public function removerTurma($turma) {
        foreach ($this->turmas as $i => $item) {
            if ($item === $turma) unset($this->turmas[$i]);
        }
    }

    public function AlterarCarga($cargaNova){
        $this->cargaHoraria = $cargaNova;
    }

    public function AtualizarSalario($salarioNovo){
        $this->salario = $salarioNovo;
    }

    public function ExibirDados(){
        echo 'Professor: '.$this->nome.'<br>Disciplina: '.$this->disciplina.'<br>'.'Carga horária: '.$this->cargaHoraria.'Salário: R$'.$this->salario;
    }
    
}
?>