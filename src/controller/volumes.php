<?php require("../bdd/config.php");?>
<?php require("../model/affichemangas.php");?>
<?php include("../model/volumes.php");?>
<?php

	$id_manga=$_POST['idmanga1'];
	$manga = get_this_manga($id_manga);
	if(!isset($_COOKIE['user']) OR !isset($_COOKIE['token'])){
		header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/signin.php');
	} 
	else{
		if($_COOKIE['tokenuser']!=sha1($_COOKIE['user'])){
			header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/signin.php');
		}
		else{

				$volumes = get_volumes($id_manga);
				foreach ($volumes as $volume) {
					$description = utf8_encode($volume['RESUME']);
					$numero = utf8_encode($volume['LIBELLE']);
					$ISBN = $volume['ID_VOLUME'];
					$disponibilite = $volume['DISPONIBILITE'];
					
					if($disponibilite>1){
						print (
							'<div class="panel panel-default blue-grey lighten-2" id="divmangas1" >
					        <div class="panel-heading"><p class="z-depth-3"> TITRE MANGA : '.$manga['TITRE_MANGA'].'</p></div>
					        <div class="panel-body">
					        <p class="z-depth-3"> LIBELLE : '.$numero.'</p>
					        <p class="z-depth-3"> RESUME : '.$description.'</p>
					        <p class="z-depth-3"> Nombre de livre restant pour ce tome : '.$disponibilite.'</p>
					        <p class="z-depth-3"><form method = "POST" class="col s9" action="../controller/creercommande.php"> 
						        <div>
						        <div class="row">
				          			<div class="input-field col s9">
				              			<input id="idvolume" type="number" name="idvolume" value="'.$ISBN.'" readonly="readonly"/>
				              			<label class="active" for="ISBN">ISBN</label>
				            		</div>
				          		</div>
				          		</div>
				          		<div>
			            			<input id="search-btn" type="submit" value="Ajouter a mon panier" />
			          			</div>
					            </form></p>
					        	</div>
				          		</div>');
					}
					else{
						print ('<h2> Aucun volumes disponibles pour le moment pour ce manga <h2>');
					}
				}
			}
		}
?>
