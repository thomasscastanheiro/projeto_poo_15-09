<?php
require_once "pessoa.php";
require_once "aluno.php";
require_once "professor.php";
require_once "turma.php";

$professor = new Professor();
$professor->nome = "Carlos";
$professor->idade = 35;
$professor->cpf = 11111111111;
$professor->cargaHoraria = 40;
$professor->disciplina = "Matemática";
$professor->AtualizarSalario(4500);

$aluno1 = new Aluno();
$aluno1->nome = "João";
$aluno1->idade = 16;
$aluno1->cpf = 2222222222;
$aluno1->matricula = 2342;
$aluno1->turma = 201;

$aluno2 = new Aluno();
$aluno2->nome = "Lucas";
$aluno2->idade = 16;
$aluno2->cpf = 3333333333;
$aluno2->matricula = 1244;
$aluno2->turma = 201;

$aluno3 = new Aluno();
$aluno3->nome = "Thomas";
$aluno3->idade = 16;
$aluno3->cpf = 4444444444;
$aluno3->matricula = 124553;
$aluno3->turma = 201;

$turma = new Turma();
$turma->codigoTurma = 81;
$turma->anoLetivo = 8;
$turma->sala = 21;
$turma->definirProfessor($professor);
$turma->adicionarAluno($aluno1);
$turma->adicionarAluno($aluno2);
$turma->adicionarAluno($aluno3);

$aluno1->Nota1(8);
$aluno1->Nota2(7);
$aluno1->Nota3(9);
$aluno1->Media();
$aluno1->AlterarSituacao("Aprovado");

$turma->exibirDados();
$professor->exibirDados();
$aluno1->exibirDados();
?>