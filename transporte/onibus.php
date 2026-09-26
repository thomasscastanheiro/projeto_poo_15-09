<?php
include_once "./veiculo.php";

class Onibus extends Veiculo{
    public string $numeroLinha;
    public int $capacidadePassageiros;
    public int $passageirosAtuais;
    public string $possuiAcessibilidade;
    public string $itinerario;
    public string $nomeMotorista;
    public string $horarioSaida;
    public string $horarioChegada;
    public string $empresaResponsavel;
    public int $quantidadeParadas;

    public function EmbarcarPassageiro($quantidade){
        $this->passageirosAtuais = $this->passageirosAtuais + $quantidade;
    }

    public function DesembarcarPassageiro($quantidade){
        $this->passageirosAtuais = $this->passageirosAtuais - $quantidade;
    }

    public function AlterarItinerario($itinerario){
        $this->itinerario = $itinerario;
    }

    public function DefinirHorarioSaida($horario){
        $this->horarioSaida = $horario;
    }

    public function VerificarLotacao(){
        if($this->passageirosAtuais >= $this->capacidadePassageiros){
            return "Lotado";
        }
        return "Tem vagas";
    }

    public function ExibirDadosOnibus(){
        echo "<pre>";
        echo "Linha: ".$this->numeroLinha.'<br>';
        echo "Passageiros: ".$this->passageirosAtuais."/".$this->capacidadePassageiros.'<br>';
        echo "Lotação: ".$this->VerificarLotacao();
    }
}
?>