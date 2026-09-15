<?php
include_once "./sistema_escolar/pessoa.php";
class Aluno() extends Pessoa{
    public int $matricula;
    public int $serie;
    public int $turmaAtual;
    public int $nota1;
    public int $nota2;
    public int $nota3;
    public int $mediaFinal;
    public string $situação;
    public string $responsavel;
    public int $dataMatricula;

    public function Matricular($turma){
        $this->turmaAtual = $turma;
    }

    public function Nota1($nota){
        $this->nota1 = $nota;
    }

    public function Nota2($nota){
        $this->nota2 = $nota;
    }

    public function Nota3($nota){
        $this->nota3 = $nota;
    }

    public function Media(){
        $this->mediaFinal = ($this->nota1 + $this->nota2 + $this->nota3)/3;
    }

    
}
?>