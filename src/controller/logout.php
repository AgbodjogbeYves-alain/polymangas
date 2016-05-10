<?php

	if(!isset($_COOKIE["user"]))
    {
        	header('Location: http://polymangas-igmangas.rhcloud.com/src/vue/homepage.php');
    }
    elseif(isset($_COOKIE["user"])){
    	setcookie('user','',-1,"/");
    	header('Location: http://polymangas-igmangas.rhcloud.com/src/vue/homepage.php');

    }
?>