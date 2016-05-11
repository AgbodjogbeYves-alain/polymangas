<?php
  require("../bdd/config.php");
  require("../model/info.php");

  if(isset($_POST['password1']) AND isset($_POST['ville1']) AND isset($_POST['numrue1']) AND isset($_POST['libellerue1']) AND isset($_POST['pays1']) AND isset($_POST['email1'])){ 
      $password = mysql_real_escape_string($_POST['password1']);
      $ville = mysql_real_escape_string($_POST['ville1']);
      $numrue = mysql_real_escape_string($_POST['numrue1']);
      $libellerue = mysql_real_escape_string($_POST['libellerue1']);
      $pays = mysql_real_escape_string($_POST['pays1']);
      $email = mysql_real_escape_string($_POST['email1']);
      $result = update_info_user($password,$email,$numrue,$libellerue ,$ville,$pays);
      if ($result==0){
        header('Location: http://polymangas-igmangas.rhcloud.com/src/controller/logout.php');
      }
      else{
        header('Location: http://polymangas-igmangas.rhcloud.com/src/vue/info.php');
      }
    }
?>