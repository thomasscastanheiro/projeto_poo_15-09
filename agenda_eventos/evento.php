<?php
class Evento{
    public string $titulo;
    public int $codigoEvento;
    public string $dataEvento;
    public string $horarioInicio;
    public string $horarioFim;
    public string $local;
    public string $responsavel;
    public string $publicoAlvo;
    public int $quantidadeVagas;
    public string $statusEvento;

    public function CadastrarEvento($titulo, $data){
        $this->titulo = $titulo;
        $this->dataEvento = $data;
    }

    public function AlterarData($data){
        $this->dataEvento = $data;
    }

    public function AlterarHorario($inicio, $fim){
        $this->horarioInicio = $inicio;
        $this->horarioFim = $fim;
    }

    public function AlterarLocal($local){
        $this->local = $local;
    }

    public function AlterarStatus($status){
        $this->statusEvento = $status;
    }

    public function ExibirDados(){
        echo "<pre>";
        echo "Título: ".$this->titulo.'<br>';
        echo "Data: ".$this->dataEvento.'<br>';
        echo "Local: ".$this->local.'<br>';
        echo "Status: ".$this->statusEvento;
    }
}
?>