<?php
	include("../bdd/config.php");
	include("../model/afficheusers.php");

	$pseudo=$_POST['pseudo'];
	if (isset($_COOKIE['user']) AND $_COOKIE['auth']==0){
		delete_user($pseudo);
		header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/afficheusers.php');
	}
	else{
		header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/signin.php');
	}
?>