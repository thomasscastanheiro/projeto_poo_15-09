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
    public string $usuarioAtivo;

    public function CadastrarPessoa($nome, $email){
        $this->nome = $nome;
        $this->email = $email;
    }

    public function AlterarEmail($email){
        $this->email = $email;
    }

    public function AlterarTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function AtualizarEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function AlterarStatus($status){
        $this->usuarioAtivo = $status;
    }

    public function ExibirPerfil(){
        echo "<pre>";
        echo "Nome: ".$this->nome.'<br>';
        echo "Idade: ".$this->idade.'<br>';
        echo "E-mail: ".$this->email.'<br>';
        echo "Telefone: ".$this->telefone.'<br>';
        echo "Cidade: ".$this->cidade.'<br>';
        echo "Status: ".$this->usuarioAtivo;
    }
}
?>
