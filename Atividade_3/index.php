    <link rel="stylesheet" type="text/css" href="style.css"/>

<?php


    require_once("menu.php");
    
    session_start ();
    
    if(isset($_SESSION["cadastros"])){
        $cadastros = $_SESSION["cadastros"];
    
    
        echo "<dl>";
        
        foreach($cadastros as $produto){
            if($produto !=null){
                $nome = $produto["nome"];
                $aceito = $produto["aceito"];
                $opcao = $produto["opcao"];
                $selecionar = $produto["selecionar"];
                $texto = $produto["texto"];
                
                echo "<dt class='$opcao'>" . $produto["nome"] . "</dt>";
                echo "<dd>Opção: " . $opcao . "</dd>";
                echo "<dd>Entrega em: " . $selecionar . "</dd>";
                echo "<dd>Texto: " . $texto . "</dd>";
                echo"<dd>Aceitou o Contrato: ";
                if($aceito){
                    echo "Sim";
                }
                else{
                    echo "Não";
                }
                echo "</dd>";

            }
        }
                echo"</dt>";
        
    }
            else{
                echo"Produto nao cadastrado";
            }
