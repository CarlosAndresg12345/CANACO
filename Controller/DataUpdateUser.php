<?php


include_once("../Model/User.php");
include_once("../Model/Connection.php");

$User = new User();

// Validando Identificado Eliminar - Actualizar - Crear 

// Crear Usuario
if($_POST['telefono'] == null){ // Validador de Telefono
  $User ->setTelephone(0);
 }else{
  $User ->setTelephone($_POST['telefono']);
}

if($_POST['Numsocio'] == null){  // Validador de Numero de Socio
  $User ->setNumberSocio(0); // Valor en 0
}else{
  $Numso = $_POST['Numsocio'];
  // Numero de socio es 
  $ObjCon1 = new UsuariosCreacion();
  if($ObjCon1->IndetificarSocio($Numso)) // Identificacion si existe el numero de socio
  {
    $User ->setNumberSocio($Numso);
  }else{
    header('Location: ../View/Cuenta.php');
  }   
}

$User ->setid( $_POST['id']);
$User ->setName( $_POST['nombre']);
$User ->setPassword($_POST['pass']);
$User ->setUser_($_POST['usuario']);
$User ->setAddress($_POST['direccion']);
$User ->setEmail($_POST['correo']);
/*
$ObjCon = new UsuariosCreacion();
$ObjCon->Insertar($Usuario);*/


// Coneccion Momentania
$conn = mysqli_connect('localhost', 'canaco', '12345', 'CANACO');
if (!$conn) {      die("Connection failed: " . mysqli_connect_error());}
$sql = 'UPDATE USERS 
SET 
nombre = "'.$User->getName().'" , 
usuario = "'.$User->getUser_().'", 
contrasenia = "'.$User->getPassword() .'", 
telefono = '.$User->getTelephone().', 
direccion = "'.$User->getAddress().'", 
email = "'.$User->getEmail().'", 
numerosocio = '.$User->getNumberSocio().' WHERE id_User = '.$User->getid().' ;

';
if (mysqli_query($conn, $sql)) {  echo "New record created successfully";} else {  echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
mysqli_close($conn);
header('Location: ../View/index.php');



