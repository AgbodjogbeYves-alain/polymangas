<?php require("../bdd/config.php");?>
<?php require("../model/affichemangas.php");?>
<?php require("../model/gerefavoris.php");?>

<?php
	
	if (isset($_COOKIE['user'])){
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
					'<div class="panel panel-default grey lighten-2" id="divmangas1">
			        <div class="panel-heading"><p> TITRE : '.$titre.'</p></div>
			        <div class="panel-body">
			        <p> EDITEUR : '.$editeur.'</p>
			        <p> DESSINATEUR : '.$dessinateur.'</p>
			        <p> SYNOPSIS : '.$description.'</p>
			        <p><form method = "POST" class="col s9" action="../controller/deletefavoris.php"> 
				        <div>
				        <div class="row">
		          			<div class="input-field col s9">
		              			<input id="idmanga" type="number" name="idmanga" value="'.$manga['ID_MANGA'].'" readonly="readonly"/>
		              			<label class="active" for="ID">ID</label>
		            		</div>
		          		</div>
		          		<div>
			            	<button>
			             		<a class="waves-effect waves-light btn" type="submit" name="action">Retirer des favoris</a>
			             		<i class="material-icons right">done</i>
			            	</button>
			            </div>
		          		</div>
			         </form></p>
			         <p><form method = "POST" class="col s9" action="../vue/volume_mangas.php">
			          <div>
			            <button> 
			              <a class="waves-effect waves-light btn" type="submit" name="action">Verifier les tomes disponibles</a>
			              <i class="material-icons right">done</i>
			            </button>
			          </div>
			         </form></p>
			        </div>
			        </div>');
		}
	}
	elseif(!isset($_COOKIE['user'])) 
	{
		header("Location: http://polymangas-igmangas.rhcloud.com/src/vue/signin.php");
	}
?>