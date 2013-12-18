<?php

include "../lib/validaData.php";

$dataInicial = 0;
$dataFinal = 0;

$dataInicial = $_POST["a"];  
$dataFinal = $_POST["b"];

$dataSeparada = explode("/",$dataInicial);
$dataSeparada1 = explode("/",$dataFinal);

$dataInicialCerta = validaData($dataSeparada[0],$dataSeparada[1],$dataSeparada[2]);
if (!$dataInicialCerta){
	echo " (erros na data Inicial)";
}
$dataFinalCerta = validaData($dataSeparada1[0],$dataSeparada1[1],$dataSeparada1[2]);
if (!$dataFinalCerta){
	echo " (erros na data Final)";
}


date_default_timezone_set("Brazil/East");

$dataAtual = date("d-m-Y");
$dataInicial = str_replace("/", "-", $_POST["a"]);
$dataFinal = str_replace ("/", "-", $_POST ["b"]);

$dataAtual = strtotime($dataAtual);
$dataInicial = strtotime($dataInicial);
$dataFinal = strtotime ($dataFinal);

if ($dataAtual >= $dataInicial and $dataAtual <= $dataFinal){
	echo "dia bom";
}

else {
	echo "dia ruim";
}
?>
