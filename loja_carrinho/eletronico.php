<?php
class Eletronico extends Produto{
    public string $modelo;
    public int $voltagem;
    public int $garantiaMeses;
    public int $numeroSerie;
    public string $cor;
    public int $capacidade;
    public $sistemaOperacional;
    public int $consumoEnergia;
    public array $acessorios = [''];

    public function DefinirGarantia($garantia){
        $this->garantiaMeses = $garantia;
    }

    public function AtualizarVoltagem($voltagem){
        $this->voltagem = $voltagem;
    }

    public function AtualizarCapacidade($capacidade){
        $this->capacidade = $capacidade;
    }

    public function InformarAcessorios(array $acessorios){
        $this->acessorios = array $acessorios;
    }

    public function VerificarGarantia(){
        if (!empty($this->garantiaMeses)) {
            echo 'Garantia: '.$this->garantiaMeses.' meses';
        } else{
            echo 'O produto não possui garantia.';
        }
    }

    public function ExibirDados(){
        echo 'Nome: '.$this->nome.'<br>';
        echo 'Código: '.$this->codigo.'<br>';
        echo 'Preço: '.$this->preco.'<br>';
        echo 'Marca: '.$this->marca.'<br>';
        echo 'Status: '.$this->status.'<br>';
        echo 'Modelo: '.$this->modelo.'<br>';
    }
}