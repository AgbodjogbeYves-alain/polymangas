<?php require("../bdd/config.php");?>
<?php require("../model/affichemangas.php");?>

<?php
	
	if (isset($_COOKIE['user'])){
		$mangas = get_all_mangas();
		foreach ($mangas as $manga) {
			$description = utf8_encode($manga['DESCRIPTION']);
			$titre = utf8_encode($manga['TITRE_MANGA']);
			$dessinateur = utf8_encode($manga['DESSINATEUR']);
			$editeur = utf8_encode($manga['EDITEUR']);

			print (
				'<div class="panel panel-default grey lighten-2" id="divmangas1" >
		        <div class="panel-heading"><p> TITRE : '.$titre.'</p></div>
		        <div class="panel-body">
		        <p> EDITEUR : '.$editeur.'</p>
		        <p> DESSINATEUR : '.$dessinateur.'</p>
		        <p> SYNOPSIS : '.$description.'</p>
		        <p><form method = "POST" class="col s9" action="../controller/ajouterfavoris.php"> 
			        <div>
			        <div class="row">
	          			<div class="input-field col s9">
	              			<input id="idmanga" type="number" required name="idmanga" value='.$manga['ID_MANGA'].' disabled="disabled">
	              			<label class="active" for="ID">ID</label>
	            		</div>
	          		</div>
	          		</div>
		        	<div>
		            <button>
		             <a class="waves-effect waves-light btn" type="submit" name="action">Ajouter aux favoris</a>
		             <i class="material-icons right">done</i>
		            </button>
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

			# code...
		}
	}
	elseif(!isset($_COOKIE['user'])) 
	{
		header("Location: http://polymangas-igmangas.rhcloud.com/src/vue/signin.php");
	}
?>