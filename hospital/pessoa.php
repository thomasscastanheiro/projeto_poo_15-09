<?php
class Pessoa{
    public string $nome;
    public int $idade;
    public string $CPF;
    public string $email;
    public string $telefone;
    public string $endereco;
    public string $cidade;
    public string $estado;
    public string $dataNascimento;
    public string $sexo;

    public function CadastrarPessoa($nome, $CPF){
        $this->nome = $nome;
        $this->CPF = $CPF;
    }

    public function AtualizarContato($email, $telefone){
        $this->email = $email;
        $this->telefone = $telefone;
    }

    public function AlterarEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function AlterarCidade($cidade){
        $this->cidade = $cidade;
    }

    public function ValidarCPF($CPF){
        if($CPF != ""){
            return "CPF informado";
        }
        return "CPF não informado";
    }

    public function ExibirDados(){
        echo "<pre>";
        echo "Nome: ".$this->nome.'<br>';
        echo "Idade: ".$this->idade.'<br>';
        echo "CPF: ".$this->CPF.'<br>';
        echo "E-mail: ".$this->email.'<br>';
        echo "Telefone: ".$this->telefone.'<br>';
        echo "Cidade: ".$this->cidade;
    }
}
?>
