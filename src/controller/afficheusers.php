<?php require("../bd/config.php");?>
<?php require("../model/afficheusers.php");?>

<?php

	if (isset($_COOKIE['user']) AND isset($_COOKIE['auth'])){
		$users = get_all_users();
		$pseudo=$_COOKIE['user'];
		if($_COOKIE['auth']==0){
			foreach ($users as $user) {
				$nom=utf8_encode($user['NOM']);
				$prenom=utf8_encode($user['PRENOM']);

				print (
					'<div class="panel panel-default blue-grey lighten-2" id="divmangas1" >
			        <div class="panel-heading"><p class="z-depth-3"> NOM : '.$nom.'</p></div>
			        <div class="panel-body">
			        <p class="z-depth-3"> PRENOM : '.$prenom.'</p>
			        <p class="z-depth-3"><form method = "POST" class="col s9" action="../controller/deleteuser.php"> 
				        <div>
				        <div class="row">
		          			<div class="input-field col s9">
		              			<input id="pseudo" type="text" name="pseudo" value="'.$user['PSEUDO'].'" readonly="readonly"/>
		              			<label class="active" for="pseudo">PSEUDO</label>
		            		</div>
		          		</div>
		          		<div>
			            <input id="search-btn" type="submit" value="Supprimer cet utilisateur" />
			          </div>
		          		</div>
			         </form></p>
			         <p class="z-depth-3"><form method = "POST" class="col s9" action="../vue/commandesuser.php">
			          <div>
				        <div class="row">
		          			<div class="input-field col s9">
		              			<input id="pseudo" type="HIDDEN" name="pseudo" value="'.$user['PSEUDO'].'" readonly="readonly"/>
		            		</div>
		          		</div>
	          		</div>
			          <div>
			            <input id="search-btn" type="submit" value="Afficher ses commandes" />
			          </div>
			         </form></p>
			        </div>
			        </div>');
			}
			}
			else{
				header("Location: https://polymangas-igmangas.rhcloud.com/src/vue/signin.php");
			}

		}
		else{
			header("Location: https://polymangas-igmangas.rhcloud.com/src/vue/signin.php");
		}