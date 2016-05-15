<?php require("../bdd/config.php");?>
<?php require("../model/affichemangas.php");?>
<?php require("../model/gerefavoris.php");?>

<?php
	
	if(!isset($_COOKIE['user']) OR !isset($_COOKIE['token'])){
		header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/signin.php');
	} 
	else{
		if($_COOKIE['tokenuser']!=sha1($_COOKIE['user'])){
			header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/signin.php');
		}
		else{

			$pseudo=$_COOKIE['user'];
			$favoris= get_users_fav($pseudo);
				foreach ($favoris as $manga) {
					$idmanga = $manga['ID_MANGA'];
					$manga1=get_this_manga($idmanga);
					$description = utf8_encode($manga1['DESCRIPTION']);
					$titre = utf8_encode($manga1['TITRE_MANGA']);
					$dessinateur = utf8_encode($manga1['DESSINATEUR']);
					$editeur = utf8_encode($manga1['EDITEUR']);

					print (
							'<div class="panel panel-default blue-grey lighten-2" id="divmangas1">
					        <div class="panel-heading"><p> TITRE : '.$titre.'</p></div>
					        <div class="panel-body">
					        <p class="z-depth-3"> EDITEUR : '.$editeur.'</p>
					        <p class="z-depth-3"> DESSINATEUR : '.$dessinateur.'</p>
					        <p class="z-depth-3"> SYNOPSIS : '.$description.'</p>
					        <p class="z-depth-3"><form method = "POST" class="col s9" action="../controller/deletefavoris2.php"> 
						        <div>
						        <div class="row">
				          			<div class="input-field col s9">
				              			<input id="idmanga" type="number" name="idmanga" value="'.$idmanga.'" readonly="readonly"/>
				              			<label class="active" for="ID">ID</label>
				            		</div>
				          		</div>
				          		<div>
			            			<input id="search-btn" type="submit" value="Retirer ce manga de mes favoris" />
			          			</div>
				          		</div>
					         </form></p>
					         <p><form method = "POST" class="col s9" action="../vue/volume_manga.php">
						         <div>
							        <div class="row">
					          			<div class="input-field col s9">
					              			<input id="idmanga" type="HIDDEN" name="idmanga1" value="'.$manga['ID_MANGA'].'" readonly="readonly"/>
					            		</div>
					          		</div>
				          		</div>
					          <div>
			            		<input id="search-btn" type="submit" value="Voir le tomes disponibles" />
			          		</div>
					         </form></p>
					        </div>
					        </div>');
				}
			}
		}
?>