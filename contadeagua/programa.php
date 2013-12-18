<?php
$a = 0;

$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];
$media = 0;
$previsao = 0;

$media = ($a+$b+$c)/3;
$previsao = ($media/2.50)*3.50;
echo $previsao;
?>
