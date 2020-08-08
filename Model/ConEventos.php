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

class Eveto extends ConecctionBD{

    public function Inicio(){
        $this->Coneccion(); 
        $query = "SELECT Fecha_publicacion, Fecha_inicio,Fecha_Finalizacion,NombreEvento,Direccion,Descripcion,Usuario_id,Imagen FROM Evento ORDER BY TIMESTAMP(Fecha_publicacion) DESC;"; 
        $result = mysqli_query($this->Connection, $query);   
        session_start();
        $Contador = 0;
        while($row = mysqli_fetch_array($result))
        {    
            $Contador++;
           ?>
           
           
            <div class="contendo carrusel-item w-full min-w-full text-center  relative" >
            
                <h2>Usuario: <?php echo $row['Usuario_id']; ?> </h2>
                <h3>Evento: <?php echo $row['NombreEvento']; ?> </h3>
                <p>Desde - <?php echo $row['Fecha_inicio']; ?>  Hasta - <?php echo $row['Fecha_Finalizacion']; ?></p>		
                <p class="artice"> <?php echo $row['Descripcion']; ?></p>
				<div class="block h-full w-full text-white text-5xl text-center">
                    <a href=""> <img class="mx-auto"  src="data:image/png;base64,<?php echo base64_encode($row['Imagen']);?> "   width="800" ></a>
                    
                </div>
          
            </div>
      
                      
			
           <?php
        }  
        $_SESSION['contador']=$Contador;
        mysqli_free_result($result);      
        mysqli_close($this->Connection); 

    }

  

       
    public function Insertar($fecI,$fecF, $NomE, $Direc,$Desc,$Usu, $imagen){
        $this->Coneccion(); 
        $sql = 'INSERT INTO Evento (  Fecha_inicio , Fecha_Finalizacion, NombreEvento, Direccion,Descripcion,Usuario_id, imagen ) 
        VALUES ("'.$fecI.'",
                "'.$fecF.'",
                "'.$NomE.'",
                "'.$Direc.'",
                "'.$Desc.'",
                "'.$Usu.'",
                "'.$imagen.'"
                 );';       

        if (mysqli_query($this->Connection, $sql)) {
              echo "New record created successfully";
        } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($this->Connection);
        }
        mysqli_close($this->Connection);

    }
}

/*
 <div class="carrusel-item w-full min-w-full relative">						     	
			        <div class="action">
                        <h3>Usuario: <?php echo $row['Usuario_id']; ?> </h3>
                        <h3>Evento: <?php echo $row['NombreEvento']; ?> </h3>
                        <h3>Desde - <?php echo $row['Fecha_inicio']; ?> </h3>		
                         <h3>Hasta - <?php echo $row['Fecha_Finalizacion']; ?> </h3>			               
				                
			        </div>
                    <div >                            
			            	    
			        </div>
			            <div style="clear:both;"></div>
		            </div>
		                    <div class="status">
                                <h3> Descripcion </h3>
			                    <p>
                                    <?php echo $row['Descripcion']; ?>
			                     </p>
		                    </div>
                            <img class="mx-auto"  width="780" src="data:image/png;base64,<?php echo base64_encode($row['Imagen']);?> "   width="400" height="300">
		                    <div class="like_tools">		                    	
                                 <p>Publicado : <?php echo $row['Fecha_publicacion']; ?></p>
		                    </div>
	            </div>