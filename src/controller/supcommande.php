<?php
	include("../bd/config.php");
	include("../model/monpanier.php");

	$id_com=$_POST['idcommande'];
	if (isset($_COOKIE['user'])){
		$pseudo=$_COOKIE['user'];
		delete_commandes($id_com,$pseudo);
		header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/monpanier.php');
	}
	elseif(!isset($_COOKIE['user'])){
		header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/signin.php');
	}
?>