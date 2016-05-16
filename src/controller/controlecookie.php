<?php require("../bd/config.php");?>
<?php require("../model/info.php");?>
<?php

	if(isset($_COOKIE["user"])){
		$token=sha1($_COOKIE["user"]);
	    $today = date("m.d.y"); 
	    $token.=sha1($today);
	    $token.=sha1($_COOKIE['token0']);
	    $token.=sha1($_COOKIE['str']);
	    $tok1=sha1($token);
       if($_COOKIE["token"]==$tok1){
			$droit = get_droit_user();
			if($_COOKIE["auth"]==0){
				header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/acceuiladmin.php');
			}
			elseif ($_COOKIE["auth"]==1) {
				header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/acceuilabo.php');
			}
		}
	}

?>