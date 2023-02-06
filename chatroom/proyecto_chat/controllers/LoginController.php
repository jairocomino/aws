<?php
if(isset($_GET['logout'])){
    UserRepository::setStatus(0,$_SESSION['user']->getId());
    unset($_SESSION['user']);
    header('location: index.php');
    

    

}

/////////////////////////////////////////////////////////////////////////////////////////////////////////

if(isset($_POST['logeo'])){
if(isset($_POST['user'])&& isset($_POST['password'])){
    $time=time();
    $db=Conectar::conexion();
    $q="SELECT * FROM usuarios WHERE user='".$_POST['user']."'";
    $result=$db->query($q);
    if($datos=$result->fetch_assoc()){
        if($datos['pass']==(md5($_POST['password']))){
            $_SESSION['user']=new User($datos);
            UserRepository::setStatus(1,$_SESSION['user']->getId());
            $d="UPDATE usuarios  set last_login='$time' WHERE user='".$_POST['user']."'";
            var_dump($d);
            $tiempo=$db->query($d);
            header("location: index.php");

        }
    }      
}


}

if(isset($_POST['registro'])){
    $db=Conectar::conexion();
    $q="SELECT * FROM usuarios where user='".$_POST['user']."'";
    $result=$db->query($q);
    if(!$result->fetch_assoc()){
        if($_POST['password']==$_POST['password2']){
            $q2="INSERT INTO usuarios (user,pass,rol) VALUES('".$_POST['user']."','".md5($_POST['password'])."',0)";
            $meter=$db->query($q2);
        }
    }
}
require_once('views/loginView.phtml');
?>