<?php include("../controller/controlecookie.php");?>

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
            <a href="homepage.php" class="brand-logo" id = "icone">PolyMangas</a>
          </ul>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
              <li><a href="signup.php">Sign up</a></li>
          </ul>
          <!--Side nav-->
          <ul class="side-nav" id="mobile-demo">
              <li><a href="signup.php">Sign up</a></li>
          </ul>
        </div>
      </nav>
      </div>
      <h1>Veuillez vous identifier pour acceder au contenu</h1>

      <!--Content-->
          <div class="row">
        <form class="col s9" method="POST" action="../controller/signin.php">
        <div class="row">
            <div class="input-field col s9">
                <input id="pseudo" type="text" class="validate" required name="pseudo" pattern='.{0,20}'>
                <label class="active" for="pseudo">Pseudo</label>
            </div>
          </div>   
          <div class="row">
            <div class="input-field col s9">
              <input id="password" type="password" class="validate" pattern='.{8,20}' required name="password" title="Password with 8 characters minimum.">
              <label class="active" for="password">Password</label>
            </div>
          </div>
          <div class="row">
          <div>
            <button>
              <a class="waves-effect waves-light btn" type="submit" name="action">Validate</a>
              <i class="material-icons right">done</i>
            </button>
          </div>
        </div>
         </form>
      </div>

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