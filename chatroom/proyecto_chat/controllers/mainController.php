<?php

//cargamos el modelo

require_once('models/UserModel.php');
require_once('models/UserRepository.php');
require_once('models/MessageRepository.php');
require_once('models/MessageModel.php');
require_once('models/ChatroomRepository.php');
require_once('models/ChatroomModel.php');
require_once('models/PrivateChat.php');
require_once('models/PrivateMessageModel.php');


//iniciamos sesion

session_start();

$users=UserRepository::getUsers();

$chats = ChatroomRepository::getAllChats();

//actualizador del tiempo de sesion

if(!isset($_SESSION['user'])){
    $datos['id']=0;
    $datos['user']="";
    $datos['rol']=0;
    $datos['status']=1;
    $_SESSION['user'] = new User($datos);

}
$time=time();
$db=Conectar::conexion();
$d="UPDATE usuarios set last_login='$time' WHERE id='".$_SESSION['user']->getId()."'";
  $tiempo=$db->query($d);


  $usuarios = $db->query('select * from usuarios');
  $enlinea=[];
  while($datos=$usuarios->fetch_assoc()){
    $tiempouser = ($time - $datos['last_login']);
    if($tiempouser<120){
        $enlinea[]= $datos['user'];
    }else{

    }
}

 //logeo
if(isset($_GET['login'])) {
    require_once('controllers/LoginController.php');
    die();
}
//añade nuevo chatroom
if(isset($_GET['añadir'])){
    ChatroomRepository::createNewRoom($_POST['chatname']);
    header("location: index.php");
    die();
}

if(isset($_GET['pm'])){
    
    require_once("controllers/PrivateMessageController.php");
    die();
}

//enviar mensaje
if(isset($_POST['send'])){
    require('controllers/MessageController.php');
    die();
}

// carga el array de los mensajes
if(isset($_GET['chat'])){
    $messages=MessageRepository::getMessages($_GET['chat']);
    require_once("views/roomView.phtml");
    die();
}else{
    $messages=MessageRepository::getMessages(0);
}

// cargar la vista
require_once("views/mainView.phtml");

?>