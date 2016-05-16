<?php
	
	function get_all_users(){
		global $bd;
		$req = $bd->prepare('SELECT * FROM USERS ORDER BY PSEUDO');
		$req->execute();
		$montab = $req -> fetchAll(PDO::FETCH_ASSOC);
		return $montab;
	}

	function delete_user($pseudo){
		global $bd;
		$req2 = $bd->prepare('DELETE FROM USERS WHERE PSEUDO="'.$pseudo.'"');
		$req2->execute();
		return 0;
	}

?>