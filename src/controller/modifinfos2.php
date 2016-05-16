
<?php
  require("../bd/config.php");
  require("../model/info.php");

  if(isset($_POST['nom1']) AND isset($_POST['prenom1']) AND isset($_POST['pseudo1']) AND isset($_POST['password1']) AND isset($_POST['ville1']) AND isset($_POST['numrue1']) AND isset($_POST['libellerue1']) AND isset($_POST['pays1']) AND isset($_POST['email1'])){ 
      $nom = htmlentities($_POST['nom1'],ENT_QUOTES);
      $prenom = htmlentities($_POST['prenom1'],ENT_QUOTES);
      $pseudo = htmlentities($_POST['pseudo1'],ENT_QUOTES);
      $password = htmlentities($_POST['password1'],ENT_QUOTES);
      $ville = htmlentities($_POST['ville1'],ENT_QUOTES);
      $numrue = htmlentities($_POST['numrue1'],ENT_QUOTES);
      $libellerue = htmlentities($_POST['libellerue1'],ENT_QUOTES);
      $pays = htmlentities($_POST['pays1'],ENT_QUOTES);
      $email = htmlentities($_POST['email1'],ENT_QUOTES);
      $result = update_info_user_admin($pseudo,$nom,$prenom,$password,$email,$numrue,$libellerue ,$ville,$pays);
      if ($result==0){
        header('Location: https://polymangas-igmangas.rhcloud.com/src/controller/logout.php');
      }
      else{
        header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/infoadmin.php');
      }

    }
    else{
      header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/infoadmin.php');
    }
?>