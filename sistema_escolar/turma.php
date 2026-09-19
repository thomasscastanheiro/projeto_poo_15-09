<?php
class Turma{
    public $nomeTurma;
    public $codigoTurma;
    public $anoLetivo;
    public array $listaAlunos = ['';]
    public $sala, $turno, $professorResponsavel, $limiteAlunos, $curso, $statusTurma;

    public function DefinirProfessor($professor){
        $this->professorResponsavel = $professor;
    }

    public function adicionarAluno($aluno){
        if (count($this->listaAlunos) < $this->limiteAlunos) {
            $this->listaAlunos[] += $aluno;
    }

    public function removerAluno($aluno){
        foreach ($this->listaAlunos as $i => $item) {
            if ($item === $aluno) unset($this->listaAlunos[$i]);
        }
    }

    public function contarAlunos(){
        return count($this->listaAlunos);
    }

     public function verificarVagas(){
        return count($this->listaAlunos)<$this->limiteAlunos;
     }

     public function exibirDados(){
        echo 'Nome: '.$this->nomeTurma.'; Código: '.$this->codigoTurma.'; Ano letivo: '.$this->anoLetivo.'; Sala: '.$this->sala;
     }
}