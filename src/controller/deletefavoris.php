<?php
	include("../bdd/config.php");
	include("../model/gerefavoris.php");

	$id_manga=$_POST['idmanga'];
	$url = substr_replace(JURI::root(),'',-1) . $_SERVER['REQUEST_URI'];
	if (isset($_COOKIE['user'])){
		$pseudo=$_COOKIE['user'];
		delete_fav($id_manga,$pseudo);
		header('Location: '.$url);
	}
	elseif(!isset($_COOKIE['user'])){
		header('Location: http://polymangas-igmangas.rhcloud.com/src/vue/signin.php');
	}
?>