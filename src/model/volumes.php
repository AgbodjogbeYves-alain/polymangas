<?php
	function get_volume($id_mangas){
		global $bdd;
		$req = $bdd->prepare('SELECT * FROM VOLUME ORDER BY ID_VOLUME');
		$req->execute();
		$volumes = $req -> fetchAll(PDO::FETCH_ASSOC);
		return $volumes;
	}

?>