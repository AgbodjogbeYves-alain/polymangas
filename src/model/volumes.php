<?php
	function get_volumes($id_mangas){
		global $bdd;
		$req = $bdd->prepare('SELECT * FROM VOLUME_MANGA WHERE ID_MANGA="'.$id_mangas.'"');
		$req->execute();
		$volumes = $req -> fetchAll();
		return $volumes;
	}

	function get_this_volumes($id_volume){
		global $bdd;
		$req = $bdd->prepare('SELECT * FROM VOLUME_MANGA WHERE ID_VOLUME="'.$id_volume.'"');
		$req->execute();
		$volumes = $req -> fetchAll();
		return $volume;
	}

?>