<?php
class User{
        private $id;
        private $name;
        private $roll;
        private $status;
      
        public function __construct ($datos){
            $this->id = $datos['id'];
            $this->name = $datos['user'];
            $this->roll = $datos['rol'];
            $this->status = $datos['status'];
            
        }
    
        public function getId(){
            return $this->id;
        }
        
        public function getName(){
            return $this->name;
        }
        public function getRol(){
            return $this->roll;
        }
        public function getStatus(){
            return $this->status;
        }
    
      
    } 

?>