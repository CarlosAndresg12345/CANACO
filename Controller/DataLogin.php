<?php
 session_start();




include('../Model/Connection.php');

$Obj = new LoginModel();

if($Obj->ValidarInicioSesion($_POST['Usuario'], $_POST['passwd']) == true  ){
    
    $_SESSION['usuario']= $Obj->getUser();
    $_SESSION['Socio'] = $Obj->getSocio();
    if($Obj->UsuarioAdministrador()){
        $_SESSION['tipodeusuario'] = "Administradir";
    }
    header('Location: ../View/index.php');
}else{
    header('Location: ../View/Login.php');
 
}


