<?php
class SessaoCinema{
    public int $codigoSessao;
    public string $tituloFilme;
    public int $sala;
    public string $horario;
    public string $dataSessao;
    public int $capacidadeSala;
    public array $clientes = [];
    public mixed $funcionarioResponsavel;
    public float $valorIngresso;
    public string $statusSessao;

    public function AdicionarCliente($cliente){
        array_push($this->clientes, $cliente);
    }

    public function RemoverCliente($cliente){
        $posicao = array_search($cliente, $this->clientes, true);
        if($posicao !== false){
            unset($this->clientes[$posicao]);
        }
    }

    public function DefinirFuncionario($funcionario){
        $this->funcionarioResponsavel = $funcionario;
    }

    public function AlterarHorario($horario){
        $this->horario = $horario;
    }

    public function VerificarLotacao(){
        if(count($this->clientes) >= $this->capacidadeSala){
            return "Sala cheia";
        }
        return "Tem vagas";
    }

    public function ExibirDadosSessao(){
        echo "<pre>";
        echo "Filme: ".$this->tituloFilme.'<br>';
        echo "Sala: ".$this->sala.'<br>';
        echo "Clientes: ".count($this->clientes)."/".$this->capacidadeSala.'<br>';
        echo "Funcionário: ".$this->funcionarioResponsavel->nome;
    }
}
?>