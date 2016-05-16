<?php
	try
	{
		$bd = new PDO('mysql:host='.getenv('OPENSHIFT_MYSQL_DB_HOST').';dbname='.getenv('OPENSHIFT_APP_NAME'), getenv('OPENSHIFT_MYSQL_DB_USERNAME'), getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	       
	}
?>