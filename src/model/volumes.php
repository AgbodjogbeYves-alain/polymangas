<?php
	function get_volumes($id_mangas){
		global $bd;
		$req = $bd->prepare('SELECT * FROM VOLUME_MANGA WHERE ID_MANGA="'.$id_mangas.'"');
		$req->execute();
		$volumes = $req -> fetchAll(PDO::FETCH_ASSOC);
		return $volumes;
	}

	function get_this_volume($id_volume){
		global $bd;
		$req = $bd->prepare('SELECT * FROM VOLUME_MANGA WHERE ID_VOLUME="'.$id_volume.'"');
		$req->execute();
		$volume = $req -> fetch(PDO::FETCH_ASSOC);
		return $volume;
	}

?>