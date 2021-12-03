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







 $consulta = " SELECT  * from usuario WHERE   idusuario=".$_SESSION['idusuario'] ;
   $ejecutarconsulta = mysqli_query($con,$consulta);
               $verfilas = mysqli_num_rows($ejecutarconsulta);
               $fila = mysqli_fetch_array($ejecutarconsulta);

$id=$_SESSION['idusuario'];
  $nombre=$fila['nombre'];
$apellido=$fila['apellido'];
$correo=$fila['correo'];
$telefono=$fila['telefono'];
$id_cargoFK=$fila['id_cargoFK'];
$imagen=$fila['imagen'];
$pass=$fila['pass'];


$contractual=$_POST['contraactual'];
$contra1=$_POST['contra1'];
$contra2=$_POST['contra2'];

if ($contractual==$pass) {
	
     if ($contra1==$contra2) {

     	$actualizar = "UPDATE usuario SET pass='$contra1' WHERE idusuario='$id'";
     	if ($ejecutar = mysqli_query($con, $actualizar)) {
	 	
        echo "<script>alert('Datos actualizados!')</script>";
		echo "<script>window.open('tabla.php','_self')</script>";
@session_start();
session_destroy();
header("Location: login.php");

          
	 	}	
		
	 }else{
        ?>

        <script>
        alert('no coinciden las contraseñas');
        function redireccionar(){window.location="mi_perfil.php";}
        setTimeout ("redireccionar()", 500);
        </script>

	  <?php 	
	 }	

} else{
 ?>

        <script>
        alert('su contraseña es incorrecta');
        function redireccionar(){window.location="mi_perfil.php";}
        setTimeout ("redireccionar()", 500);
        </script>

 <?php 
}

 ?>
