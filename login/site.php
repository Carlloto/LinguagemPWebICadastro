<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">	  
    <form class="form-signin">
		<?php 
			session_start();
			if(isset($_SESSION["usuario"]) ){ 
				echo("Seja Bem Vindo! ".$_SESSION["usuario"]);
			}
		?>
	</form>
  </body>
</html>
