<?php
	include("../bdd/config.php");
	include("../model/gerefavoris.php");

	$id_manga=$_POST['idmanga'];
	if (isset($_COOKIE['user'])){
		$pseudo=$_COOKIE['user'];
		delete_fav($id_manga,$pseudo);
		header('Location: http://polymangas-igmangas.rhcloud.com/src/vue/gerefavoris.php');
	}
	elseif(!isset($_COOKIE['user'])){
		header('Location: http://polymangas-igmangas.rhcloud.com/src/vue/signin.php');
	}
?>