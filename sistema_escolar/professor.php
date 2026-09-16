<?php
include_once "./sistema_escolar/pessoa.php";
class Professor() extends Pessoa{
    public int $registro;
    public string $disciplina;
    public int $cargaHoraria;
    public int $salario;
    public string $formacao;
    public string $especialidade;
    public array $turmas = [''];
    
}
?>