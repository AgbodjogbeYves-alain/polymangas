<?php require("../controller/acceuilabo.php");?>
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
  <div class="row">
        <form class="col s9" method="POST" action="../controller/ajoutmanga.php">
          <div class="row">
            <div class="input-field col s9">
              <input id="titre" type="text" class="validate" required name="titre">
              <label class="active" for="titre">Titre Manga</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <input id="dessinateur" type="text" required name="dessinateur" class="validate">
              <label class="active" for="dessinateur">Dessinateur</label>
            </div>
          </div>
           <div class="row">
          <div class="input-field col s9">
              <input id="editeur" type="text" required name="editeur" class="validate">
              <label class="active" for="editeur">Editeur</label>
            </div>
          </div>
           <div class="row">
          <div class="input-field col s9">
              <input id="image" type="text" name="img" class="validate">
              <label class="active" for="image">URL image du manga/label>
            </div>
          </div>
           <div class="row">
          <div class="input-field col s9">
              <input id="descrip" type="text" class="validate" required name="description">
              <label class="active" for="descrip">Description</label>
            </div>
          </div>
        <div class="row">
          <div>
            <button>
              <a class="waves-effect waves-light btn" type="submit" name="action">Créer Manga</a>
              <i class="material-icons right">done</i>
            </button>
          </div>
        </div>
        </form>
      </div>
 </body>
</html>