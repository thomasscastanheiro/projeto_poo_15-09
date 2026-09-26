<?php
include_once "./evento.php";
include_once "./palestra.php";
include_once "./oficina.php";
include_once "./agendaEventos.php";

$palestra = new Palestra();
$palestra->CadastrarEvento("Palestra sobre IA", "25/09/2026");
$palestra->DefinirPalestrante("Carlos Silva");
$palestra->AlterarTema("Inteligência Artificial");
$palestra->AdicionarInscrito(30);

$oficina = new Oficina();
$oficina->CadastrarEvento("Oficina de Programação", "25/09/2026");
$oficina->DefinirInstrutor("João");
$oficina->temaPratico = "Programação PHP";
$oficina->AlterarNivel("Iniciante");
$oficina->InformarSoftware("Visual Studio Code");

$agenda = new AgendaEventos();
$agenda->nomeAgenda = "Agenda Escolar 2026";
$agenda->responsavelAgenda = "Coordenação";
$agenda->anoLetivo = "2026";
$agenda->escola = "Escola Estadual";
$agenda->cidade = "Porto Alegre";
$agenda->AdicionarEvento($palestra);
$agenda->AdicionarEvento($oficina);

$palestra->ExibirDadosPalestra();
$oficina->ExibirDadosOficina();
$agenda->ExibirDados();
$agenda->ListarEventos();

?>