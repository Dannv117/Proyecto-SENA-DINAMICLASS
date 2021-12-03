<?php
#traer datos guardados en session star
session_start();
$id=$_SESSION['idusuario'];
 

#inicio de la conexion de la base de datos :3

$servidor="localhost";
$usuario="root";
$clave="";
$basededatos="proyecto_senaplay";

     $con = mysqli_connect($servidor, $usuario, $clave, $basededatos);
if (!$con) {
    echo"error al conectar el servidor";
}
#final de la conexion de la base de datos :3

       $foto = $_FILES['nfoto'];
      echo $foto['tmp_name'] ;
     $directori_destino ="../assets/images/users";

		$tmp_name = $foto['tmp_name'];
		

            $img_file =  $foto['name'];
            $img_type =  $foto['type'];


        if (((strpos($img_type,"gif")||strpos($img_type,"jpeg")||strpos($img_type,"jpg")||strpos($img_type, "png")))) {
            $destino= $directori_destino. "/" .$img_file;
            mysqli_query($con,"UPDATE usuario SET imagen = '$destino' WHERE idusuario ='$id'; ");
  
    
          move_uploaded_file($tmp_name,$destino);
        
           
             header("Location: miperfil.php");
              
          

             } else {

             ?>
        <script>
        alert('La Foto no pudo Actualizarse');
        function redireccionar(){window.location="miperfil.php";}
        setTimeout ("redireccionar()", 500);
        </script>

  <?php 
             }

      	


	 ?> 




 







   
