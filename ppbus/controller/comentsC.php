<?php


require_once "..model/comentsC.php";

    class ComentsC{
        private $listaemails;

        function __construct(){
            $this->listaemails = [];
            for ($i=0; $i < 8 ; $i++) { 
                $this->infoonibus[$i] = new LinhasonibusM();
            }
        }    
    }
?>