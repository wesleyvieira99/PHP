<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - Visibilidade POO </title>
    </head>
    <body>
    <?php
            require_once 'Caneta.php';
            $c1 = new Caneta;
            $c1->modelo = "BIC Cristal";
            var_dump($c1);
        ?>
    </body>
</html>