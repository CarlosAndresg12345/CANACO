<?php


include_once("../Model/User.php");
include_once("../Model/Connection.php");

$User = new User();

// Validando Identificado Eliminar - Actualizar - Crear 
if(isset($_GET['iden']) ){
    if($_GET['iden'] == "Delete"){
      $id = $_GET['id'];
      $Objeto = new CDNS();
      $Objeto->EliminarNoSocio($id);
      header('Location: ../View/ControlDeNoSocios.php');
  
    }else if($_GET['iden'] == "Update"){ 
     

  } 
}else{
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
  $sql = 'INSERT INTO USERS (Nombre, usuario, contrasenia, telefono, direccion, email, numerosocio ) VALUES ("'.$User->getName().'", "'.$User->getUser_().'","'.$User->getPassword() .'",'.$User->getTelephone().',"'.$User->getAddress().'","'.$User->getEmail().'",'.$User->getNumberSocio().');';
  if (mysqli_query($conn, $sql)) {  echo "New record created successfully";} else {  echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
  mysqli_close($conn);
  header('Location: ../View/index.php');
}


