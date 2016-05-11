<?php
	include("../bdd/config.php");
	include("../model/volumes.php");
	include("../model/affichemangas.php");

	$id_manga=$_POST['idmanga'];
	$manga = get_this_manga($id_manga);
	if (isset($_COOKIE['user'])){
		$volumes = get_volumes($idmanga);
		foreach ($volumes as $volume) {
			$description = utf8_encode($volume['RESUME']);
			$numero = utf8_encode($volume['LIBELLE']);
			$ISBN = utf8_encode($volume['ID_VOLUME']);
			$disponibilite = utf8_encode($volume['DISPONIBILITE']);
			
			if($disponibilite>1){
				print (
					'<div class="panel panel-default grey lighten-2" id="divvolumes1" >
			        <div class="panel-heading"><p> TITRE MANGA : '.$manga['TITRE_MANGA'].'</p></div>
			        <div class="panel-body">
			        <p> LIBELLE : '.$numero.'</p>
			        <p> RESUME : '.$description.'</p>
			        <p> Nombre de livre restant pour ce tome : '.$disponibilite.'</p>
			        <p><form method = "POST" class="col s9" action="../controller/deletefavoris.php"> 
				        <div>
				        <div class="row">
		          			<div class="input-field col s9">
		              			<input id="idvolume" type="number" name="idvolume" value="'.$ISBN.'" readonly="readonly"/>
		              			<label class="active" for="ISBN">ISBN</label>
		            		</div>
		          		</div>
		          		<div>
			            	<button>
			             		<a class="waves-effect waves-light btn" type="submit" name="action">Ajouter au panier</a>
			             		<i class="material-icons right">done</i>
			            	</button>
			            </div>
		          		</div>');
			}
			else{
				print (
					'<div class="panel panel-default grey lighten-2" id="divvolumes1" >
			        <div class="panel-heading"><p> TITRE MANGA : '.$manga['TITRE_MANGA'].'</p></div>
			        <div class="panel-body">
			        <p> LIBELLE : '.$numero.'</p>
			        <p> RESUME : '.$description.'</p>
			        <p> Nombre de livre restant pour ce tome : '.$disponibilite.'</p>
			        <p><form method = "POST" class="col s9" action="../controller/deletefavoris.php"> 
				        <div>
				        <div class="row">
		          			<div class="input-field col s9">
		              			<input id="idvolume" type="number" name="idvolume" value="'.$ISBN.'" readonly="readonly"/>
		              			<label class="active" for="ISBN">ISBN</label>
		            		</div>
		          		</div>');
			}
		}
		else{
			header("Location: http://polymangas-igmangas.rhcloud.com/src/vue/signin.php");
		}
?>
