<?php
include_once "./produto.php";

class Eletronico extends Produto{
    public string $modelo;
    public string $voltagem;
    public int $garantiaMeses;
    public string $numeroSerie;
    public string $cor;
    public string $capacidade;
    public string $sistemaOperacional;
    public float $consumoEnergia;
    public string $acessoriosInclusos;
    public string $assistenciaTecnica;

    public function DefinirGarantia($meses){
        $this->garantiaMeses = $meses;
    }

    public function AlterarVoltagem($voltagem){
        $this->voltagem = $voltagem;
    }

    public function AtualizarCapacidade($capacidade){
        $this->capacidade = $capacidade;
    }

    public function InformarAcessorios($acessorios){
        $this->acessoriosInclusos = $acessorios;
    }

    public function VerificarGarantia(){
        if($this->garantiaMeses > 0){
            return "Possui garantia";
        }
        return "Não possui garantia";
    }

    public function ExibirDadosEletronico(){
        echo "<pre>";
        echo "Produto: ".$this->nome.'<br>';
        echo "Modelo: ".$this->modelo.'<br>';
        echo "Voltagem: ".$this->voltagem.'<br>';
        echo "Garantia: ".$this->garantiaMeses." meses<br>";
        echo "Capacidade: ".$this->capacidade.'<br>';
        echo "Garantia: ".$this->VerificarGarantia();
    }
}
?>
