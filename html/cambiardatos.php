
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
   
        
        $actualizar_nombre = $_POST['nombre'];
        $actualizar_apellido= $_POST['apellido'];
        $actualizar_correo = $_POST['correo'];

        $actualizar_telefono = $_POST['telefono']; 
    
    
        
  $actualizar = "UPDATE usuario SET nombre='$actualizar_nombre', apellido='$actualizar_apellido', correo='$actualizar_correo', telefono='$actualizar_telefono' WHERE idusuario='$actializar_id'";
        
     if ($ejecutar = mysqli_query($con, $actualizar)) {
        
        
        echo "<script>window.open('mi_perfil.php','_self')</script>";


          
        }   
       else{
        echo "alert('los datos no se pudieron actualizar');";
       }
        


     ?>
