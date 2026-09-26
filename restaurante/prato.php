<?php
include_once "./produtoCardapio.php";

class Prato extends ProdutoCardapio{
    public string $tipoPrato;
    public array $ingredientes = [];
    public string $tamanhoPorcao;
    public string $nivelPimenta;
    public string $contemGluten;
    public string $contemLactose;
    public int $calorias;
    public string $acompanhamento;
    public string $chefResponsavel;
    public string $promocaoAtiva;

    public function AdicionarIngrediente($ingrediente){
        array_push($this->ingredientes, $ingrediente);
    }

    public function RemoverIngrediente($ingrediente){
        $posicao = array_search($ingrediente, $this->ingredientes);
        if($posicao !== false){
            unset($this->ingredientes[$posicao]);
        }
    }

    public function AlterarPorcao($tamanho){
        $this->tamanhoPorcao = $tamanho;
    }

    public function DefinirAcompanhamento($acompanhamento){
        $this->acompanhamento = $acompanhamento;
    }

    public function AtivarPromocao($status){
        $this->promocaoAtiva = $status;
    }

    public function ExibirDadosPrato(){
        echo "<pre>";
        echo "Prato: ".$this->nome.'<br>';
        echo "Tipo: ".$this->tipoPrato.'<br>';
        echo "Preço: R$ ".$this->preco.'<br>';
        echo "Acompanhamento: ".$this->acompanhamento;
    }
}
?>