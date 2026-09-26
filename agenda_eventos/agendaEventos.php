<?php
class AgendaEventos{
    public string $nomeAgenda;
    public int $codigoAgenda;
    public string $responsavelAgenda;
    public array $eventos = [];
    public int $quantidadeEventos = 0;
    public string $anoLetivo;
    public string $escola;
    public string $cidade;
    public string $dataCriacao;
    public string $statusAgenda;

    public function AdicionarEvento($evento){
        array_push($this->eventos, $evento);
        $this->quantidadeEventos = $this->quantidadeEventos + 1;
    }

    public function RemoverEvento($evento){
        $posicao = array_search($evento, $this->eventos, true);
        if($posicao !== false){
            unset($this->eventos[$posicao]);
            $this->quantidadeEventos = $this->quantidadeEventos - 1;
        }
    }

    public function ListarEventos(){
        foreach($this->eventos as $evento){
            echo $evento->titulo."<br>";
        }
    }

    public function BuscarEvento($titulo){
        foreach($this->eventos as $evento){
            if($evento->titulo == $titulo){
                return $evento;
            }
        }
        return null;
    }

    public function ContarEventos(){
        return $this->quantidadeEventos;
    }

    public function ExibirDados(){
        echo "<pre>";
        echo "Agenda: ".$this->nomeAgenda.'<br>';
        echo "Responsável: ".$this->responsavelAgenda.'<br>';
        echo "Escola: ".$this->escola.'<br>';
        echo "Eventos: ".$this->quantidadeEventos;
    }
}
?>