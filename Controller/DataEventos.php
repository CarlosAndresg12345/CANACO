<?php

$Usuario = $_POST['usuario'];
$NombreEvento = $_POST['nombreEvento'];
$Descripcion = $_POST['descripcion'];
$FechaInicio = $_POST['FechaInicio'];
$FechaFinalizacion = $_POST['FechaFinalizacion'];
$Direccion = $_POST['direccion'];
$img = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

include("../Model/ConEventos.php");
echo $Usuario." - ".$NombreEvento." - ".$Descripcion." - ".$FechaInicio ." - ".$FechaFinalizacion." - ".$Direccion."---";
$Objeto = new Eveto();
$Objeto->Insertar($FechaInicio,$FechaFinalizacion, $NombreEvento, $Direccion,$Descripcion,$Usuario, $img);
header('Location: ../View/Eventos.php');
 