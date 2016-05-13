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

	function get_this_manga_from_vol($idvolume){
		global $bdd;
		$req = $bdd->prepare('SELECT M.* FROM MANGA M,VOLUME_MANGA V WHERE M.ID_MANGA=V.ID_MANGA AND V.ID_VOLUME="'.$idvolume.'"');
		$req->execute();
		$thismanga = $req -> fetch();
		return $thismanga;
	}

?>
