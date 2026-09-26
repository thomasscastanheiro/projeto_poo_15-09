<?php
include_once "./pessoa.php";

class Jogador extends Pessoa{
    public int $numeroCamisa;
    public string $posicao;
    public int $gols = 0;
    public int $assistencias = 0;
    public int $cartoesAmarelos = 0;
    public int $cartoesVermelhos = 0;
    public int $partidasJogadas = 0;
    public float $altura;
    public float $peso;
    public string $statusJogador;

    public function MarcarGol($quantidade){
        $this->gols = $this->gols + $quantidade;
    }

    public function DarAssistencia($quantidade){
        $this->assistencias = $this->assistencias + $quantidade;
    }

    public function ReceberCartaoAmarelo(){
        $this->cartoesAmarelos = $this->cartoesAmarelos + 1;
    }

    public function ReceberCartaoVermelho(){
        $this->cartoesVermelhos = $this->cartoesVermelhos + 1;
    }

    public function AlterarPosicao($posicao){
        $this->posicao = $posicao;
    }

    public function ExibirDadosJogador(){
        echo "<pre>";
        echo "Jogador: ".$this->nome.'<br>';
        echo "Camisa: ".$this->numeroCamisa.'<br>';
        echo "Posição: ".$this->posicao.'<br>';
        echo "Gols: ".$this->gols;
    }
}
?>