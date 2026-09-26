<?php
include_once "./veiculo.php";

class Carro extends Veiculo{
    public int $quantidadePortas = 0;
    public string $tipoCambio;
    public float $capacidadePortaMalas;
    public int $quantidadePassageiros;
    public string $arCondicionado;
    public string $tipoDirecao;
    public string $seguroAtivo;
    public string $categoriaCarro;
    public float $consumoMedio;
    public string $usoAtual = "";

    public function AbrirPortaMalas(){
        echo "Porta malas aberto";
    }

    public function FecharPortaMalas(){
        echo "Porta malas fechado";
    }

    public function AlterarUso($uso){
        $this->usoAtual = $uso;
    }

    public function AtivarSeguro($status){
        $this->seguroAtivo = $status;
    }

    public function CalcularConsumo($distancia){
        return $distancia / $this->consumoMedio;
    }

    public function ExibirDadosCarro(){
        echo "<pre>";
        echo "Carro: ".$this->modelo.'<br>';
        echo "Portas: ".$this->quantidadePortas.'<br>';
        echo "Uso: ".$this->usoAtual;
    }
}
?>