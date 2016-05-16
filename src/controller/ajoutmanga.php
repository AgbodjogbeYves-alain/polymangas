<?php
  require("../bd/config.php");
  require("../model/affichemangas.php");

  if(!isset($_COOKIE['user']) OR !isset($_COOKIE['token'])){
    header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/signin.php');
  } 
  else{
    if($_COOKIE['tokenuser']!=sha1($_COOKIE['user'])){
      header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/signin.php');
    }
    else{
      if(isset($_POST['titre']) AND isset($_POST['dessinateur']) AND isset($_POST['editeur']) AND isset($_POST['description'])){ 

          $titre = htmlentities($_POST['titre'],ENT_QUOTES);
          $dessinateur = htmlentities($_POST['dessinateur'],ENT_QUOTES);
          $editeur = htmlentities($_POST['editeur'],ENT_QUOTES);
          $resume = htmlentities($_POST['description'],ENT_QUOTES);
          $urlimage = htmlentities($_POST['img'],ENT_QUOTES);
          $result=create_manga($titre,$editeur,$dessinateur,$resume,$urlimage);
          if ($result==0){
            header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/affichemangas.php');
          }
          else{
            header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/ajoutmanga.php');
          }
        }
        else{
            header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/ajoutmanga.php');
        }
      }
?>