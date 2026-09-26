<?php
class Pessoa{
    public string $nome;
    public int $idade;
    public string $cpf;
    public string $cidade;
    public string $estado;
    public string $telefone;
    public string $email;
    public string $dataNascimento;
    public string $nacionalidade;
    public string $status;

    public function CadastrarPessoa($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function AtualizarTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function AlterarEmail($email){
        $this->email = $email;
    }

    public function AlterarCidade($cidade){
        $this->cidade = $cidade;
    }

    public function AlterarStatus($status){
        $this->status = $status;
    }

    public function ExibirDados(){
        echo "<pre>";
        echo "Nome: ".$this->nome.'<br>';
        echo "Idade: ".$this->idade.'<br>';
        echo "Cidade: ".$this->cidade;
    }
}
?>