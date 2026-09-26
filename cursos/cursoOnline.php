<?php
class CursoOnline{
    public string $titulo;
    public int $codigoCurso;
    public string $descricao;
    public int $cargaHoraria;
    public string $nivel;
    public $instrutor;
    public array $alunos = [];
    public array $aulas = [];
    public int $quantidadeAlunos = 0;
    public string $statusCurso;

    public function DefinirInstrutor($instrutor){
        $this->instrutor = $instrutor;
    }

    public function AdicionarAluno($aluno){
        array_push($this->alunos, $aluno);
        $this->quantidadeAlunos = count($this->alunos);
    }

    public function RemoverAluno($aluno){
        $posicao = array_search($aluno, $this->alunos, true);
        if($posicao !== false){
            unset($this->alunos[$posicao]);
            $this->quantidadeAlunos = count($this->alunos);
        }
    }

    public function AdicionarAula($titulo){
        array_push($this->aulas, $titulo);
    }

    public function ListarAlunos(){
        foreach($this->alunos as $aluno){
            echo $aluno->nome."<br>";
        }
    }

    public function ExibirDadosCurso(){
        echo "<pre>";
        echo "Curso: ".$this->titulo.'<br>';
        echo "Código: ".$this->codigoCurso.'<br>';
        echo "Nível: ".$this->nivel.'<br>';
        echo "Instrutor: ".$this->instrutor->nome.'<br>';
        echo "Quantidade de alunos: ".$this->quantidadeAlunos.'<br>';
        echo "Status: ".$this->statusCurso;
    }
}
?>
