<?php
	
	function get_all_users(){
		global $bdd;
		$req = $bdd->prepare('SELECT * FROM USERS ORDER BY PSEUDO');
		$req->execute();
		$montab = $req -> fetchAll(PDO::FETCH_ASSOC);
		return $montab;
	}

	function delete_user($pseudo){
		global $bdd;
		$req2 = $bdd->prepare('DELETE FROM USERS WHERE PSEUDO="'.$pseudo.'"');
		$req2->execute();
		return 0;
	}

?>