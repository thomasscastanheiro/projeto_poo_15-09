<?php
class Garagem{
    public string $nomeGaragem;
    public string $codigoGaragem;
    public string $endereco;
    public string $cidade;
    public string $responsavel;
    public array $veiculos = [];
    public int $capacidadeMaxima;
    public int $quantidadeAtual = 0;
    public string $telefone;
    public string $statusGaragem;

    public function AdicionarVeiculo($veiculo){
        array_push($this->veiculos, $veiculo);
        $this->quantidadeAtual = $this->quantidadeAtual + 1;
    }

    public function RemoverVeiculo($veiculo){
        $posicao = array_search($veiculo, $this->veiculos, true);
        if($posicao !== false){
            unset($this->veiculos[$posicao]);
            $this->quantidadeAtual = $this->quantidadeAtual - 1;
        }
    }

    public function ListarVeiculos(){
        foreach($this->veiculos as $veiculo){
            echo $veiculo->modelo."<br>";
        }
    }

    public function ContarVeiculos(){
        return $this->quantidadeAtual;
    }

    public function VerificarVagas(){
        if($this->quantidadeAtual < $this->capacidadeMaxima){
            return "Tem vagas";
        } return "Garagem cheia";
    }

    public function ExibirDados(){
        echo "<pre>";
        echo "Garagem: ".$this->nomeGaragem.'<br>';
        echo "Veículos: ".$this->quantidadeAtual."/".$this->capacidadeMaxima;
    }
}
?>