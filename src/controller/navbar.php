<?php
	if(!isset($_COOKIE['user'])){
		header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/signin.php');
	} 
	else{
		if (isset($_COOKIE["auth"])){
			if($_COOKIE["auth"]==0){
				print (
					'<div class="navbar-fixed">
      <nav>
              <div class="nav-wrapper blue darken-4">
          <ul class="hide-on-med-and-down">
            <a href="acceuiladmin.php" class="brand-logo" id = "icone2">PolyMangas</a>
          </ul>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">

              <li><a href="info.php">Infos personnels</a></li>
               <!-- Dropdown Trigger -->
              <li><a class="dropdown-button" href="#!" data-activates="dropdown1">PolyGestion<i class="material-icons right">arrow_drop_down</i></a></li>
              <li><a href="gerefavoris.php">Favoris</a></li>
              <li><a href="monpanier.php">Commandes</a></li>
              <li><a href="../controller/logout.php">Deconnexion</a></li>
              <!-- Dropdown Structure -->
              <ul id="dropdown1" class="dropdown-content">
                <li><a href="afficheusers.php">Gestion utilisateurs</a></li>
                <li class="divider"></li>
                <li><a href="affichemangas.php">Gestion mangas</a></li>
                <li class="divider"></li>
                <li><a href="#!">Gestion commandes</a></li>
              </ul>
          </ul>

          <!--Side nav-->
          <ul class="side-nav" id="mobile-demo">
              <li><a href="info.php">Infos personnels</a></li>
              <li><a class="dropdown-button" href="#!" data-activates="dropdown2">PolyGestion<i class="material-icons right">arrow_drop_down</i></a></li>
              <li><a href="gerefavoris.php">Favoris</a></li>
              <li><a href="monpanier.php">Commandes</a></li>
              <li><a href="../controller/logout.php">Deconnexion</a></li>
              <!-- Dropdown Structure -->
              <ul id="dropdown2" class="dropdown-content">
                <li><a href="afficheusers.php">Gestion utilisateurs</a></li>
                <li class="divider"></li>
                <li><a href="affichemangas.php">Gestion mangas</a></li>
                <li class="divider"></li>
                <li><a href="#!">Gestion commandes</a></li>
              </ul>
          </ul>
        </div>
      </nav>
</div>
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
      </script> ');
			}
			else{
				print (
					'<div class="navbar-fixed">
      <nav>
          <div class="nav-wrapper blue darken-4">
          <ul class="hide-on-med-and-down">
            <a href="acceuilabo.php" class="brand-logo" id = "icone">PolyMangas</a>
          </ul>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
              <li><a href="info.php">Infos personnels</a></li>
              <li><a href="affichemangas.php">Mangas</a></li>
              <li><a href="gerefavoris.php">Favoris</a></li>
              <li><a href="monpanier.php">Commandes</a></li>
              <li><a href="../controller/logout.php">Deconnexion</a></li>
          </ul>

          <!--Side nav-->
          <ul class="side-nav" id="mobile-demo">
              <li><a href="info.php">Infos personnels</a></li>
              <li><a href="affichemangas.php">Mangas</a></li>
              <li><a href="gerefavoris.php">Favoris</a></li>
              <li><a href="monpanier.php">Commandes</a></li>
              <li><a href="../controller/logout.php">Deconnexion</a></li>
          </ul>
        </div>
      </nav>
      </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      <script type="text/javascript">
        $(function(){
          $(".button-collapse").sideNav();
        });
      </script> ');
			}
	}
	else{
		header('Location: https://polymangas-igmangas.rhcloud.com/src/vue/signin.php');

	}
}
?>