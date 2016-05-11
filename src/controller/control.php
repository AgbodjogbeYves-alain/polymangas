<?php include("../bdd/config.php");?>
<?php
	/*if(isset($_COOKIE['user'])){
		$pseudo=$_COOKIE['user'];
		$reponse_admin = $bdd->prepare('SELECT ISADMIN FROM USERS WHERE PSEUDO = ?');
        $reponse_admin->execute(array($pseudo));
        $droit =  $reponse_admin->fetch();
        if ($droit['ISADMIN'] == 1){
			print('<META HTTP-EQUIV="Refresh" CONTENT="0; URL=../vue/acceuilabo.php"/>');
		}
		else{
			print('<META HTTP-EQUIV="Refresh" CONTENT="0; URL=../vue/acceuiladmin.php"/>');
		}
	}
	elseif(!isset($_COOKIE['user'])){
		print('<META HTTP-EQUIV="Refresh" CONTENT="0; URL=../vue/homepage.php">');
			}*/
			$pseudo=$_COOKIE['user'];
		$reponse_admin = $bdd->prepare('SELECT ISADMIN FROM USERS WHERE PSEUDO = ?');
        $reponse_admin->execute(array($pseudo));
        $droit =  $reponse_admin->fetch();
        echo $droit['ISADMIN'];
?>