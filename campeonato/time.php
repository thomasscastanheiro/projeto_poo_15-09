<?php
class Time{
    public string $nomeTime;
    public string $cidadeTime;
    public string $estadoTime;
    public mixed $tecnico;
    public array $jogadores = [];
    public int $quantidadeJogadores = 0;
    public string $estadio;
    public int $pontos = 0;
    public int $vitorias = 0;
    public int $derrotas = 0;

    public function DefinirTecnico($tecnico){
        $this->tecnico = $tecnico;
    }

    public function AdicionarJogador($jogador){
        array_push($this->jogadores, $jogador);
        $this->quantidadeJogadores = $this->quantidadeJogadores + 1;
    }

    public function RemoverJogador($jogador){
        $posicao = array_search($jogador, $this->jogadores, true);
        if($posicao !== false){
            unset($this->jogadores[$posicao]);
            $this->quantidadeJogadores = $this->quantidadeJogadores - 1;
        }
    }

    public function ListarJogadores(){
        foreach($this->jogadores as $jogador){
            echo $jogador->nome."<br>";
        }
    }

    public function CalcularPontos($pontos){
        $this->pontos = $this->pontos + $pontos;
    }

    public function ExibirDados(){
        echo "<pre>";
        echo "Time: ".$this->nomeTime.'<br>';
        echo "Técnico: ".$this->tecnico->nome.'<br>';
        echo "Jogadores: ".$this->quantidadeJogadores.'<br>';
        echo "Pontos: ".$this->pontos;
    }
}
?>