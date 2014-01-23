<?php
 function validarPessoa($nome,$cpf,$nascimento,$sexo,$estado,$telefone,$observacoes){
    
    $validarCampos = true;
    if(!preg_match("/^[a-zA-ZãÃáÁàÀêÊéÉèÈíÍìÌôÔõÕóÓòÒúÚùÙûÛçÇ\s]+$/",$nome)){
        echo"<b>Nome</b> incorreto<br/>";
        $validarCampos = false;
    }
 
    if(empty(trim($cpf)) or (strlen($cpf)!= 11 and strlen($cpf) != 14)){
        echo "por favor digite o <b>CPF</b> correto<br/>";
        $validarCampos = false;
    }
        else if(!preg_match("/^\d{3}\\.\d{3}\\.\d{3}\\-\d{2}$/",$cpf)){
            echo "Formato do <b>CPF</b> invalido<br/>";
            $validarCampos = false;
        }
         

    
    if(empty(trim($nascimento))){
      echo "Por favor digite a <b>data</b><br/>";
      $validarCampos = false;
    }
        else if(!preg_match("/^((0[1-9])|([1-2][0-9])|(3[0-1]))\\/((0[1-9])|(1[0-2]))\\/\d{4}$/", $nascimento)){
            echo "Formato de <b>data</b> invalido<br/>";
            $validarCampos = false;
        }
        else{
            $pedacos = explode('/', $nascimento);
            $dia = $pedacos[0];
            $mes = $pedacos[1];
            $ano = $pedacos[2];    
        
            if(!checkdate($mes, $dia, $ano)){
                echo "Data inválida";
                $validarCampos = false;                           
            }
            else {
                $dataYmd = $ano.$mes.$dia;
                $dataAtual = date('Ymd');
                            
                if($dataAtual < $dataYmd){
                    echo "É no futuro" ;
                    $validarCampos = false;
                }
            }
        }           
    if(!isset($sexo)){
        $validarCampos = false;
        echo "Selecione o <b>sexo</b><br/>";
    }

    if($estado == -1){
        echo "Selecione um <b>Estado</b><br/>";
        $validarCampos = false;
   }
   if(empty(trim($telefone)) or (!preg_match("/^\d{3}\s\d{4}\\-\d{4}$/",$telefone))){
        echo "por favor digite o <b>Telefone</b> correto <br/>";
        $validarCampos = false;
    }
        
      
    if(empty(trim($observacoes))){
        echo "por favor digite o <b>texto</b><br/>";
        $validarCampos = false;
    }
        else if(!preg_match("/^[a-zA-ZãÃáÁàÀêÊéÉèÈíÍìÌôÔõÕóÓòÒúÚùÙûÛçÇ\s\\.\\,]+$/",$observacoes)){
        echo "formato de texto incorreto";
        $validarCampos = false;
        }
    
    return $validarCampos;
 }
    
 
