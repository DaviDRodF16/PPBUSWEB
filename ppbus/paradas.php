<?php
    require_once "controller/paradasC.php";
    $controle = new LinhasonibusC();
    $onibus = $controle->getOnibus($_GET["linha"]);
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPBUS - Paradas</title>
</head>
<body>
    <h1> AQUI ESTÃO AS PARADAS DO <?php echo $onibus->getNomeOnibus(); ?></h1> 

    <img src="linhas/<?php echo $onibus->getNumOnibus(); ?>.jpg" alt="">
</body>
</html>