<?php
	
	function get_all_mangas(){
		global $bdd;
		$req = $bdd->prepare('SELECT * FROM MANGA ORDER BY TITRE_MANGA');
		$req->execute();
		$montab = $req -> fetchAll(PDO::FETCH_ASSOC);
		return $montab;
	}

	function get_these_mangas($titre){
		global $bdd;
		$req = $bdd->prepare('SELECT * FROM MANGA WHERE TITRE_MANGA LIKE "%'.$titre.'%" ORDER BY TITRE_MANGA');
		$req->execute();
		$thesemanga = $req -> fetchAll();
		return $thesemanga;
	}

	function get_this_manga($idmanga){
		global $bdd;
		$req = $bdd->prepare('SELECT * FROM MANGA WHERE ID_MANGA="'.$idmanga.'"');
		$req->execute();
		$thismanga = $req -> fetch();
		return $thismanga;
	}
?>
