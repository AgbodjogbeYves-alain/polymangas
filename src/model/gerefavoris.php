<?php


	function get_all_fav(){
		global $bdd;
		$req = $bdd->prepare('SELECT MANGA.* FROM MANGA,FAVORIS WHERE MANGAS.ID_MANGA = FAVORIS.ID_MANGA AND ID_USERS='.$_COOKIE['USER']);
		$req->execute();
		$montab = $req -> fetchAll(PDO::FETCH_ASSOC);
		return $montab;
	}

	function set_fav($id_manga,$pseudo){
		global $bdd;
		$req = $bdd->prepare('INSERT INTO FAVORIS(ID_MANGA, ID_USER) VALUES(?,?)');
		$req->execute(array ($id_manga,$pseudo));
		return 0;
	}

	function get_id_manga(){
		



?>