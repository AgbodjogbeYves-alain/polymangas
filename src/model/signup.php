<?php
	
	function create_abo($pseudo,$nom,$prenom,$password,$email,$numrue,$libellerue ,$ville,$pays,$datenaiss){

		global $bdd;
		$req = $bdd->prepare('INSERT INTO USERS(PSEUDO, NOM, PRENOM, PASSWORD, EMAIL, NUM_RUE,  LIBELLE_RUE, VILLE, PAYS, ISADMIN, DATE_NAISS) VALUES(?,?,?,?,?,?,?,?,?,?,?)');
		$req->execute(array ($pseudo,$nom,$prenom,$password,$email,$numrue,$libellerue ,$ville,$pays,1,$datenaiss));
		return 0;
	}

	function create_admin($pseudo,$nom,$prenom,$password,$email,$numrue,$libellerue ,$ville,$pays,$datenaiss){
		global $bdd;
		$req = $bdd->prepare('INSERT INTO USERS(PSEUDO, NOM, PRENOM, PASSWORD, EMAIL, NUM_RUE,  LIBELLE_RUE, VILLE, PAYS, ISADMIN, DATE_NAISS) VALUES(?,?,?,?,?,?,?,?,?,?,?)');
		$req->execute(array ($pseudo,$nom,$prenom,$password,$email,$numrue,$libellerue ,$ville,$pays,0,$datenaiss));
		return 0;
	}
?>