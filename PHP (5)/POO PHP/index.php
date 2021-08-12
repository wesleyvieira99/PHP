<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'classe.php';
            $c1 =  new Caneta;
            $c1->setModelo("BIC")
            print_r($c1);
        ?>
    </body>
</html>