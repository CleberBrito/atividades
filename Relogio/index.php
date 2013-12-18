<?php
date_default_timezone_set("brazil/East");
echo  '<meta http-equiv="refresh" content="60">';
$dataAtual = getdate();

$dia = $dataAtual["mday"];
$mes = $dataAtual["mon"];
$ano = $dataAtual["year"];
$horas = $dataAtual["hours"]-1;
$minutos = $dataAtual["minutes"];
$diaDaSemana = $dataAtual["wday"];

switch ($diaDaSemana){
	case 0:
		echo "Domingo";
			break;
	case 1:
		echo "Segunda";
			break;
	case 2:
		echo "Terça";
			break;
	case 3:
		echo "Quarta";
			break;
	case 4:
		echo "Quinta";
			break;
	case 5:
		echo "Sexta";
			break;
	case 6:
		echo "Sabado";
			break;
}
echo "<br/>";
echo "$dia/$mes/$ano";
echo "<br/>";
$horas = str_pad($horas,2,"0",STR_PAD_LEFT);
$minutos = str_pad($minutos,2,"0",STR_PAD_RIGHT);
echo "$horas:$minutos";


					
?>
