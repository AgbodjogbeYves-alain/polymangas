<?php
	include("../bd/config.php");
	include("../model/gerefavoris.php");

	$id_manga=$_POST['idmanga'];
	if (isset($_COOKIE['user'])){
		$pseudo=$_COOKIE['user'];
		delete_fav($id_manga,$pseudo);
		header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/gerefavoris.php');
	}
	elseif(!isset($_COOKIE['user'])){
		header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/signin.php');
	}
?>