<?php
$a = 0;
$b = 0;
$promocaoA = 0;
$promocaoB = 0;
$contagem = 0;

$a = $_POST["a"];
$b = $_POST["b"];

$contagem=3;

while ($contagem<=$a){
	$contagem=$contagem+3;	
	$promocaoB=$promocaoB+1;
}

$contagem=2;
while ($contagem<=$b){
	$contagem=$contagem+2;
	$promocaoA=$promocaoA+1;
							
}
$contagem=5;
while ($contagem <=($a+$b)){
	$promocaoB=$promocaoB+1;
	$contagem=$contagem+5;
		
}
echo "A quantidade de chocolates brancos é:".($promocaoB+$b)."<br/>";
echo "A quantidade de chocolates pretos é:". ($promocaoA+$a)."<br/>";
?>
