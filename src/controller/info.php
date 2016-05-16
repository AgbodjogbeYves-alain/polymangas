<?php
	require('../bd/config.php');
	require('../model/info.php');

	if(!isset($_COOKIE['user']) OR !isset($_COOKIE['token'])){
		setcookie('user','',-1,"/");
    	setcookie('auth','',-1,"/");
    	setcookie('token','',-1,"/");
    	setcookie('token0','',-1,"/");
		header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/signin.php');
	} 
	else{

		if($_COOKIE['tokenuser']!=sha1($_COOKIE['user'])){
			setcookie('user','',-1,"/");
	    	setcookie('auth','',-1,"/");
	    	setcookie('token','',-1,"/");
	    	setcookie('token0','',-1,"/");
			header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/signin.php');
		}
		else{

			$donnees = get_info_user();
			if($_COOKIE['auth']==0){
				print (
					'<div class="panel panel-default blue-grey lighten-2" id="divinfos1" >
			        <div class="panel-heading"><p class="z-depth-4"> Vous etes:'.$donnees['NOM']." ".$donnees['PRENOM'].'</p></div>
			        <div class="panel-body" class="bordered">
			        <p class="z-depth-3"> Votre pseudo : '.$donnees['PSEUDO'].'</p>
			        <p class="z-depth-3"> Votre mot de passe : '.$donnees['PASSWORD'].'</p>
			        <p class="z-depth-3"> Votre email : '.$donnees['EMAIL'].'</p>
			        <p class="z-depth-3"> Votre date de naissance : '.$donnees['DATE_NAISS'].'</p>
			        <p class="z-depth-3"> Votre numero de rue : '.$donnees['NUM_RUE'].'</p>
			        <p class="z-depth-3"> Votre rue : '.$donnees['LIBELLE_RUE'].'</p>
			        <p class="z-depth-3"> Votre ville : '.$donnees['VILLE'].'</p>
			        <p class="z-depth-3"> Votre pays : '.$donnees['PAYS'].'</p>
			        <p class="z-depth-3"><form method = "POST" class="col s9" action="../vue/modifinfos2.php">
			          <div>
			            <input id="search-btn" type="submit" value="Modifier mes informations" />
			          </div>
			         </form></p>
			         </div>
			        </div> ');
			}
			else{
				print (
					'<div class="panel panel-default blue-grey lighten-2" id="divinfos1" >
			        <div class="panel-heading"><p> Vous etes:'.$donnees['NOM']." ".$donnees['PRENOM'].'</p></div>
			        <div class="panel-body" class="bordered">
			        <p class="z-depth-4"> Votre pseudo : '.$donnees['PSEUDO'].'</p>
			        <p class="z-depth-4"> Votre mot de passe : '.$donnees['PASSWORD'].'</p>
			        <p class="z-depth-4"> Votre email : '.$donnees['EMAIL'].'</p>
			        <p class="z-depth-4"> Votre date de naissance : '.$donnees['DATE_NAISS'].'</p>
			        <p class="z-depth-4"> Votre numero de rue : '.$donnees['NUM_RUE'].'</p>
			        <p class="z-depth-4"> Votre rue : '.$donnees['LIBELLE_RUE'].'</p>
			        <p class="z-depth-4"> Votre ville : '.$donnees['VILLE'].'</p>
			        <p class="z-depth-4"> Votre pays : '.$donnees['PAYS'].'</p>
			        <p class="z-depth-4"><form method = "POST" class="col s9" action="../vue/modifinfos.php">
			          <div>
			            <input id="search-btn" type="submit" value="Modifier vos informations" />
			          </div>
			         </form></p>
			         </div>
			        </div> ');
			}
	}
}

?>