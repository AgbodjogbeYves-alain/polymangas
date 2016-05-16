
<?php 
  include("../controller/controlecookie.php");
  ?>
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
        <link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css" >
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      	<!-- Personnale css -->
      	<link rel="stylesheet" href="../css/personalcss.css"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>

    <body>
    	<div class="navbar-fixed" >
    	<nav>
	   	  <div class="nav-wrapper blue darken-4" id = "navbar">
	   	  	<ul class="hide-on-med-and-down">
	      		 <a href="homepage.php" class="brand-logo" id = "icone">PolyMangas</a>
	      	</ul>
	      	<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
	      	<ul class="right hide-on-med-and-down">
	       		<li><a href="signup.php">Sign up</a></li>
           		<li><a href="signin.php">Sign in</a></li>
	      	</ul>
	      	<!--Side nav-->
	      	<ul class="side-nav" id="mobile-demo">
	        	<li><a href="signup.php">Sign up</a></li>
          		<li><a href="signin.php">Sign in</a></li>
	      	</ul>
	      </div>
	  	</nav>
  		</div>
	<!--Content-->
	<h1>Bienvenue sur Polymangas</h1>
    <h2>Le site de vos mangas favoris</h2>
	

	<!--Import jQuery before materialize.js-->
      	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      	<script type="text/javascript" src="../js/materialize.min.js"></script>
	    <script type="text/javascript">
	      $(function(){
	        $(".button-collapse").sideNav();
	      });
	    </script>

    </body>
</html>