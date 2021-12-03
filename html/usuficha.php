<html>
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, AdminWrap lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, AdminWrap lite design, AdminWrap lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="AdminWrap Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>DINAMICLASS</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo1.png">
    <!-- Bootstrap Core CSS -->
    <link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    
<![endif]-->
</head>
<?php 

echo "<br><br><br><br><br><br><br><br><br><br>	 <div class='col-sm-12'>
                    <a href=' ' class='ctadatos'><h6 class='btn waves-effect waves-light btn btn-info pull-right hidden-sm-down text-white'>Añadir usuario</h6></a>
                </div>";

		if(isset($_GET['editar'])){
			

		   $id_ficha =  $_GET['editar'];


 $consulta = " SELECT  * from ficha WHERE   idficha=".$id_ficha ;
   $ejecutarconsulta = mysqli_query($con,$consulta);
               $verfilas = mysqli_num_rows($ejecutarconsulta);
               $fila = mysqli_fetch_array($ejecutarconsulta);

		   echo "

<center><h3>Usuarios de la ficha ".$fila[1]." </h3></center><br><br>
 <table class='table'>
                                        
                                        
        <tr>
          <th>ID</th>
          <th>Nombre del Usuario</th>
          <th>Correo</th>
          <th>Quitarlo</th>
          
       <tr>
       

		   ";



			}
?>
		

	




 <?php 
                

                           $consulta = " SELECT idusuario,nombre,apellido,correo,idasignacionficha FROM asignacion_ficha INNER JOIN  ficha on asignacion_ficha.idfichaFK = ficha.idficha INNER JOIN  usuario on  asignacion_ficha.idusuarioFK =  usuario.idusuario WHERE estado ='activo' AND idfichaFK = ' $id_ficha' ";

               $ejecutarconsulta = mysqli_query($con,$consulta);
               $verfilas = mysqli_num_rows($ejecutarconsulta);
               $fila = mysqli_fetch_array($ejecutarconsulta);

               if (!$ejecutarconsulta) {
                echo "error de consulta";

               }else{
                  if ($verfilas<1) {
                  echo "<tr><td>sin registros</td></tr>";
                }else{
                  for($i =0; $i<=$fila; $i++){
                      
                     echo "<tr>";  

                          echo" <td>";  echo $fila[0];  echo "</td>";
                          echo "<td>";  echo $fila[1]." ".$fila[2] ;  echo "</td>";
                           echo "<td>";  echo  $fila[3];   echo "</td>";
  
                       
                          echo "<td> <a href='creargrupo.php?no=".$fila[4]."''><button type='button' class='btn waves-effect waves-light btn-info hidden-md-down text-white'>Eliminar</button></a> </td>";
                     echo "</tr>";   

                      
                       $fila = mysqli_fetch_array($ejecutarconsulta);

                  }
                }

               }
               
               ?>     
      
    





	  </table>
<?php 	

  if(isset($_GET['no'])){
  
  $borrar_id = $_GET['no'];
  
  $borrar = "UPDATE asignacion_ficha SET estado ='inactivo' WHERE idasignacionficha = $borrar_id";

    

    if( $ejecutar = mysqli_query($con,$borrar)){
    
    echo "<script>alert('El usuario ha sido borrado!')</script>";
    echo "<script>window.open('creargrupo.php?no=".$fila[4]."','_self')</script>";
    }
     else{
      
      echo "no sirve";

     }
  }

 ?>





	    <script src="../assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/node_modules/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

  <script type="text/javascript"src="js/modal.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>