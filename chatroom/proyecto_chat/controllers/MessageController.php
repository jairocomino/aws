<?php
   if(isset($_GET['chat'])){
      MessageRepository::addMessage($_SESSION['user']->getId(), $_POST['text'],$_GET['chat']);
      header("location: index.php?chat=".$_GET['chat']);
   }else{
      MessageRepository::addMessage($_SESSION['user']->getId(), $_POST['text'],0);
      header("location: index.php");
   }
   
?>