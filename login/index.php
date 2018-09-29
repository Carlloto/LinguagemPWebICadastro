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
    <form class="form-signin" action="login.php" method="POST">
	  <?php 
		session_start();
		if(isset($_SESSION["resposta"]) ){ 
			echo($_SESSION["resposta"]);
		}
	  ?>
      <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Login</h1>
      <label for="inputLogin" class="sr-only">login</label>
      <input type="text" id="inputlogin" name="login" class="form-control" placeholder="Login" required autofocus>
      
	  <label for="inputPassword" class="sr-only">senha</label>
      <input type="senha" id="inputsenha" name="senha" class="form-control" placeholder="Senha" required>
      
	  <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value=""> lembrar senha
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>  
    </form>
  </body>
</html>
