<?php

	if(!isset($_COOKIE["user"]))
    {
        	header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/homepage.php');
    }
    elseif(isset($_COOKIE["user"])){
    	setcookie('user','',-1,"/");
    	setcookie('auth','',-1,"/");
    	setcookie('token','',-1,"/");
    	setcookie('token0','',-1,"/");
        setcookie('tokenuser','',-1,"/");
    	header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/homepage.php');
    }
?>