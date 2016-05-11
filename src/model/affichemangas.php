<?php
	
	function get_all_mangas(){
		global $bdd;
		$req = $bdd->prepare('SELECT * FROM MANGA ORDER BY TITRE_MANGA');
		$req->execute();
		$montab = $req -> fetchAll(PDO::FETCH_ASSOC);
		return $montab;
	}
?>
