<?php

   session_start();

//   $esta_logado = isset($_SESSION['esta_logado']);
//
//   if ($esta_logado == false OR !$_SESSION['esta_logado'] == false){
//
//       //usuario nao logado
//     header( 'Location: login.php');
//}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">

	<title>Document</title>
</head>
<body>

	<div class="social">

		<a href="verifica_usuario.php?acao=sair" class="sair">sair</a>

        //copiar url da imagem
		<img src="http://senpuu.com.br/wp-content/uploads/2014/06/image.jpg" alt="" width="200" height="200">
		<h3>Bem vindo!</h3>
	</div>

</body>
</html>