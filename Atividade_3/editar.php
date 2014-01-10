
<link rel="stylesheet" type="text/css" href="style.css"/>
<?php

    require_once("menu.php");
    
    session_start();
    $id = $_REQUEST["id"];
    $nomeNovo = $_REQUEST["nome"];
    $aceito = false;
    if(isset($_REQUEST["aceito"])){
        $aceito = true;
    }
    $opcao = $_REQUEST["opcao"];
    $selecionar = $_REQUEST["selecionar"];
    $texto = $_REQUEST["texto"];
    
    
    if(!isset($_SESSION["cadastros"])) {
      echo "Nao existe cadastros para edicao";
    }
    else {
        $cadastros =& $_SESSION["cadastros"];
        
        $produto = array ("nome" => $nomeNovo,  "aceito" => $aceito, "opcao" => $opcao,
                         "selecionar" => $selecionar, "texto" => $texto);
        
        $cadastros[$id] = $produto;
    }

    
    echo "Edicao efeituado com sucesso";
?>
