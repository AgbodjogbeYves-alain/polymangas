<?php
	if($_COOKIE["droits"]==1){
		include("../controller/affichemangas.php");
	}
	else{
		include("../controller/affichemangaadmin.php");
	}
?>