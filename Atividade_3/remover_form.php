<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <title>Remover</title>
        
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>    
        <form action="remover.php" method="post"
            <br/>
            <label>Remover.</label>
            <input type="text" name="id"/>
            <input type="submit" value="Remover"/>
            
        </form>
    </body>
</html>
<?php
    session_start();
    if(isset($_SESSION["cadastros"])) {
        $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $id => $produto) {
            if ($produto != null) {
              echo "[$id] => " . $produto["nome"] .  "<br />"; 
                
            }
            
        }
    }
    else {
        echo "Nao existe pessoas cadastradas";
    }
?>
