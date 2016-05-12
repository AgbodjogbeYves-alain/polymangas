<?php
	include("../bdd/config.php");
	include("../model/monpanier.php");

	$id_volume=$_POST['idvolume'];
	if (isset($_COOKIE['user'])){
		$date = date("d-m-Y");
		$pseudo=$_COOKIE['user'];
		create_com($id_volume,$pseudo,$date);
		header('Location: http://polymangas-igmangas.rhcloud.com/src/vue/affichemangas.php');
	}
	elseif(!isset($_COOKIE['user'])){
		header('Location: http://polymangas-igmangas.rhcloud.com/src/vue/signin.php');
	}
?>