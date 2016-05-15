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
      <h1>Enregistrez le nouvel admin</h1>

      <!--Content-->
          <div class="row">
        <form class="col s9" method="POST" action="../controller/signupadmin.php">
          <div class="row">
            <div class="input-field col s9" >
              <input id="first_name" type="text" class="validate" required name="first_name" pattern='.{0,20}'>
              <label class="active" for="first_name">First Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
                <input id="last_name" type="text" class="validate" required name="last_name" pattern='.{0,20}'>
                <label class="active" for="last_name">Last Name</label>
            </div>
          </div> 
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
            <div class="input-field col s9">
              <input id="email" type="email" required name="email" class="validate">
              <label class="active" for="email">Email</label>
            </div>
          </div>
          <div class="row">
          <div class="input-field col s9">
              <input id="date" type="date" required name="datenaiss" class="datepicker">
              <label class="active" for="datepicker">Birthday date</label>
            </div>
          </div>
           <div class="row">
          <div class="input-field col s9">
              <input id="numrue" type="number" required name="numrue" min="0" class="validate">
              <label class="active" for="numrue">Numero Rue</label>
            </div>
          </div>
           <div class="row">
          <div class="input-field col s9">
              <input id="libellerue" type="text" required name="libellerue" class="validate" pattern='.{0,20}'>
              <label class="active" for="libellerue">Libelle de Rue</label>
            </div>
          </div>
           <div class="row">
          <div class="input-field col s9">
              <input id="ville" type="text" class="validate" required name="ville" pattern='.{0,20}'>
              <label class="active" for="ville">Ville</label>
            </div>
          </div>
           <div class="row">
          <div class="input-field col s9" pattern='.{0,20}'>
              <input id="pays" type="text" required name="pays" class="validate">
              <label class="active" for="pays">Pays</label>
            </div>
          </div>
        <div class="row">
          <div>
            <button>
              <a class="waves-effect waves-light btn" type="submit" name="action">Validate
              <i class="material-icons right">done</i></a>
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
      <script type="text/javascript">
         $('.datepicker').pickadate({
         selectMonths: true, // Creates a dropdown to control month
         selectYears: 20 // Creates a dropdown of 15 years to control year
      });
     </script>



    </body>
</html>