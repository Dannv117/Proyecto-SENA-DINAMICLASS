<?php 
$servidor="localhost";
$usuario="root";
$clave="";
$basededatos="proyecto_senaplay";

     $con = mysqli_connect($servidor, $usuario, $clave, $basededatos);
if (!$con) {
    echo"error al conectar el servidor";
}


     session_start();




 
           $actializar_id =$_SESSION['idusuario'];
   
        
        $nombre = $_POST['nombre'];
        $año= $_POST['año_ficha'];
        $estado= $_POST['estado'];

  
    
    
        
  $insertar = "INSERT INTO ficha (nficha,año_ficha,estadoficha) VALUES ('$nombre','$año',' $estado')  ";
        
     if ($ejecutar = mysqli_query($con, $insertar)) {
        
        
        echo "<script>window.open('creargrupo.php','_self')</script>";


          
        }   
       else{
        echo "alert('los datos no se pudieron actualizar');";
       }
        


     ?>
