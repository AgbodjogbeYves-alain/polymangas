<?php
	require("../bdd/config.php");
  	require("../model/affichemangas.php");
  	$idmanga = $_POST['idmanga3'];
  	$result=delete_manga($idmanga);
  	if ($result==0){
        header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/affichemangas.php');
      }
?>