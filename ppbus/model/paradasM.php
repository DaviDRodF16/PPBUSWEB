<?php

    class LinhasonibusM{
        
        private $numonibus;
    
       
        public function getNumOnibus(){
            return $this->$numonibus;
        } 
        public function setNumOnibus($numob){
            $this->numonibus = $numob;
        }
    }
    
?>