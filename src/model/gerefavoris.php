<?php


	function get_users_fav($pseudo){
		global $bd;
		$req1 = $bd->prepare('SELECT ID_MANGA FROM FAVORIS WHERE PSEUDO="'.$pseudo.'"');
		$req1->execute();
		$favoris = $req1 -> fetchAll();
		return $favoris;
	}

	function set_fav($id_manga,$pseudo){
		global $bd;
		$req2 = $bd->prepare('INSERT INTO FAVORIS(ID_MANGA, PSEUDO) VALUES(?,?)');
		$req2->execute(array ($id_manga,$pseudo));
		return 0;
	}


	function delete_fav($id_manga,$pseudo){
		global $bd;
		$req2 = $bd->prepare('DELETE FROM FAVORIS WHERE ID_MANGA= ? AND PSEUDO= ?');
		$req2->execute(array ($id_manga,$pseudo));
		return 0;
	}


?>