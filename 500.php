<html lang="fr">
	<!--   HEADER   -->
	<head>
		<title> Projet CIR 2 </title>
		<meta name="Auteur" content="Virgile SILVANT ,Josselin WALLAS et Jules LEFRANC">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<!-- optimized for mobile -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link href="./view/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	</head>
  <!--   BODY   -->
  <body>
    <div class="card-panel teal lighten-2">
      <h1 class="center">400 Bad Request</h1>
      <h2 class="center">Redirect within 5 secondes</h2>
    </div>
    <div class="container progress">
      <div class="indeterminate"></div>
    </div>
  </body>
</html>


<?php
  header("Refresh: 5; ./index.php");
?>

<html lang="fr">
<!--   BODY   -->
  <body>
    <!-- Scripts Materialize -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="./view/js/materialize.js"></script>
    <script src="./view/js/init.js"></script>
  </body>
</html>
