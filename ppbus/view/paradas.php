<?php
    require_once "../controller/paradasC.php";
    $controle = new LinhasonibusC();
    $onibus = $controle->getOnibus($_GET["linha"]);
    

?>

    <h1> Aqui estão todas as paradas do <?php echo $onibus->getNomeOnibus(); ?>!</h1> 

    <img src="paradasimgs/<?php echo $onibus->getNumOnibus(); ?>.jpg" alt="<?php echo $onibus->getNomeOnibus();?>">
