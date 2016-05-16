<?php require("../bd/config.php");?>
<?php require("../model/affichemangas.php");?>
<?php require("../model/monpanier.php");?>
<?php require("../model/volumes.php");?>

<?php
	
if(!isset($_COOKIE['user']) OR !isset($_COOKIE['token'])){
		header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/signin.php');
	} 
	else{
		if($_COOKIE['tokenuser']!=sha1($_COOKIE['user'])){
			header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/signin.php');
		}
		else{
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
					'<div class="panel panel-default blue-grey lighten-2" id="divmangas1" >
			        <div class="panel-heading"><p> TITRE MANGA : '.$manga['TITRE_MANGA'].'</p></div>
			        <div class="panel-body">
			        <p class="z-depth-3"> LIBELLE : '.$libelle.'</p>
			        <p class="z-depth-3"> ISBN : '.$id_volume.'</p>
			        <p class="z-depth-3"><form method = "POST" class="col s9" action="../controller/supcommande.php"> 
				        <div>
				        <div class="row">
		          			<div class="input-field col s9">
		              			<input id="idcommande" type="number" name="idcommande" value="'.$commande['ID_COMMANDE'].'" readonly="readonly"/>
		              			<label class="active" for="ISBN">Numero Commande</label>
		            		</div>
		          		</div>
		          		</div>
		          		<div>
			            <input id="search-btn" type="submit" value="Supprimer cette commande" />
			          	</div>
			            </form></p>
			        	</div>
		          		</div>');
				}
			}
		}
				

?>