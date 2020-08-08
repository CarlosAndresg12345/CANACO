<?php

include("../Model/Connection.php");

if(isset($_GET['iden']) ){
    if($_GET['iden'] == "Delete"){
        $NumSOcio = $_GET['numerosocio'];
        $Objeto = new CDS();
        $Objeto->EliminarSocio($NumSOcio);
        header('Location: ../View/ControlDeSocios.php');
    
    }if($_GET['iden'] == "Update"){ 
        $id = $_GET['id'];
        $Nombre = $_GET['nombre'];
        $Empresa = $_GET['empresa'];
        $Giro = $_GET['giro'];
        $NumeroS = $_GET['numeros'];
        $Objeto = new CDS();
        $Objeto->ActualizarSocio($id,$Nombre, $Empresa, $Giro, $NumeroS);
        header('Location: ../View/ControlDeSocios.php');

    } 
}
 // Creando usuario
 $Nombre = $_POST['nombre'];
 $Empresa = $_POST['empresa'];
 $Giro = $_POST['giro'];
 $NumeroS = $_POST['numeros'];
 $Objeto = new CDS();
 $Objeto->CrearSocioEm($Nombre, $Empresa, $Giro, $NumeroS);
 header('Location: ../View/ControlDeSocios.php');


 




