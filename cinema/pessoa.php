<?php
class Pessoa{
    public string $nome;
    public int $idade;
    public string $cpf;
    public string $email;
    public string $telefone;
    public string $endereco;
    public string $cidade;
    public string $estado;
    public string $dataNascimento;
    public string $status;

    public function CadastrarPessoa($nome, $cpf){
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function AlterarTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function AlterarEmail($email){
        $this->email = $email;
    }

    public function AtualizarEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function AlterarStatus($status){
        $this->status = $status;
    }

    public function ExibirDados(){
        echo "<pre>";
        echo "Nome: ".$this->nome.'<br>';
        echo "CPF: ".$this->cpf.'<br>';
        echo "Status: ".$this->status;
    }
}
?>