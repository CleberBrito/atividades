<?php
$a = 0;
$total = 0;
$meias = 0;

$a = $_POST["a"];

if ($a>4){
	$a=$a-4;
	$total=($a * 2.80);
	$meias = (1.40 * 4);
 
 	$total = ($meias + $total) ;
	echo "Você gastou com passagens R$" .number_format($total,2,",", "") ;
}
	
else {
	$total=($a * 1.80);
	echo "Você gastou com passagens R$" .number_format($total,2,",", "") ;
}
	
?>	
	
