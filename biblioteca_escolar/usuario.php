<?php

class UsuarioBiblioteca{
    public string $nome;
    public int $cpf;
    public string $email;
    public int $telefone;
    public int $matricula;
    public string $endereco;
    public string $dataCadastro;
    public string $tipoUsuario;
    public int $limiteEmprestimos;
    public int $emprestimosAtuais;

    public function CadastrarUsuario($nome, $cpf){
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function EmprestarItem(){
        if($this->emprestimosAtuais < $this->limiteEmprestimos){
            $this->emprestimosAtuais = $this->emprestimosAtuais + 1;
        }
    }

    public function DevolverItem(){
        if($this->emprestimosAtuais > 0){
            $this->emprestimosAtuais = $this->emprestimosAtuais - 1;
        }
    }

    public function AlterarEmail($email){
        $this->email = $email;
    }

    public function AlterarTelefone($telefone){
        $this->telefone = $telefone;
    }

      public function ExibirDados(){
        echo "<pre>";
        echo "Nome: ".$this->nome;
        echo "CPF: ".$this->cpf;
        echo "Email: ".$this->email;
        echo "Telefone: ".$this->telefone;
        echo "Matrícula: ".$this->matricula;
        echo "Empréstimos atuais: ".$this->emprestimosAtuais;
        echo "</pre>";
    }
