<?php

include_once "./itemBiblioteca.php";
include_once "./livro.php";
include_once "./revista.php";
include_once "./usuario.php";

$livro1 = new Livro();
$livro1->CadastrarLivro("Dom Casmurro", "Machado de Assis");
$livro1->codigo = "001";
$livro1->categoria = "Romance";
$livro1->anoPublicacao = 1899;
$livro1->editora = "Editora Ametista";
$livro1->AlterarQuantidade(2);
$livro1->status = "Disponível";


$livro2 = new Livro();
$livro2->CadastrarLivro("Inter", "Thomas");
$livro2->codigo = "002";
$livro2->categoria = "Romance";
$livro2->anoPublicacao = 1909;
$livro2->editora = "Editora Mundial";
$livro2->AlterarQuantidade(1);
$livro2->status = "Disponível";


$revista = new Revista();
$revista->CadastrarRevista("Superinteressante", 150);
$revista->codigo = "REV001";
$revista->categoria = "Ciência";
$revista->mesPublicacao = "Setembro";
$revista->periodicidade = "Mensal";
$revista->AlterarQuantidade(1);
$revista->status = "Disponível";

$usuario = new UsuarioBiblioteca();
$usuario->CadastrarUsuario("João", 11111111111);
$usuario->email = "joao@email.com";
$usuario->telefone = 999999999;
$usuario->matricula = 1;
$usuario->tipoUsuario = "Aluno";
$usuario->limiteEmprestimos = 3;
$usuario->emprestimosAtuais = 0;

$livro1->Emprestar();
$usuario->EmprestarItem();

$livro2->Emprestar();
$usuario->EmprestarItem();

$livro1->ExibirDados();
$livro2->ExibirDados();
$revista->ExibirRevista();

$usuario->ExibirDados();

$livro1->Devolver();
$usuario->DevolverItem();

$livro1->ExibirDados();
?>