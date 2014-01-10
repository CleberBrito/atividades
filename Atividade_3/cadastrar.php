<link rel="stylesheet" type="text/css" href="style.css"/>

<?php

    require_once("menu.php");
    
    session_start();
    
    $nome = $_REQUEST["nome"];
    $aceito = false;
    if(isset($_REQUEST["aceito"])){
        $aceito = true;
    }
    $opcao = $_REQUEST["opcao"];
    $selecionar = $_REQUEST["selecionar"];
    $texto = $_REQUEST["texto"];
    
    if(!isset($_SESSION["cadastros"])) {
        $_SESSION["cadastros"] = array();
    }
    $produto = array("nome" => $nome, "aceito" => $aceito, "opcao" => $opcao, "selecionar" => $selecionar,
                     "texto" => $texto);
    
    array_push($_SESSION["cadastros"], $produto);
    
    echo"Produto Cadastrado";
        
 ?>       
