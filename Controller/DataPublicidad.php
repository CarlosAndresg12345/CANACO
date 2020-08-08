<?php


$Usuario = $_POST['usuario'];
$Promocion = $_POST['Promocion'];
$Precio = $_POST['Precio'];
$Descripcion = $_POST['descripcion'];
$img = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));


include("../Model/ConPublicidad.php");

$Objeto = new Publicidad();
$Objeto->Insertar($Promocion,$Precio,$Descripcion,$Usuario,$img);
header('Location: ../View/Eventos.php');
 