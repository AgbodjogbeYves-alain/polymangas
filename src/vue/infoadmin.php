
<!DOCTYPE html>


<html>
    <head>
   		<title>Polymangas</title>
    	<!-- Favicon -->
    	<link rel="icon" type="image/jpg" href="../image/mangalogo.jpg"/>
    	<!--Import Google Icon Font-->
        <link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons">
     	<!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      	<!-- Personnale css -->
      	<link rel="stylesheet" href="../css/personalcss.css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
<body>
<div class="navbar-fixed">
      <nav>
              <div class="nav-wrapper grey darken-2">
          <ul class="hide-on-med-and-down">
            <a href="acceuiladmin.php" class="brand-logo" id = "icone2">PolyMangas</a>
          </ul>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">

              <li><a href="infoadmin.php">Infos personnels</a></li>
               <!-- Dropdown Trigger -->
              <li><a class="dropdown-button" href="#!" data-activates="dropdown1">PolyGestion<i class="material-icons right">arrow_drop_down</i></a></li>
              <li><a href="gerefavoris.php">Favoris</a></li>
              <li><a href="monpanier.php">Commandes</a></li>
              <li><a href="../controller/logout.php">Deconnexion</a></li>
              <!-- Dropdown Structure -->
              <ul id="dropdown1" class="dropdown-content">
                <li><a href="#!">Gestion utilisateurs</a></li>
                <li class="divider"></li>
                <li><a href="gestionmangas.php">Gestion mangas</a></li>
                <li class="divider"></li>
                <li><a href="#!">Gestion commandes</a></li>
              </ul>
          </ul>

          <!--Side nav-->
          <ul class="side-nav" id="mobile-demo">
              <li><a href="infoadmin.php">Infos personnels</a></li>
              <li><a class="dropdown-button" href="#!" data-activates="dropdown2">PolyGestion<i class="material-icons right">arrow_drop_down</i></a></li>
              <li><a href="gerefavoris.php">Favoris</a></li>
              <li><a href="monpanier.php">Commandes</a></li>
              <li><a href="../controller/logout.php">Deconnexion</a></li>
              <!-- Dropdown Structure -->
              <ul id="dropdown2" class="dropdown-content">
                <li><a href="#!">Gestion utilisateurs</a></li>
                <li class="divider"></li>
                <li><a href="gestionmangas.php">Gestion mangas</a></li>
                <li class="divider"></li>
                <li><a href="#!">Gestion commandes</a></li>
              </ul>
          </ul>
        </div>
      </nav>
</div>
<!--Content-->
<?php include("../controller/info.php"); ?>

<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      <script type="text/javascript">
        $(function(){
          $(".button-collapse").sideNav();
        });
      </script>
      </script>
      <script type="text/javascript">
        $(".dropdown-button").dropdown();
      </script>

    </body>
</html>