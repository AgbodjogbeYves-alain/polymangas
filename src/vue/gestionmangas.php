<!DOCTYPE html>
<html>
    <head>
   		<title>Polymangas</title>
    	<!-- Favicon -->
    	<link rel="icon" type="image/jpg" href="../image/mangalogo.jpg"/>
    	<!--Import Google Icon Font-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
     	<!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      	<!-- Personnale css -->
      	<link rel="stylesheet" href="../css/personalcss.css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
<body>
      <?php include("../controller/navbar.php");?>
      <!--content-->
      <div class="recherche_p">
        <form action="mangasearch.php" id="searchthis" method="POST">
        <input id="search" name="searchmanga" type="text" placeholder="Rechercher" />
        <input id="search-btn" type="submit" value="Rechercher" />
        </form>

      </div>
      <?php include("../controller/affichemangas.php"); ?>
    </body>
</html>