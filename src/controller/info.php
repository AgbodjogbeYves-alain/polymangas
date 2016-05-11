<?php
	require('../bdd/config.php');
	require('../model/info.php');

	if(!isset($_COOKIE['user'])){
		header('Location: http://polymangas-igmangas.rhcloud.com/src/vue/signin.php');
	} 
	else{
		$donnees = get_info_user();

		print (
			'<div class="panel panel-default grey lighten-2" id="divinfos1" >
	        <div class="panel-heading"><p> Vous etes:'.$donnees['NOM']." ".$donnees['PRENOM'].'</p></div>
	        <div class="panel-body">
	        <p> Votre pseudo : '.$donnees['PSEUDO'].'</p>
	        <p> Votre mot de passe : '.$donnees['PASSWORD'].'</p>
	        <p> Votre email : '.$donnees['EMAIL'].'</p>
	        <p> Votre date de naissance : '.$donnees['DATE_NAISS'].'</p>
	        <p> Votre numero de rue : '.$donnees['NUM_RUE'].'</p>
	        <p> Votre rue : '.$donnees['LIBELLE_RUE'].'</p>
	        <p> Votre ville : '.$donnees['VILLE'].'</p>
	        <p> Votre pays : '.$donnees['PAYS'].'</p>
	        <p><form method = "POST" class="col s9" action="../vue/modifinfos.php">
	          <div>
	            <button>
	              <a class="waves-effect waves-light btn" type="submit" name="action">Modifier</a>
	              <i class="material-icons right">done</i>
	            </button>
	          </div>
	         </form></p>
	         </div>
	        </div> ');
	}

?>