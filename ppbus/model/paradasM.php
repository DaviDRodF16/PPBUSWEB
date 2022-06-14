<?php

    class LinhasonibusM{
        
        private $numonibus;
        private $nomeonibus;
       
        public function getNumOnibus(){
            return $this->numonibus;
        } 
        public function setNumOnibus($numob){
            $this->numonibus = $numob;
        }
        public function getNomeOnibus(){
            return $this->nomeonibus;
        } 
        public function setNomeOnibus($nomob){
            $this->nomeonibus = $nomob;
        }
    }
    
?>