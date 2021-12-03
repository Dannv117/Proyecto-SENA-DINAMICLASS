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



  ?>


<?php 
#codigo que sube las palabras a base de datos :3
 $id= $_POST['id'];
 $palabras= $_POST['palabras'];

      for ($i=0; $i <= $palabras; $i++) { 
       
       $name ="palabra".$i;

       $palabras1 = $_POST[$name];


        $actualizar = "INSERT INTO palabras (palabra) VALUES ('$palabras1')";
    
        $ejecutar = mysqli_query($con, $actualizar);

  
        $consulta = " SELECT  * FROM palabras WHERE   palabra='$palabras1'" ;      
			$ejecutar = mysqli_query($con, $consulta); 			
			$fila=mysqli_fetch_array($ejecutar);

          
        $crearasig ="INSERT INTO asignacionpala (idsopaFK,idpalabrasFK) VALUES($id,$fila[0])"  ;
        $ejercutarasig =mysqli_query($con,$crearasig);


       header('location:sopa.php?id='.$id);

       





      }

 ?>