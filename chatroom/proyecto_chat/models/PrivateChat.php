<?php
class PrivateChat{
    private $id;
    private $id_user1;
    private $id_user2;
    public function __construct($datos) {
        $this->id = $datos['id'];
        $this->id_user1 = $datos['id_user1'];
        $this->id_user2 = $datos['id_user2'];
    }

    public function getID(){
        return $this->id;
    }

    public function getUser1(){
        return $this->id_user1;
    }

    public function getUser2(){
        return $this->id_user2;
    }
}
?>