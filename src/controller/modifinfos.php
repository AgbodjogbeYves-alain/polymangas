<?php
  require("../bdd/config.php");
  require("../model/info.php");

  if(isset($_POST['password1']) AND isset($_POST['ville1']) AND isset($_POST['numrue1']) AND isset($_POST['libellerue1']) AND isset($_POST['pays1']) AND isset($_POST['email1'])){ 

      $password = htmlentities($_POST['password1'],ENT_QUOTES);
      $ville = htmlentities($_POST['ville1'],ENT_QUOTES);
      $numrue = htmlentities($_POST['numrue1'],ENT_QUOTES);
      $libellerue = htmlentities($_POST['libellerue1'],ENT_QUOTES);
      $pays = htmlentities($_POST['pays1'],ENT_QUOTES);
      $email = htmlentities($_POST['email1'],ENT_QUOTES);
      $result = update_info_user($password,$email,$numrue,$libellerue ,$ville,$pays);
      if ($result==0){
        header('Location: http://polymangas-igmangas.rhcloud.com/src/controller/logout.php');
      }
      else{
        header('Location: http://polymangas-igmangas.rhcloud.com/src/vue/info.php');
      }
    }
    else{
        header('Location: http://polymangas-igmangas.rhcloud.com/src/vue/info.php');
    }
?>
