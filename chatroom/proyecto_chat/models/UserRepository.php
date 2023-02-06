<?php
class UserRepository{
 public static function getUserByID($idUSER){
    $db=Conectar::conexion();
    $result=$db->query ("SELECT * FROM usuarios where id=$idUSER");
    if($datos=$result->fetch_assoc()){
        $nombres=new User($datos);
    }
    return $nombres;
}
public static function getUsers(){
$users= [];
   $db=Conectar::conexion();
   $result=$db->query ("SELECT * FROM usuarios" );
   while($datos=$result->fetch_assoc()){
       $users[]=new User($datos);
   }
   return $users;
}

public static function setRoll($id ,$numero ){
    $db=Conectar::conexion();
    $result=$db->query ("SELECT * FROM usuarios where ID=$id");
     if($datos=$result->fetch_assoc()){
        $r=$db->query (" UPDATE  usuarios SET rol=$numero where id=$id");
        echo " UPDATE  usuarios SET rol=$numero where id=$id";
    }
}

public static function setStatus($status, $id ){
    $db=Conectar::conexion();
    $q="UPDATE `proyecto_chat`.`usuarios` SET `status` = $status WHERE `id` = $id";
    $db->query($q);
}

}
?>