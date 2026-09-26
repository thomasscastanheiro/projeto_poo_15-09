<?php
class Veiculo{
    public string $placa;
    public string $marca;
    public string $modelo;
    public int $ano;
    public string $cor;
    public float $velocidadeAtual = 0;
    public float $combustivel;
    public float $quilometragem;
    public string $statusVeiculo;
    public string $motoristaAtual;

    public function CadastrarVeiculo($placa, $modelo){
        $this->placa = $placa;
        $this->modelo = $modelo;
    }

    public function Acelerar($valor){
        $this->velocidadeAtual = $this->velocidadeAtual + $valor;
    }

    public function Frear($valor){
        $this->velocidadeAtual = $this->velocidadeAtual - $valor;
        if($this->velocidadeAtual < 0){
            $this->velocidadeAtual = 0;
        }
    }

    public function Abastecer($litros){
        $this->combustivel = $this->combustivel + $litros;
    }

    public function AlterarMotorista($motorista){
        $this->motoristaAtual = $motorista;
    }

    public function ExibirDados(){
        echo "<pre>";
        echo "Placa: ".$this->placa.'<br>';
        echo "Marca: ".$this->marca.'<br>';
        echo "Modelo: ".$this->modelo.'<br>';
        echo "Velocidade: ".$this->velocidadeAtual." km/h";
    }
}
?>