<?php 
if(isset($_GET['pm'])){
    $bd=Conectar::conexion();
    $q="SELECT * FROM chatdirecto WHERE (id_user1='".$_SESSION['user']->getId()."' and id_user2='".$_GET['pm']."')||(id_user1='".$_SESSION['user']->getId()."')";
    $result=$db->query($q);
    $messages=[];
    if($datos=$result->fetch_assoc()){
            $v="SELECT * FROM messagesdirectos where id_chat='".$q(id)."' ";
            $datos=$db->query($v);
            while($z=$datos->fetch_assoc()){
                MessageRepository::addMessage($_SESSION['user']->getId(), $_POST['text'],$_GET['chat']);
                header("location: index.php?pm=".$_GET['pm']);
            }
    }else{
        $X="INSERT  IN TO chatdirecto('id','id_user1','id_user2') values ('".$_SESSION['user']->getId()."','".$_GET['pm']."')";
    }
}

require_once("views/roomView.phtml");
?>