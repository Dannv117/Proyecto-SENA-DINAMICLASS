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

$codigo=$_POST['ingrecodigo'];
$consulta="SELECT * FROM actividad WHERE codigo_actividad='$codigo'";

$ejecutarconsulta = mysqli_query($con,$consulta);
$verfilas = mysqli_num_rows($ejecutarconsulta);
$fila = mysqli_fetch_array($ejecutarconsulta);

if ($fila[3]=='sopa'){
    $consulta2="SELECT * FROM sopa_letras WHERE nombre_Actividad='$fila[1]'";

$ejecutarconsulta2 = mysqli_query($con,$consulta2);
$verfilas2 = mysqli_num_rows($ejecutarconsulta2);
$fila2 = mysqli_fetch_array($ejecutarconsulta2);


header('location:sopa.php?id='.$fila2[0]);
}else{
   if ($fila[3]=='pregunta'){
    $consulta2="SELECT * FROM preguntas WHERE nombre_actividad='$fila[1]'";

    $ejecutarconsulta2 = mysqli_query($con,$consulta2);
    $verfilas2 = mysqli_num_rows($ejecutarconsulta2);
    $fila2 = mysqli_fetch_array($ejecutarconsulta2);
    
    
    header('location:ver_pregu.php?id='.$fila2[0]);

   } else {
       echo 'No sirve esta monda :D';
   }

    
}

  ?>
