<?php require("../bdd/config.php");?>
<?php require("../model/affichemangas.php");?>
<?php require("../model/monpanier.php");?>
<?php require("../model/volumes.php");?>

<?php
	
	if (isset($_COOKIE['user'])){
		$pseudo = $_COOKIE['user'];
		$commandes= get_commandes($pseudo);
		foreach ($commandes as $commande) {
			$id_volume = $commande['ID_VOLUME'];
			$manga = get_this_manga_from_vol($id_volume);
			$id_manga = $manga['ID_MANGA'];
			$volume = get_this_volume($id_volume);
			$libelle = $volume['LIBELLE'];
			$manga = get_this_manga($id_manga);
			print (
				'<div class="panel panel-default grey lighten-2" id="divmangas1" >
		        <div class="panel-heading"><p> TITRE MANGA : '.$manga['TITRE_MANGA'].'</p></div>
		        <div class="panel-body">
		        <p> LIBELLE : '.$libelle.'</p>
		        <p> ISBN : '.$id_volume.'</p>
		        <p><form method = "POST" class="col s9" action="../controller/supcommande.php"> 
			        <div>
			        <div class="row">
	          			<div class="input-field col s9">
	              			<input id="idcommande" type="number" name="idcommande" value="'.$commande['ID_COMMANDE'].'" readonly="readonly"/>
	              			<label class="active" for="ISBN">Numero Commande</label>
	            		</div>
	          		</div>
	          		</div>
	          		<div>
		            	<button>
		             		<a class="waves-effect waves-light btn" type="submit" name="action">
		             		<i class="material-icons right">done</i>Supprimer commande</a>
		            	</button>
		            </div>
		            </form></p>
		        	</div>
	          		</div>');
			}
		}
		else{
			header("Location: http://polymangas-igmangas.rhcloud.com/src/vue/signin.php");
		}

?>