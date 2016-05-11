<?php


	function get_users_fav($pseudo){
		global $bdd;
		$req1 = $bdd->prepare("SELECT ID_MANGA FROM FAVORIS WHERE PSEUDO= ?");
		$req1->execute(array($pseudo));
		$favoris = $req1 -> fetchAll();
		return $favoris;
	}

	function set_fav($id_manga,$pseudo){
		global $bdd;
		$req2 = $bdd->prepare('INSERT INTO FAVORIS(ID_MANGA, PSEUDO) VALUES(?,?)');
		$req2->execute(array ($id_manga,$pseudo));
		return 0;
	}





?>