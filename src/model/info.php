<?php
	
	function get_info_user(){
		global $bdd;
		$pseudo = $_COOKIE['user'];
		$req = $bdd->prepare('SELECT * FROM USERS WHERE PSEUDO = ?');
		$req->execute(array ($pseudo));
		$montab = $req -> fetch();
		return $montab;
	}

	function update_info_user($password,$email,$numrue,$libellerue ,$ville,$pays){
		global $bdd;
		$pseudo = $_COOKIE['user'];
		$req = $bdd->prepare('UPDATE USERS SET PASSWORD=?, EMAIL=?, NUM_RUE=? ,LIBELLE_RUE=?, VILLE=?,PAYS=? WHERE PSEUDO=?');
		$req -> execute(array($password,$email,$numrue,$libellerue ,$ville,$pays,$pseudo));
		return 0;
	}

	function get_droit_user(){
		global $bdd;
		$pseudo = $_COOKIE['user'];
		$req = $bdd->prepare('SELECT ISADMIN FROM USERS WHERE PSEUDO = ?');
		$req->execute(array ($pseudo));
		$droit = $req -> fetch();
		return $droit;
	}

?>