<?php
    require_once "linhasonibusM";
        class LinhasonibusC{
            private $infoonibus;
            function __construct(){
                $infoonibus = [];
                for ($i=0; $i < 10 ; $i++) { 
                    $infoonibus[$i] = new LinhasonibusM();
                }
                
                $infoonibus[0]->setNumOnibus("051");
                $infoonibus[1]->setNumOnibus("101");
                $infoonibus[2]->setNumOnibus("092");
                $infoonibus[3]->setNumOnibus("711");
                $infoonibus[4]->setNumOnibus("070");
                $infoonibus[5]->setNumOnibus("706");
                $infoonibus[6]->setNumOnibus("055");
                $infoonibus[7]->setNumOnibus("016");
                $infoonibus[8]->setNumOnibus("366");
                $infoonibus[9]->setNumOnibus("025");
    
            }
        }
    ?>