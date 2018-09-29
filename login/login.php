<?php
if (!isset($_SESSION)) {
  session_start();
}

define("USUARIO", "teoria"); //Usuario para logar
define("SENHA", "pratica"); //Senha do usuário

$login = $_POST["login"];
$senha = $_POST["senha"];

if(isset($login) && isset($senha)){
	if($login == USUARIO && $senha == SENHA){
		$_SESSION["usuario"] = USUARIO;
		header("location:/login/site.php");
	} else {
		$_SESSION["resposta"] = "Usuário ou Senha Inválido";
		header("location:/login/index.php");
	}
}
?>