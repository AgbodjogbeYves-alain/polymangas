<?php
	    require('../bdd/config.php');
		include_once('../model/signup.php');

		if(isset($_POST['last_name']) AND isset($_POST['first_name']) AND isset($_POST['pseudo']) AND isset($_POST['password']) AND isset($_POST['ville']) AND isset($_POST['ville']) AND isset($_POST['numrue']) AND isset($_POST['libellerue']) AND isset($_POST['pays']) AND isset($_POST['email']) AND isset($_POST['datenaiss'])){ 
			$nom =htmlentities($_POST['last_name'],ENT_QUOTES);
		    $prenom =htmlentities($_POST['first_name'],ENT_QUOTES);
		    $pseudo = htmlentities($_POST['pseudo'],ENT_QUOTES);
			$password = htmlentities($_POST['password'],ENT_QUOTES);
			$ville = htmlentities($_POST['ville'],ENT_QUOTES);
			$numrue =$_POST['numrue'];
			$libellerue =htmlentities($_POST['libellerue'],ENT_QUOTES);
			$pays =htmlentities($_POST['pays'],ENT_QUOTES);
			$email =htmlentities($_POST['email'],ENT_QUOTES);
			$datenaiss =htmlentities($_POST['datenaiss'],ENT_QUOTES);
			$result = create_abo($pseudo,$nom,$prenom,$password,$email,$numrue,$libellerue ,$ville,$pays,$datenaiss);
			if ($result==0){
				header('Location: http://polymangas-igmangas.rhcloud.com/src/vue/signin.php');
			}
			else{
				echo "Erreur enregistrement veuillez reessayer";
				sleep(2);
				header('Location: http://polymangas-igmangas.rhcloud.com/src/vue/signup.php');
			}
		}
?>