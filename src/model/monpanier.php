<?php

	function get_commandes($pseudo){
		global $bdd;
		$req1 = $bdd->prepare('SELECT * FROM COMMANDES WHERE PSEUDO="'.$pseudo.'"');
		$req1->execute();
		$commandes = $req1 -> fetchAll();
		return $commandes;
	}

	function delete_commandes($idcommande,$pseudo){
		global $bdd;
		$req2 = $bdd->prepare('DELETE FROM COMMANDES WHERE ID_COMMANDE= ? AND PSEUDO= ?');
		$req2->execute(array ($idcommande,$pseudo));
		return 0;
	}
	
	function create_com($id_volume,$pseudo,$date){
		global $bdd;
		$req2 = $bdd->prepare('INSERT INTO COMMANDES(ID_VOLUME, PSEUDO,DATE_COM) VALUES(?,?,?)');
		$req2->execute(array ($id_volume,$pseudo,$date));
		$req3 = $bdd->prepare("call MJ_DISP(".$id_volume.")");
		$req3 ->execute();
		return 0;
	}

?>