<?php
include_once "./produtoCardapio.php";

class Bebida extends ProdutoCardapio{
    public int $volumeMl;
    public string $tipoBebida;
    public string $temperatura;
    public string $contemAcucar;
    public string $contemGas;
    public string $marca;
    public string $validade;
    public string $embalagem;
    public string $sabor;
    public int $teorCalorico;

    public function AlterarVolume($volume){
        $this->volumeMl = $volume;
    }

    public function DefinirTemperatura($temperatura){
        $this->temperatura = $temperatura;
    }

    public function AlterarSabor($sabor){
        $this->sabor = $sabor;
    }

    public function InformarAcucar($status){
        $this->contemAcucar = $status;
    }

    public function InformarGas($status){
        $this->contemGas = $status;
    }

    public function ExibirDadosBebida(){
        echo "<pre>";
        echo "Bebida: ".$this->nome.'<br>';
        echo "Volume: ".$this->volumeMl."ml<br>";
        echo "Sabor: ".$this->sabor.'<br>';
        echo "Preço: R$ ".$this->preco;
    }
}
?>