<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <title>Cadastar</title>
        
    </head>
    <body>
        <?php
            require_once("menu.php")
            ?>
            <br/>
        <form action="cadastrar.php" method="post">
            <?php      
            require_once("campos.php");
            ?>
            <br/>
            
             <input type="submit" name="Enviar"/>
        </form>
    </body>
</html>
