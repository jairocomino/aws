<?php
    class Message{
        ///Prppiedades
        private $id;
        private $id_user;
        private $message;
        private $message_date;
        private $message_hour;
        private $chatroom;

        // Constructor
        public function __construct($datos) {
            $this->id= $datos['id'];
            $this->id_user = $datos['id_user'];
            $this->message = $datos['message'];
            $this->message_date = $datos['message_date'];
            $this->message_hour = $datos['message_hora'];
            $this->chatroom = $datos['id_chat'];
        }
        //GETERS

        // debuelve el id del mensaje
        public function getId(){
            return $this->id;
        }

        // debuelve el id del usuario
        public function getId_user(){
            return $this->id_user;
        }

        // debuelve el mensaje
        public function getMessage(){
            return $this->message;
        }

        // debuelve la fecha del mensaje
        public  function getMessage_date(){
            return $this->message_date;
        }

        public function getMessage_hora(){
            return $this->message_hour;
        }

        public function getChatroom(){
            return $this->chatroom;
        }

    }

?>