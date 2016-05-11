<?php require("../bdd/config.php");?>
<?php require("../model/affichemangas.php");?>
<?php require("../model/gerefavoris.php");?>

<?php
	
	if (isset($_COOKIE['user'])){
		$titre1 = $_POST['searchmanga']);
		$mangas = get_these_mangas($titre1);
		$pseudo=$_COOKIE['user'];
		$favoris= get_users_fav($pseudo);
		foreach ($mangas as $manga) {
			$description = utf8_encode($manga['DESCRIPTION']);
			$titre = utf8_encode($manga['TITRE_MANGA']);
			$dessinateur = utf8_encode($manga['DESSINATEUR']);
			$editeur = utf8_encode($manga['EDITEUR']);
			$present=0;
			foreach($favoris as $i){
				if($manga['ID_MANGA']==$i['ID_MANGA']){
					$present=1;
				}
			}
			if($present==1){
				print (
					'<div class="panel panel-default grey lighten-2" id="divmangas1" >
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
			else{
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
	              			<input id="idmanga" type="number" name="idmanga" value="'.$manga['ID_MANGA'].'" readonly="readonly"/>
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
			}
			# code...
		}
	}

	elseif(!isset($_COOKIE['user'])) 
	{
		header("Location: http://polymangas-igmangas.rhcloud.com/src/vue/signin.php");
		exit();
	}
	/*$titre1 = $_POST['searchmanga'];
	$mangas = get_these_mangas($titre1);
	echo $titre1;
	print_r($mangas);*/
?>