<?php
class Pessoa{
    public string $nome;
    public int $idade;
    public int $cpf;
    public string $email;
    public int $telefone;
    public string $endereco;
    public string $cidade;
    public string $estado;
    public int $nascimento;
    public string $status = "ativo";

    public function Cadastrar($nome, $idade, $cpf){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
    }

    public function AtualizarEmail($email){
        $this->email = $email;
    }

    public function AtualizarTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function AtualizarEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function AlterarStatus(){
        if ($this->status = "ativo") {
            $this->status = "inativo";
        } else {
            $this->status = "ativo";
        }
    }

    public function ExibirDados(){
        echo '<pre>Nome: '.$this->nome.'; Idade: '.$this->idade.'; Status: '.$this->status;
    }
}
?>