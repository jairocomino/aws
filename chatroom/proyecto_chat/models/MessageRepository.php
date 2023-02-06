<?php
class MessageRepository{
    public static function getMessages($idroom){
        $messages= [];
       $db=Conectar::conexion();
       $result=$db->query ("SELECT * FROM messages WHERE id_chat=$idroom");
       while($datos=$result->fetch_assoc()){
       $messages[]=new Message($datos);
       }
       return $messages;
   }
   public static function getMessages_id_user($id_user){
    $messages_id_user=[];
    $db=Conectar::conexion();
    $result=$db->query ("SELECT * FROM messages where id = '$id_user '" );
    while($datos=$result->fetch_assoc()){
    $messages_id_user[]=new Message($datos);
    }
    return $messages_id_user;
}

    public static function addMessage($iduser, $mensaje, $idroom){
        $fecha = date('d/m/Y');
        $hora = date('H:i');
        $db=Conectar::conexion();
        $q="INSERT INTO `proyecto_chat`.`messages` (`id_user`,`message`,`message_date`,`message_hora`,`id_chat`) VALUES (".$iduser.",'".$mensaje."','".$fecha."','".$hora."',".$idroom.")";
        $db->query($q);
   }

   public static function getPrivateMessages($id){
    $messages=[];
    $db=Conectar::conexion();
    $q="SELECT * FROM messagesdirectos WHERE id_chat=$id";
    $result=$db->query($q);
    while($datos=$result->fetch_assoc()){
        $messages[]=new PM($datos);
    }
    return $messages;
   }
}
?>