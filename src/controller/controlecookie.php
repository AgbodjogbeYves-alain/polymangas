<?php require("../bdd/config.php");?>
<?php require('../model/info.php');?>
<?php
	if(isset($_COOKIE["user"])){
		$droit=get_droit_user();
		if($droit['ISADMIN']==1){
			header('Location: http://polymangas-igmangas.rhcloud.com/src/vue/acceuilabo.php');
		}
		elseif ($droit['ISADMIN']==0) {
			header('Location: http://polymangas-igmangas.rhcloud.com/src/vue/acceuiladmin.php');
		}
	}
?>