<?php

   session_start();

 function login(){

     $lista_usuarios   = file_get_contents("usuarios.json");
     $lista_usuarios_d = json_decode($lista_usuarios , true);

     $fez_login = false;

     foreach ($lista_usuarios_d as $usuario){

             if ($_POST['login'] == $usuario['usuario'] && $_POST['senha'] == $usuario ['senha']) {

                 $fez_login = true;

                 $_SESSION['usuario'] = $_POST['usuario'];
                 $_SESSION['login'] = $_POST['login'];
                 $_SESSION['senha'] = $_POST['senha'];

                 $_SESSION['esta_logado'] = true;

                 //redireciona o usuario

                 header('Location: index.php');
             }

     }

     if ($fez_login == false){

         header('Location : login.php');
     }
 }

    function sair(){

	    session_destroy();
	    header('Location:login.php');
    }


    //rotas

    if ($_GET['acao'] == "login"){
        login();

    }elseif($_GET['acao']=='sair'){
        sair();
    }