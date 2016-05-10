<?php
	    require('../bdd/config.php');
		include_once('../model/signup.php');

		if(isset($_POST['last_name']) AND isset($_POST['first_name']) AND isset($_POST['pseudo']) AND isset($_POST['password']) AND isset($_POST['ville']) AND isset($_POST['ville']) AND isset($_POST['numrue']) AND isset($_POST['libellerue']) AND isset($_POST['pays']) AND isset($_POST['email']) AND isset($_POST['datenaiss'])){ 
			$nom =$_POST['last_name']);
		    $prenom =$_POST['first_name'];
		    $pseudo = $_POST['pseudo'];
			$password = $_POST['password'];
			$ville = $_POST['ville'];
			$numrue =$_POST['numrue']);
			$libellerue =$_POST['libellerue']);
			$pays =$_POST['pays']);
			$email =$_POST['email']);
			$datenaiss =$_POST['datenaiss']);
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