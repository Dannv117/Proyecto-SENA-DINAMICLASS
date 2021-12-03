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
$idusu=$fila[0];


  $nombre=$_GET['nombre'];
     $consulta1 = " SELECT  * FROM preguntas WHERE nombre_actividad='$nombre'  " ;      
            $ejecutar1 = mysqli_query($con, $consulta1);          
            $fila1=mysqli_fetch_array($ejecutar1);

$imagen=$fila['imagen'];

?>



<!DOCTYPE html>
<html lang="en">

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
    <title>Preguntas múltiples</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logodc.png">
    <!-- Bootstrap Core CSS -->
    <link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/preguntas.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    
<![endif]-->
</head>

<body class="fix-header card-no-border fix-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Instructor</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logodc.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            
                        </b>
                        <!--End Logo icon -->
                                                  <!-- Light Logo text -->
                        
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark"
                                href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-xs-down search-box"> <a
                                class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i
                                    class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a
                                    class="srh-btn"><i class="fa fa-times"></i></a></form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="mi_perfil.php"
                                id="navbarDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                               src="<?php   echo $imagen; ?>" class="img-circle"
                                        width="25" />
                            <span class="hidden-md-down"> <?php  echo"<h7>". $fila[1]."</h7>";?></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="instru.php" aria-expanded="false"><i
                                    class="fa fa-tachometer"></i><span class="hide-menu">Inicio</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="miperfil.php" aria-expanded="false"><i
                                    class="fa fa-user-circle-o"></i><span class="hide-menu">Mi Perfil</span></a>
                        </li>
                         <li> <a class="waves-effect waves-dark" href="vfbfb" aria-expanded="false"><i
                                    class="fa fa-user-circle-o"></i><span class="hide-menu">Ver Actividades</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="creacionacti.php" aria-expanded="false"><i
                            class="fa fa-table"></i><span class="hide-menu">Crear Actividad</span></a>

                        <li> <a class="waves-effect waves-dark" href="verusua.php" aria-expanded="false"><i
                                    class="fa fa-table"></i><span class="hide-menu">Ver Usuarios</span></a>
                        </li>
                       <li> <a class="waves-effect waves-dark" href="table-basic.html" aria-expanded="false"><i
                                    class="fa fa-table"></i><span class="hide-menu"> Configurar Pausas</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="creargrupo.php" aria-expanded="false"><i
                                    class="fa fa-table"></i><span class="hide-menu">Crear Grupo</span></a>
                        </li>

                        <li> <a class="waves-effect waves-dark" href="cerrar.php" aria-expanded="false"><i
                                    class="fa fa-smile-o"></i><span class="hide-menu">Cerrar Sesión</span></a>
                        </li>

                    </ul>
                    
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Creación de actividad</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active"><a href="creacionacti.php"> Crear Actividad</a></li>
                            <li class="breadcrumb-item active"><a href="crearpreguntas.php">Preguntas múltiples</a></li>
                        </ol>
                    </div>
                    
                </div>


<form method="POST" class="tablapre">  
<center>   <label>  2. Dale <STRONG>"añadir"</STRONG>para agregar mas preguntas </label><br> <br><br>
<input type="text" id="intento" name="intento" value="<?php echo $nombre; ?>" disabled="">
<center >  <a href=""class="añadir"><img src="../assets/images/plus.svg" >Añadir</a></center>
<div class="tabla">	
    <center> <table class="table table-#bdecb6 table-striped">
        <tr>
          <th class="numero">Numero</th>
          <th>pregunta</th>
          <th class="respuesta">Respuesta</th>

        </tr>

<?php 
    $consulta = " SELECT idasignacionpreg,preguntasFK,idpreguntarepFK,pregunta,respuestac from asignacionpreg INNER JOIN preguntarep on asignacionpreg.idpreguntarepFK = preguntarep.idpreguntarep inner join preguntas on asignacionpreg.preguntasFK = preguntas.idpreguntas where nombre_actividad='$nombre'";
      $ejecutarconsulta = mysqli_query($con,$consulta);
               $verfilas = mysqli_num_rows($ejecutarconsulta);
               $fila = mysqli_fetch_array($ejecutarconsulta);

               if (!$ejecutarconsulta) {
                echo "error de consulta";

               }else{
                  if ($verfilas<1) {
                  echo "<tr><td></td><td>sin registros</td><td></td></tr>";
                }else{
                	
                  for($i =0; $i<=$fila; $i++){
                      
                    
                     echo "<tr>";  

                          echo" <td>";  echo $fila[0];  echo "</td>";
                          echo "<td>";  echo $fila[3];  echo "</td>";
                           echo "<td>";  echo $fila[4];  echo "</td>";

                     echo "</tr>";   

                      
                       $fila = mysqli_fetch_array($ejecutarconsulta);

                  }
                }

               }


 ?>

     	</table></center>
</div>
<a href="login.php" class="cta">Guardar</a><a class="cta" href="añadirpregu.php?nombre=<?php  echo $nombre;?>">Mostrar cambios</a></center>
</form>


 <!-- De aqui pa abajo es la ventana modal-->


    <div class="modalre-containerre">
      <div class="modalre modalre-closere">
        <p class="closere">X</p>
          <div class="modal-textos">


                 
          <h2> Elige  el tipo de tu pregunta</h2><br> <br>  

          <button type="submit" class="Afirmacion"> De selección </button> o <button type="submit" class="pregunta ">Afirmación</button><br>  <br>  
         






        </div>
      </div>
    </div>

<!-- De aqui acaba la ventana modal-->



<!-- De aqui pa abajo es la ventana modal-->


    <div class="modalpre-containerpre">
      <div class="modalpre modalpre-closepre">
        <p class="closepre">X</p>
          <div class="modal-textos">


         <form  action="#" class="formulario " id="formulario" name="formulario" method="POST">
                       <br><h1>Ingrese la Afirmacion</h1><br><br>
              <label class="lbl-nom"><span class="text-nom">pregunta:</span> </label><br>
             <input class="controlss" type="text" name="pregunta"  placeholder="" required><br><br><br>
                  <div class="afirmacion"required>
                    <input   type="radio" name="afirmacion" id="1" value="verdadero">
                    <label class="label-radio" for="1">Verdadero</label>

                    <input type="radio" name="afirmacion" id="2" value="falso">
                    <label class="label-radio" for="2">Falso    </label>

                 </div><br>
          
          <button type="submit" class="registro" name="registro">Añadir</button>
         
        </form> 





        </div>
      </div>
    </div>

<!-- De aqui acaba la ventana modal-->
<?php 
if (isset($_POST['registro'])) {

  $pregunta=$_POST["pregunta"];
  $afirmacion =$_POST["afirmacion"];
if ($afirmacion=="verdadero") {
$respuestainco="falso";
}else{

$respuestainco="verdadero";
}


      $insertardatos="INSERT INTO  preguntarep (pregunta,respuestac,respuesta3) VALUES('$pregunta','$afirmacion','$respuestainco')";
      $ejecutarinsertar=mysqli_query($con, $insertardatos );

        $consulta3 = " SELECT  * FROM preguntarep WHERE   pregunta='$pregunta'" ;      
			$ejecutar3 = mysqli_query($con, $consulta3); 			
			$fila3=mysqli_fetch_array($ejecutar3);


	      $insertardatos="INSERT INTO  asignacionpreg (preguntasFK,idpreguntarepFK) VALUES('$fila1[0]','$fila3[0]')";
          $ejecutarinsertar=mysqli_query($con, $insertardatos );
          header("Location: añadirpregu.php?nombre=".$nombre);	

    
} 



 ?>
<!-- De aqui pa abajo es la ventana modal-->


    <div class="modalafir-containerafir">
      <div class="modalafir modalafir-closeafir">
        <p class="closeafir">X</p>
          <div class="modal-textos">


         <form  action="#" class="formulario " id="formulario" name="formulario" method="POST">
                       <br><h1>Ingresa Una pregunta</h1><br><br>

              <label class="lbl-nom"><span class="text-nom">pregunta:</span> </label><br>
             <input class="controlss" type="text" name="pregunta"  placeholder="" required><br><br><br>

             <label class="lbl-apell"><span class="text-apell">Respuesta Correcta:</span> </label><br>
             <input class="controls" type="text" name="correcta"  placeholder="correcto" required><br><br><br>

             <label class="lbl-correo"><span class="text-correo">Respuesta Incorrecta:</span> </label><br>
             <input class="controls" type="text" name="incorrecto2"  placeholder="Incorrecto"required><br><br><br>

              <label class="lbl-tel"><span class="text-tel">Respuesta Incorrecta:</span> </label><br>
            <input class="controls" type="text" name="incorrecto1"  placeholder="Incorrecto  "required><br><br><br>

              <label class="lbl-tel"><span class="text-tel">Respuesta Incorrecta:</span> </label><br>
            <input class="controls" type="text" name="incorrecto"  placeholder="Incorrecto  "required><br><br><br><br><br>
          
          <button type="submit"  class="registrar" name="registrar">Añadir</button>
         
        </form> 





        </div>
      </div>
    </div>

<!-- De aqui acaba la ventana modal-->

<?php 


if (isset($_POST['registrar'])) {

  $pregunta=$_POST["pregunta"];
  $correcta =$_POST["correcta"];
$incorrecta1=$_POST["incorrecto"];
$incorrecta2=$_POST["incorrecto1"];
$incorrecta3=$_POST["incorrecto2"];

      $insertardatos="INSERT INTO  preguntarep (pregunta,respuestac,respuesta3,respuesta2,respuesta1) VALUES('$pregunta','$correcta','$incorrecta1','$incorrecta2','$incorrecta3')";
      $ejecutarinsertar=mysqli_query($con, $insertardatos );

        $consulta3 = " SELECT  * FROM preguntarep WHERE   pregunta='$pregunta' AND  respuestac='$correcta'" ;      
      $ejecutar3 = mysqli_query($con, $consulta3);      
      $fila3=mysqli_fetch_array($ejecutar3);


        $insertardatos2="INSERT INTO  asignacionpreg (preguntasFK,idpreguntarepFK) VALUES('$fila1[0]','$fila3[0]')";
         $ejecutarinsertar2=mysqli_query($con, $insertardatos2 );
             
} 

?>

<br>	<br>	

<script type="text/javascript"src="js/modalpreguntas.js"></script>


    <footer class="footer"> © 2021 Dinamiclass by &copy; | Abello, Bernal, Jaimes y Valencia</a> </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
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
        <!-- jQuery peity -->
        <script src="../assets/node_modules/peity/jquery.peity.min.js"></script>
        <script src="../assets/node_modules/peity/jquery.peity.init.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
    </footer>
  </body>
  </html>
