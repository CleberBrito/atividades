<html>
    <head>
        <title>Editar</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>    
        <form action="editar.php" method="post">
            <?php
                require_once("campos.php");
            ?>
            <br/>
            <label>Numero:</label>
            <input type="text" name="id"/>
            <input type="submit" value="editar"/>
            
        </form>
    </body>
</html>

    <?php

    session_start();
    if(isset($_SESSION["cadastros"])) {
        $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $id => $produto) {
            if ($produto != null) {
              echo "[$id] =>" . $produto["nome"] .  "<br />"; 
                
            }
            
        }
    }
    else {
        echo "Nao existe pessoas cadastradas";
    }
?>
