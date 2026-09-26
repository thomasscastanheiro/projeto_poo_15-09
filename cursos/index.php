<?php

include_once "./pessoa.php";
include_once "./alunoOnline.php";
include_once "./instrutor.php";
include_once "./cursoOnline.php";

$instrutor = new Instrutor();
$instrutor->CadastrarPessoa("Carlos", "carlos@email.com");
$instrutor->codigoInstrutor = 1;
$instrutor->areaAtuacao = "Programação";
$instrutor->formacao = "Análise de Sistemas";
$instrutor->anosExperiencia = 5;

$curso = new CursoOnline();
$curso->titulo = "PHP do Zero";
$curso->codigoCurso = 1;
$curso->descricao = "Curso de PHP";
$curso->cargaHoraria = 40;
$curso->nivel = "Iniciante";
$curso->statusCurso = "Ativo";
$instrutor->CriarCurso($curso);

$aluno1 = new AlunoOnline();
$aluno1->CadastrarPessoa("João", "joao@email.com");
$aluno1->matricula = 1;
$aluno1->nivelConhecimento = "Iniciante";
$aluno1->InscreverEmCurso($curso);
$aluno1->AtualizarProgresso(50);
$aluno1->RegistrarNota(9);

$aluno2 = new AlunoOnline();
$aluno2->CadastrarPessoa("Pedro", "pedro@email.com");
$aluno2->matricula = 2;
$aluno2->nivelConhecimento = "Iniciante";
$aluno2->InscreverEmCurso($curso);
$aluno2->AtualizarProgresso(30);
$aluno2->RegistrarNota(8);

$curso->AdicionarAula("Introdução ao PHP");
$curso->AdicionarAula("Classes e Objetos");

$instrutor->ExibirDadosInstrutor();

$aluno1->ExibirDadosAluno();
$aluno2->ExibirDadosAluno();
$curso->ExibirDadosCurso();
$curso->ListarAlunos();
?>
