<?php
include_once "./pessoa.php";

class AlunoOnline extends Pessoa{
    public int $matricula;
    public array $cursosInscritos = [];
    public float $progressoCurso;
    public float $notaFinal;
    public string $certificadoEmitido = "Não";
    public string $dataInscricao;
    public string $ultimoAcesso;
    public string $planoAssinatura;
    public string $nivelConhecimento;
    public string $statusAluno;

    public function InscreverEmCurso($curso){
        array_push($this->cursosInscritos, $curso);
    }

    public function AssistirAula($aula){
        $this->ultimoAcesso = $aula;
    }

    public function AtualizarProgresso($progresso){
        $this->progressoCurso = $progresso;
    }

    public function RegistrarNota($nota){
        $this->notaFinal = $nota;
    }

    public function EmitirCertificado($curso){
        $this->certificadoEmitido = "Sim";
    }

    public function ExibirDadosAluno(){
        echo "<pre>";
        echo "Aluno: ".$this->nome.'<br>';
        echo "Matrícula: ".$this->matricula.'<br>';
        echo "Progresso: ".$this->progressoCurso.'<br>';
        echo "Nota final: ".$this->notaFinal.'<br>';
        echo "Certificado: ".$this->certificadoEmitido;
    }
}
?>
