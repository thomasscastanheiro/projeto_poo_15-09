<?php
include_once "./pessoa.php";

class ClienteCinema extends Pessoa{
    public int $codigoCliente;
    public string $tipoIngresso;
    public array $filmesAssistidos = [];
    public int $pontosFidelidade;
    public string $meiaEntrada;
    public string $formaPagamento;
    public string $assentoEscolhido;
    public string $pipocaComprada;
    public string $bebidaComprada;
    public string $statusCliente;

    public function ComprarIngresso($sessao){
        $sessao->AdicionarCliente($this);
    }

    public function EscolherAssento($assento){
        $this->assentoEscolhido = $assento;
    }

    public function AdicionarPontos($pontos){
        $this->pontosFidelidade = $this->pontosFidelidade + $pontos;
    }

    public function ComprarPipoca($status){
        $this->pipocaComprada = $status;
    }

    public function ComprarBebida($status){
        $this->bebidaComprada = $status;
    }

    public function ExibirDadosCliente(){
        echo "<pre>";
        echo "Cliente: ".$this->nome.'<br>';
        echo "Ingresso: ".$this->tipoIngresso.'<br>';
        echo "Assento: ".$this->assentoEscolhido;
    }
}
?>