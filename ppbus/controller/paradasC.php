<?php
    require_once "model/paradasM.php";
        class LinhasonibusC{
            private $infoonibus;
            function __construct(){
                $this->infoonibus = [];
                for ($i=0; $i < 10 ; $i++) { 
                    $this->infoonibus[$i] = new LinhasonibusM();
                }
                
                $this->infoonibus[0]->setNumOnibus("101");
                $this->infoonibus[1]->setNumOnibus("092");
                $this->infoonibus[2]->setNumOnibus("051");
                $this->infoonibus[3]->setNumOnibus("711");
                $this->infoonibus[4]->setNumOnibus("070");
                $this->infoonibus[5]->setNumOnibus("706");
                $this->infoonibus[6]->setNumOnibus("055");
                $this->infoonibus[7]->setNumOnibus("016");
                $this->infoonibus[8]->setNumOnibus("366");
                $this->infoonibus[9]->setNumOnibus("025");

                $this->infoonibus[0]->setNomeOnibus("Beira Rio");
                $this->infoonibus[1]->setNomeOnibus("Antônio Bezerra");
                $this->infoonibus[2]->setNomeOnibus("Grande Circular I");
                $this->infoonibus[3]->setNomeOnibus("Barra do Ceará");
                $this->infoonibus[4]->setNomeOnibus("Cuca Barra/Parangaba");
                $this->infoonibus[5]->setNomeOnibus("Barra do Ceará/Cais do Porto");
                $this->infoonibus[6]->setNomeOnibus("Corujão/ Grande Circular I");
                $this->infoonibus[7]->setNomeOnibus("Cuca Barra/Papicu");
                $this->infoonibus[8]->setNomeOnibus("Cumbuco/Beira Mar(Jardineira)");
                $this->infoonibus[9]->setNomeOnibus("Icaraí/Fortaleza/Via Barra do Ceará");
    
            }
            public function getOnibus($linha){
                foreach($this->infoonibus as $i){
                    
                    if($i->getNumOnibus() == $linha){
                        return $i;
                    }
                }
                return false;
            }


        }
    ?>