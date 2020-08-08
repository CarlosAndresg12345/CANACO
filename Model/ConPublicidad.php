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

class Publicidad extends ConecctionBD {

    public function Inicio(){
        $this->Coneccion(); 
        $query = "SELECT Fecha, Promocion,Precio,Descripcion,Imagen,Usuario_id FROM Promociones ORDER BY TIMESTAMP(Fecha) DESC;"; 
        $result = mysqli_query($this->Connection, $query);   
        session_start();
        $Contadorp = 0;
        while($row = mysqli_fetch_array($result))
        {    
            $Contadorp++;
            ?>
            <div class="carrusel-item w-full min-w-full text-center  relative">
                <h5>Usuario: <?php echo $row['Usuario_id']; ?> </h5>
                <h5>Promocion: <?php echo $row['Promocion']; ?>  </h5>
                <p>Costo $ <?php echo $row['Precio']; ?>		
                <p><?php echo $row['Descripcion']; ?></p>

				<div class="block h-full w-full text-white text-5xl text-center">                
                    <a href=""> <img class="mx-auto"  src="data:image/png;base64,<?php echo base64_encode($row['Imagen']);?> "   width="700" ></a>
				</div>
            </div>
                      
			
           <?php
        }   
        $_SESSION['contadorp']=$Contadorp;  
        mysqli_free_result($result);      
        mysqli_close($this->Connection);    

    }
    public function Insertar($Pom,$Prec,$Desc,$Usur,$Imagen){
        $this->Coneccion(); 
        $sql = 'INSERT INTO Promociones (  Promocion , Precio, Descripcion, Usuario_id, Imagen ) 
        VALUES ("'.$Pom.'",
                '.$Prec.',
                "'.$Desc.'",
                "'.$Usur.'",
                "'.$Imagen.'"
                 );';       

        if (mysqli_query($this->Connection, $sql)) {
              echo "New record created successfully";
        } else {
              echo "Error: <br>" . mysqli_error($this->Connection);
        }
        mysqli_close($this->Connection);

    
        
    }
}
/*
 <article>	            	
	            <section>
		            <div class="avatar">		            	
			                <div class="action">
                                <h3>Usuario: <?php echo $row['Usuario_id']; ?> </h3>
                                <h3>Promocion: <?php echo $row['Promocion']; ?> </h3>
                                <h3>Costo $ <?php echo $row['Precio']; ?> </h3>				               
				                <h3>Publicado: <?php echo $row['Fecha']; ?></h3>
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
                    <img src="data:image/png;base64,<?php echo base64_encode($row['Imagen']);?> "   width="400" height="300">
		            <div class="like_tools">
		            	<a href="#" class="like_button">Me gusta</a>
			            <a href="#" class="dislike_button">No me gusta</a>
		            </div>
	            </section>
            </article>   
