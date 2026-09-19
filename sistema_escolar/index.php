<?php
require_once "Pessoa.php";
require_once "Aluno.php";
require_once "Professor.php";
require_once "Turma.php";

$professor = new Professor();
$professor->nome = "Carlos";
$professor->idade = 35;
$professor->cpf = 11111111111;
$professor->registro = 01;
$professor->disciplina = "Matemática";
$professor->AtualizarSalario(4500);