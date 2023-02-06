<?php 
    class ChatroomRepository{
        public static function getAllChats(){
            $chats= [];
            $db=Conectar::conexion();
            $result=$db->query ("SELECT * FROM chat");
            while($datos=$result->fetch_assoc()){
               $chats[]=new Chatroom($datos);
            }
            return $chats;
        }

        public static function createNewRoom($nombre){
            $db=Conectar::conexion();
            $q="INSERT INTO `proyecto_chat`.`chat` (`nombre`) VALUES ('".$nombre."')";
            $db->query($q);
        }

        public static function getRoomInfo($id){
            $db=Conectar::conexion();
            $result=$db->query ("SELECT * FROM chat where id=$id");
            if($datos=$result->fetch_assoc()){
                $chatroom = new Chatroom($datos);
            }
            return $chatroom;

        }
    }
?>