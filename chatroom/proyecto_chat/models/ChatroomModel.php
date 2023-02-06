<?php 
class Chatroom{
    private $id;
    private $name;

    public function __construct($datos) {
        $this->id = $datos['id'];
        $this->name = $datos['nombre'];
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }
}
?>