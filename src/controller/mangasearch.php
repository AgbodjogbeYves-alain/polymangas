<?php require("../bdd/config.php");?>
<?php require("../model/affichemangas.php");?>
<?php require("../model/gerefavoris.php");?>

<?php
	
	if (isset($_COOKIE['user'])){
		$titre1 = htmlentities($_POST['searchmanga'],ENT_QUOTES);
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
					'<div class="panel panel-default blue-grey lighten-2" id="divmangas1">
			        <div class="panel-heading"><p class="z-depth-3"> TITRE : '.$titre.'</p></div>
			        <div class="panel-body">
			        <p class="z-depth-3"> EDITEUR : '.$editeur.'</p>
			        <p class="z-depth-3"> DESSINATEUR : '.$dessinateur.'</p>
			        <p class="z-depth-3"> SYNOPSIS : '.$description.'</p>
			        <p class="z-depth-3"><form method = "POST" class="col s9" action="../controller/deletefavoris.php"> 
				        <div>
					        <div class="row">
			          			<div class="input-field col s9">
			              			<input id="idmanga" type="number" name="idmanga" value="'.$manga['ID_MANGA'].'" readonly="readonly"/>
			              			<label class="active" for="ID">ID</label>
			            		</div>
			          		</div>
			          		<div>
			            <input id="search-btn" type="submit" value="Supprimer cet utilisateur" />
			          </div>
		          		</div>
			         </form></p>
			         <p class="z-depth-3"><form method = "POST" class="col s9" action="../vue/volume_manga.php">
				         <div>
					        <div class="row">
			          			<div class="input-field col s9">
			              			<input id="idmanga" type="HIDDEN" name="idmanga1" value="'.$manga['ID_MANGA'].'" readonly="readonly"/>
			            		</div>
			          		</div>
		          		</div>
			          <div>
			            <input id="search-btn" type="submit" value="Supprimer cet utilisateur" />
			          </div>
			         </form></p>
			        </div>
			        </div>');
			}
			else{
				print (
				'<div class="panel panel-default blue-grey lighten-2" id="divmangas1" >
		        <div class="panel-heading"><p class="z-depth-3"> TITRE : '.$titre.'</p></div>
		        <div class="panel-body">
		        <p class="z-depth-3"> EDITEUR : '.$editeur.'</p>
		        <p class="z-depth-3"> DESSINATEUR : '.$dessinateur.'</p>
		        <p class="z-depth-3"> SYNOPSIS : '.$description.'</p>
		        <p class="z-depth-3"><form method = "POST" class="col s9" action="../controller/ajouterfavoris.php"> 
			        <div>
			        <div class="row">
	          			<div class="input-field col s9">
	              			<input id="idmanga" type="number" name="idmanga" value="'.$manga['ID_MANGA'].'" readonly="readonly"/>
	              			<label class="active" for="ID">ID</label>
	            		</div>
	          		</div>
		        	<div>
			            <input id="search-btn" type="submit" value="Ajouter a mes favoris" />
			        </div>
		          </div>
		         </form></p>
		         <p class="z-depth-3"><form method = "POST" class="col s9" action="../vue/volume_manga.php">
		         <div>
				        <div class="row">
		          			<div class="input-field col s9">
		              			<input id="idmanga" type="HIDDEN" name="idmanga1" value="'.$manga['ID_MANGA'].'" readonly="readonly"/>
		            		</div>
		          		</div>
		          </div>
		          <div>
			            <input id="search-btn" type="submit" value="Voir tomes disponibles" />
			       </div>
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
		header("Location: https://polymangas-igmangas.rhcloud.com/src/vue/signin.php");
	}
	
?>