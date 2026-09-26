<?php
include_once "./pessoa.php";
include_once "./paciente.php";
include_once "./medico.php";
include_once "./consulta.php";

$paciente = new Paciente();
$paciente->CadastrarPessoa("João", "111.111.111-11");
$paciente->idade = 17;
$paciente->email = "joao@email.com";
$paciente->telefone = "99999-9999";
$paciente->numeroProntuario = 1;
$paciente->tipoSanguineo = "O+";
$paciente->convenio = "Particular";
$paciente->InformarSintoma("Dor de cabeça");
$paciente->AdicionarAlergia("Nenhuma");
$paciente->RegistrarMedicamento("Nenhum");

$medico = new Medico();
$medico->CadastrarPessoa("Dr. Carlos", "222.222.222-22");
$medico->CRM = "12345";
$medico->DefinirEspecialidade("Clínico Geral");
$medico->AlterarHorario("08:00 - 17:00");
$medico->AlterarSala("Sala 3");
$medico->AtualizarValorConsulta(200);
$medico->anosExperiencia = 10;

$consulta = new Consulta();
$consulta->codigoConsulta = 1;
$consulta->AgendarConsulta($paciente, $medico);
$consulta->AlterarData("25/09/2026");
$consulta->AlterarHorario("10:00");
$consulta->motivo = "Consulta de rotina";
$consulta->valorConsulta = 200;
$consulta->formaPagamento = "Cartão";
$consulta->RegistrarObservacao("Paciente deve retornar em 30 dias.");

$paciente->ExibirDadosPaciente();
$medico->ExibirDadosMedico();
$consulta->ExibirDadosConsulta();
?>
