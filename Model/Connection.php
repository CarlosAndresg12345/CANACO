<?php

// CLase COoeccion A La Base De datos
class ConecctionBD{
    protected $Connection;

    public function Coneccion()
    {
        $this->Connection = new mysqli('localhost', 'canaco', '12345', 'CANACO');
        if ($this->Connection->connect_error) {
            die('Error de Conexión ----------(' . $this->Connection->connect_errno . ') '.$this->Connection->connect_error);
        }
        
    }
 
}

// Clase # 1 - COntrol de Login
class LoginModel extends ConecctionBD{
    
    // Data Login 
    private $User;
    private $Socio;
    private $Administrador;

    // Setter and Getter Login
    function getUser() {  return $this->User; }
    function setUser($User) {  $this->User = $User;  }
    function getSocio() {  return $this->Socio; }
    function setSocio($Socio) {  $this->Socio = $Socio;  }

    // Method 
    public function ValidarInicioSesion($User, $Pass){

        $this->Coneccion();  
        $query = "SELECT usuario, contrasenia, numerosocio FROM USERS;"; 
        $result = mysqli_query($this->Connection, $query);   
        
       while($row = mysqli_fetch_array($result))
       {           
           if( $row["usuario"] == $User &&  $row["contrasenia"] == $Pass ){                
               if( $row['numerosocio'] > 0 ){
                   $this->setSocio(true);  
                   if ($row['numerosocio'] == 919191919){
                       $this->Administrador = true;
                   }else{
                    $this->Administrador = false;
                   }
               }else {
                   $this->setSocio(false);   
               }
               
               $this->setUser($row["usuario"]);                      
                mysqli_free_result($result);      
                mysqli_close($this->Connection); 
                return true;

           } 
        }     
        mysqli_free_result($result);      
        mysqli_close($this->Connection);         
        return false;

    }
    public function UsuarioAdministrador(){
        if($this->Administrador){
            return true;
        }else{
            return false;
        }

    }
    
}

// Clase #2  Creacion de Usuarios (Socios y No SOcios)
include_once("User.php");

class UsuariosCreacion extends ConecctionBD{

    
    public function Insertar($NumS){
        $conn = mysqli_connect('localhost', 'canaco', '12345', 'CANACO');
        // Check connection
        if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
        }
         
         
        $sql = 'INSERT INTO USERS (Nombre, usuario, contrasenia, telefono, direccion, email, numerosocio ) 
        VALUES ("'.
        $User->getName().'", "'.
        $User->getUser_().'","'.
        $User->getPassword() .'",'.
        $User->getTelephone().',"'.
        $User->getAddress().'","'.
        $User->getEmail().'",'. 
        $User->getNumberSocio().');';

        if (mysqli_query($conn, $sql)) {
              echo "New record created successfully";
        } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        
    }
    public function IndetificarSocio(){
        $this->Coneccion();  
        $query = "SELECT  numerosocio FROM USERS;"; 
        $result = mysqli_query($this->Connection, $query);   
        
        while($row = mysqli_fetch_array($result))
        {           
            if( $row["numerosocio"] == $NumS  ){                
                                 
                mysqli_free_result($result);      
                mysqli_close($this->Connection); 
                return true;

           } 
        }     
        mysqli_free_result($result);      
        mysqli_close($this->Connection);         
        return false;
    }
    public function Mostrar($usuario){
        $this->Coneccion();  
        $query = "SELECT  * FROM USERS where  usuario = '".$usuario."' ;"; 
        $result = mysqli_query($this->Connection, $query);   
       session_start();
        while($row = mysqli_fetch_array($result))
        {     
            
            $_SESSION['_id']=$row['id_User'];
            $_SESSION['Nombre']=$row['id_User'];
            $_SESSION['usuario']=$row['nombre'];
            $_SESSION['contrasenia']=$row['contrasenia'];
            $_SESSION['telefono']=$row['telefono'];
            $_SESSION['direccion']=$row['direccion'];
            $_SESSION['email']=$row['email'];
            $_SESSION['Numerosociombre']=$row['numerosocio'];

            

           
        }     
        mysqli_free_result($result);      
        mysqli_close($this->Connection);         
        return $Objeto;
    }
}

// Clase # 3 - Control de No socios
class CDNS extends ConecctionBD {   
    // Eliminar No Socio
    public function EliminarNoSocio($id){
        $this->Coneccion();  
        $this->sql = mysqli_query($this->Connection," DELETE FROM USERS  WHERE id_User = ".$id.";");
        if(!$this->sql)
            die("<h3>------------ERROR: al Eliminar Dato</h3>".mysqli_errno()); 
    }

    // Mostrar informacion 
    public function Inicio(){    
       $this->Coneccion();         
       $pagina = "";
       $registros = 10;
       $colores_filas=array('#531A1A', '#CE7216');
       $ind_colores=0;
       $cont_lineas=1;        
       if(isset($_GET['pagina']))
               $pagina = $_GET['pagina'];   
   
       if (!$pagina) 
       { 
           $inicio = 0; 
           $pagina = 1; 
       }  
       else
       { 
         $inicio = ($pagina - 1) * $registros; 
       } 
       $resultados = mysqli_query($this->Connection,"SELECT * from USERS;");   
       $total_registros = mysqli_num_rows($resultados); 
       $resultados = mysqli_query($this->Connection,"SELECT * FROM USERS ORDER BY nombre ASC   LIMIT $inicio, $registros");	
       $total_paginas = ceil($total_registros / $registros); 		  			
   
      if($total_registros) 
      {
   
          $colores_filas=array('#531A1A', '#CE7216');
          $ind_colores=0;
          $cont_lineas=1;     
          $Actu = "Actualizar";
          while ($row = mysqli_fetch_array($resultados))
          {
              if($row{'numerosocio'}==0){
                    $ind_colores++;
                    $ind_colores %= 2;
                    $dato=$row{'nombre'};
                    echo "<tr bgcolor=".$colores_filas[$ind_colores].">";
                          echo "<td>".$cont_lineas."</td>";
                          echo "<td>".$row['nombre']."</td>"; 
                          echo "<td>".$row['usuario']."</td>";  
                          echo "<td>".$row['contrasenia']."</td>"; 
                          echo "<td>".$row['telefono']."</td>"; 
                          echo "<td>".$row['direccion']."</td>";
                          echo "<td>".$row['email']."</td>";
                          echo "<td> <a href='../Controller/DataCreationUser.php?id=".$row['id_User']."&iden=Delete'> Eliminar </a> </td>";
                          
                    echo "</tr>";
                    $cont_lineas++;
              }              
          }
          if($cont_lineas==1) return false;
      } 
      else 
      {
         echo "<font color='darkgray'>(sin resultados)</font>";
      }
   
      mysqli_free_result($resultados);		
      echo "<div class='pagination'> 
                 <ul>";		      
      if($total_registros) 
      {	
         if(($pagina - 1) > 0)
         {
             echo "<li><a  href='ControlDeNoSocios.php?pagina=".($pagina-1)."'> Anterior</a> </li>";
         }
       
          for ($i=1; $i<=$total_paginas; $i++){ 
            if ($pagina == $i) 
                echo "<li> <b>".$pagina."</b></li>"; 
              else
                  echo "<li><a href='ControlDeNoSocios.php?pagina=$i'>$i</a> </li>"; 
         }	   
         if(($pagina + 1)<=$total_paginas) 
         {
            echo "<li><a href='ControlDeNoSocios.php?pagina=".($pagina+1)."'>Siguiente </a></li>";
         }
       
        
       
          }
          echo "   </ul>
               </div>";	
       echo "<center>Total de registros: $total_registros ";
       echo "Inicio: $inicio ";
       echo "Registros: $registros ";
       echo "No de Pagina: $pagina </center>";
   
   
    }

  
}

// CLase # 4 - Control de Socios 
class CDS extends ConecctionBD {
 

    // Crear Socio
    public function CrearSocioEm($Nombre, $Empresa,$Giro,$NumeroS){
        $this->Coneccion(); 

        $sql = 'INSERT INTO SOCIOS ( Nombre , NombreEmpresa , Giro, numerosocio ) 
        VALUES ("'.$Nombre.'",
                "'.$Empresa.'",
                "'.$Giro.'",
                 '.$NumeroS.');';       

        if (mysqli_query($this->Connection, $sql)) {
              echo "New record created successfully";
        } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($this->Connection);
        }
        mysqli_close($this->Connection);
    }
        // Mostrar informacion
    public function Inicio(){    
            $this->Coneccion();     
            $pagina = "";
            $registros = 10;
            $colores_filas=array('#531A1A', '#CE7216');
            $ind_colores=0;
            $cont_lineas=1;     
    
            if(isset($_GET['pagina']))
                $pagina = $_GET['pagina'];
    
            if (!$pagina) 
            { 
                $inicio = 0; 
                $pagina = 1; 
            }  
            else
            { 
                $inicio = ($pagina - 1) * $registros; 
            } 
            $resultados = mysqli_query($this->Connection,"SELECT * from SOCIOS;");   
            $total_registros = mysqli_num_rows($resultados); 
            $resultados = mysqli_query($this->Connection,"SELECT * FROM SOCIOS ORDER BY Nombre ASC   LIMIT $inicio, $registros");	
            $total_paginas = ceil($total_registros / $registros); 		  			
    
            if($total_registros) 
            {
    
                $colores_filas=array('#531A1A', '#CE7216');
                $ind_colores=0;
                $cont_lineas=1;     
                $Actu = "Actualizar";
                while ($row = mysqli_fetch_array($resultados))
                {
                    $ind_colores++;
                    $ind_colores %= 2;
                    $dato=$row{'Nombre'};
                    echo "<tr bgcolor=".$colores_filas[$ind_colores].">";
                         echo "<td>".$cont_lineas."</td>";
                         echo "<td>".$row['Nombre']."</td>"; 
                         echo "<td>".$row['NombreEmpresa']."</td>";  
                         echo "<td>".$row['Giro']."</td>"; 
                         echo "<td>".$row['numerosocio']."</td>"; 
                         echo "<td> <a href='RegistrosEmpleados.php?nombre=".$row['Nombre']."&empresa=".$row['NombreEmpresa']."&Giro=".$row['Giro']."&numerosocio=".$row['numerosocio']."&numseguro=".$row['numseguro']."&iden=Delete'> Actualizar </a></td>";
                         echo "<td> <a href='../Controller/DataCreacionDeSocios.php?numerosocio=".$row['numerosocio']."&iden=Delete'> Eliminar </a> </td>";
                         
                         
                    echo "</tr>";
                    $cont_lineas++;
                }
                if($cont_lineas==1) return false;
            } 
            else{
                echo "<font color='darkgray'>(sin resultados)</font>";
            }
            mysqli_free_result($resultados);		
            echo "<div class='pagination'> 
                  <ul>";		
       
            if($total_registros) 
            {	
                if(($pagina - 1) > 0)
                {
                    echo "<li><a  href='RegistrosEmpleados.php?pagina=".($pagina-1)."'> Anterior</a> </li>";
                }    
                for ($i=1; $i<=$total_paginas; $i++){ 
                    if ($pagina == $i) 
                        echo "<li> <b>".$pagina."</b></li>"; 
                    else
                        echo "<li><a href='RegistrosEmpleados.php?pagina=$i'>$i</a> </li>"; 
            }     	   
            if(($pagina + 1)<=$total_paginas) 
            {
               echo "<li><a href='RegistrosEmpleados.php?pagina=".($pagina+1)."'>Siguiente </a></li>";
            }
        
         
        
            }
            echo "   </ul>
                </div>";	
            echo "<center>Total de registros: $total_registros ";
            echo "Inicio: $inicio ";
            echo "Registros: $registros ";
            echo "No de Pagina: $pagina </center>";
    
    
    }    
     // Eliminar  Socio 
    public function EliminarSocio($id){
        $this->Coneccion();  
        $this->sql = mysqli_query($this->Connection," DELETE FROM SOCIOS  WHERE numerosocio = ".$id.";");
        if(!$this->sql)
            die("<h3>ERROR: al Eliminar Dato</h3>".mysqli_errno()); 
    }
    // Actualizar Socio
    public function ActualizarSocio($id,$Nombre, $Empresa, $Giro, $NumeroS){

    }
}

// Clase # 5 - Control de Publicidad
class CDPublicidad extends ConecctionBD {

    // Mostrar informacion
    public function Inicio(){
        
    }
    public function CrearPublicidad(){
        
    }

}

// Clase # 5 - Control de Eventos
class CDEventos extends ConecctionBD {

    // Mostrar informacion
    public function Inicio(){
        
    }
    public function CrearEventos(){
        
    }

}