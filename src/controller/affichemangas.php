<?php require("../bd/config.php");?>
<?php require("../model/affichemangas.php");?>
<?php require("../model/gerefavoris.php");?>

<?php
	
	
	if (isset($_COOKIE['user']) AND isset($_COOKIE['auth'])){
		$mangas = get_all_mangas();
		$pseudo=$_COOKIE['user'];
		$favoris= get_users_fav($pseudo);
		if($_COOKIE['auth']==0){
			print('<div class="recherche_p">
				        <form action="ajoutmanga.php" id="searchthis" method="POST">
				        <input id="search-btn" type="submit" value="Ajouter mangas" />
			        	</form>
			      	</div>');

		}
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
		if($_COOKIE['auth']==1){
			if($present==1){
				print (
					'<div class="panel panel-default blue-grey lighten-2" id="divmangas1" >
			        <div class="panel-heading" ><p class="z-depth-3"> TITRE : '.$titre.'</p></div>
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
			            	<input id="search-btn" type="submit" value="Retirer des favoris" />
			            </div>
		          		</div>
			         </form></p>
			         <p class="z-depth-3"><form method = "POST" class="col s9" action="../vue/volume_manga.php">
			          <div>
				        <div class="row">
		          			<div class="input-field col s9">
		              			<input id="idaffichemanga1" type="HIDDEN" name="idmanga1" value="'.$manga['ID_MANGA'].'" readonly="readonly"/>
		            		</div>
		          		</div>
	          		</div>
			          <div>
			            <input id="search-btn" type="submit" value="Voir les tomes disponibles" />
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
	          		</div>
		        	<div>
		            	<input id="search-btn" type="submit" value="Ajouter aux favoris" />
		         	 </div>
		         	</form></p>
		         	<p class="z-depth-3"><form method = "POST" class="col s9" action="../vue/volume_manga.php">
		          	<div>
			        	<div class="row">
	          				<div class="input-field col s9">
	              				<input id="idaffichemanga1" type="HIDDEN" name="idmanga1" value="'.$manga['ID_MANGA'].'" readonly="readonly"/>
	            		</div>
	          		</div>
	          		</div>
		          <div>
		            <input id="search-btn" type="submit" value="Voir les tomes disponibles" />
		          </div>
		         </form></p>
		        </div>
		        </div>');
			}
		}
		else{//si admin
			if($present==1){
				print (
					'
					<div class="panel panel-default blue-grey lighten-2" id="divmangas1" >
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
			            	<input id="search-btn" type="submit" value="Retirer des favoris" />
			            </div>
		          		</div>
			         </form></p>
			         <p class="z-depth-3"><form method = "POST" class="col s9" action="../vue/volume_manga.php">
			          <div>
				        <div class="row">
		          			<div class="input-field col s9">
		              			<input id="idaffichemanga1" type="HIDDEN" name="idmanga1" value="'.$manga['ID_MANGA'].'" readonly="readonly"/>
		            		</div>
		          		</div>
	          		</div>
			          <div>
			            <input id="search-btn" type="submit" value="Voir les tomes disponible" />
			          </div>

			         </form></p>
			         <p class="z-depth-3"><form method = "POST" class="col s9" action="../controller/modifinfosmanga.php"> 
				        <div>
				        <div class="row">
		          			<div class="input-field col s9">
		              			<input id="idaffichemanga1" type="HIDDEN" name="idmanga" value="'.$manga['ID_MANGA'].'" readonly="readonly"/>
		            		</div>
		          		</div>
		          		<div>
			            	<input id="search-btn" type="submit" value="Modifier les informations de ce manga" />
			            </div>
		          		</div>
		          		</form></p>
		          		<p class="z-depth-3"><form method = "POST" class="col s9" action="../controller/supmanga.php"> 
				        <div>
				        <div class="row">
		          			<div class="input-field col s9">
		              			<input id="idaffichemanga1" type="HIDDEN" name="idmanga3" value="'.$manga['ID_MANGA'].'" readonly="readonly"/>
		            		</div>
		          		</div>
		          		<div>
			            	<input id="search-btn" type="submit" value="Supprimer ce manga" />
			            </div>
		          		</div>
		          	</form></p>
			        </div>
			        </div>');
			}

			else{
				print (

				'
				<div class="panel panel-default blue-grey lighten-2" id="divmangas1" >
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
	          		</div>
		        	<div>
		            <input id="search-btn" type="submit" value="Ajouteraux favoris" />
		          </div>
		         </form></p>
		         <p class="z-depth-3"><form method = "POST" class="col s9" action="../vue/volume_manga.php">
		          <div>
			        <div class="row">
	          			<div class="input-field col s9">
	              			<input id="idaffichemanga1" type="HIDDEN" name="idmanga1" value="'.$manga['ID_MANGA'].'" readonly="readonly"/>
	            		</div>
	          		</div>
	          		</div>
		          <div>
		            <input id="search-btn" type="submit" value="Verifier les tomes disponibles" />
		          </div>
		         </form></p>
		         <p class="z-depth-3"><form method = "POST" class="col s9" action="../controller/modifinfosmanga.php"> 
				        <div>
				        <div class="row">
		          			<div class="input-field col s9">
		              			<input id="idaffichemanga1" type="HIDDEN" name="idmanga" value="'.$manga['ID_MANGA'].'" readonly="readonly"/>
		            		</div>
		          		</div>
		          		<div>
			            	<input id="search-btn" type="submit" value="Modifier les informations de ce manga" />
			            </div>
		          		</div>
		          	</form></p>
		          <p class="z-depth-3"><form method = "POST" class="col s9" action="../controller/supmanga.php"> 
				        <div>
				        <div class="row">
		          			<div class="input-field col s9">
		              			<input id="idaffichemanga1" type="HIDDEN" name="idmanga3" value="'.$manga['ID_MANGA'].'" readonly="readonly"/>
		            		</div>
		          		</div>
		          		<div>
			            	<input id="search-btn" type="submit" value="Supprimer ce manga" />
			            </div>
		          		</div>
		          	</form></p>
		        </div>
		        </div>');
			}
			# code...
		}
	}
}


	else 
	{
		header("Location: https://polymangas-igmangas.rhcloud.com/src/vue/signin.php");
	}
?>