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

  $nombre=$fila['nombre'];
$apellido=$fila['apellido'];
$correo=$fila['correo'];
$telefono=$fila['telefono'];
$id_cargoFK=$fila['id_cargoFK'];
$imagen=$fila['imagen'];
$pass=$fila['pass'];




$idpregu = $_GET['id'];

$consulta2 = " SELECT * FROM  actividad WHERE idactividad = $idpregu;";
   $ejecutarconsulta2 = mysqli_query($con,$consulta2);
               $verfilas2 = mysqli_num_rows($ejecutarconsulta2);
               $fila2 = mysqli_fetch_array($ejecutarconsulta2);


$nombreacti= $fila2[1];


               $consulta4 = " SELECT *FROM preguntas WHERE nombre_actividad = '$nombreacti'";
               $ejecutarconsulta4 = mysqli_query($con,$consulta4);
               $verfilas4 = mysqli_num_rows($ejecutarconsulta4);
               $fila4 = mysqli_fetch_array($ejecutarconsulta4);




 $consulta3 = " SELECT pregunta,respuestac,respuesta3,respuesta2,respuesta1,nombre_actividad FROM asignacionpreg  INNER JOIN preguntarep ON  asignacionpreg.idpreguntarepFK = preguntarep.idpreguntarep INNER JOIN preguntas ON asignacionpreg.idasignacionpreg=preguntas.idpreguntas WHERE preguntasFK= '$fila4[0]'";
   $ejecutarconsulta3 = mysqli_query($con,$consulta3);
               $verfilas3 = mysqli_num_rows($ejecutarconsulta3);
               $fila3 = mysqli_fetch_array($ejecutarconsulta3);




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

<body class="fix-header card-no-border fix-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Estudiante</p>
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
                            <img src="../assets/images/logodc.png" height="80" width="80" class="dark-logo" />
                            <!-- Light Logo icon -->
                           
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                            <!-- dark Logo text -->
                      
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
                                    class="srh-btn"><i class="fa fa-times"></i></a> </form>
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
                        <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="miperfil.php"
                                id="navbarDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                               src="<?php 	echo $imagen; ?>" class="img-circle"
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
                        <li> <a class="waves-effect waves-dark" href="aprendiz.php" aria-expanded="false"><i
                            class="fa fa-tachometer"></i><span class="hide-menu">Inicio</span></a>
                </li>
                <li> <a class='waves-effect waves-dark' href='miperfilapren.php' aria-expanded='false'><i
                            class='fa fa-user-circle-o'></i><span class='hide-menu'>Mi Perfil</span></a>
                </li>
                <li> <a class='waves-effect waves-dark' href='ver_actividaad.php' aria-expanded='false'><i
                            class='fa fa-user-circle-o'></i><span class='hide-menu'>Ver Actividades</span></a>
                </li>
                <li> <a class='waves-effect waves-dark' href='#' aria-expanded='false'><i
                            class='fa fa-user-circle-o'></i><span class='hide-menu'>Ver mis reportes</span></a>
                </li>
               

                <li> <a class='waves-effect waves-dark' href='cerrar.php' aria-expanded='false'><i
                            class='fa fa-smile-o'></i><span class='hide-menu'>Cerrar Sesion</span></a>
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
                        <h3 class="text-themecolor">Inicio</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Inicio</li>
                        </ol>
                    </div>
                    
                </div>
                <center>
                <H2 class="text-themecolor"><?php echo $nombreacti; ?></H2>

                



<?php  


 if (!$ejecutarconsulta3) {
                echo "error de consulta";

               }else{
                  if ($verfilas3<1) {
                  echo "<h1>sin preguntas</h2>";
                }else{
                  for($i =0; $i<=$fila3; $i++){
                      
     
     echo "  <!--INICIO  DE PREGUNTAS-->
                
                <h3 class='text-themecolor'>".$fila3[0]."</h3>
  
                <div class='row'>
                    <!-- column -->
                    <div class='col-12'>
                        <div class='card_pregu'>
                            <div class='card-body'>
                            <div class='row'>
                    <!-- column -->
                 
                                <div class='card'>
                                <div class='card-body'>
                                 <a>".$fila3[1]."</a>
                                </div>
                                </div>
                                <br>

                                <div class='card'>
                                <div class='card-body'>
                                                         <a>".$fila3[2]."</a>
                                </div>
                                </div>
                                <br>

                                <div class='card'>
                                <div class='card-body'>
                                                         <a>".$fila3[3]."</a>
                                </div>
                                </div>
                                <br>
          
                                <div class='card'>
                                <div class='card-body'>
                                                         <a>".$fila3[4]."</a>
                                </div>
                                </div>
                                <br>

                                <div class='card'>    
                                <div class='cardpregun'>
                        
                                </div>
                                </div>
                            </div>
                            
                        </div>
         
                     </div>
<br><br><br>
   
      </div>
                </div>
  </center>
      <!--FIN DE PREGUNTAS-->
              ";
                      
                       $fila3 = mysqli_fetch_array($ejecutarconsulta);

                  }
                }

               }



 ?>





           
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="../assets/node_modules/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="../assets/node_modules/raphael/raphael-min.js"></script>
    <script src="../assets/node_modules/morrisjs/morris.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/node_modules/d3/d3.min.js"></script>
    <script src="../assets/node_modules/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="js/dashboard1.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>