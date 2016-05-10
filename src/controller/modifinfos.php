<?php
  require("../bdd/config.php");
  require("../model/info.php");

  if(isset($_POST['password1']) AND isset($_POST['ville1']) AND isset($_POST['numrue1']) AND isset($_POST['libellerue1']) AND isset($_POST['pays1']) AND isset($_POST['email1'])){ 
      $password = htmlspecialchars($_POST['password1']);
      $ville = htmlspecialchars($_POST['ville1']);
      $numrue = htmlspecialchars($_POST['numrue1']);
      $libellerue = htmlspecialchars($_POST['libellerue1']);
      $pays = htmlspecialchars($_POST['pays1']);
      $email = htmlspecialchars($_POST['email1']);
      $result = update_info_user($password,$email,$numrue,$libellerue ,$ville,$pays);
      if ($result==0){
        header('Location: http://polymangas-igmangas.rhcloud.com/src/controller/logout.php');
      }
      else{
        echo "Erreur enregistrement veuillez reessayer";
        sleep(2);
        header('Location: http://polymangas-igmangas.rhcloud.com/src/vue/info.php');
      }
    }
?>