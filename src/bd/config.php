<?php
	try
	{
		$bd = new PDO('mysql:host=;dbname=polymangas', 'root','');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	       
	}
?>