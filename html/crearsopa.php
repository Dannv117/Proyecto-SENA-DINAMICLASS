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
    <title>Sopa de letras</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logodc.png">
    <!-- Bootstrap Core CSS -->
    <link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <script type="text/javascript" src="js/wordfind.js"></script> 
    <script type="text/javascript" src="js/wordfindgame.js"></script> 
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
                            <li class="breadcrumb-item"><a href="instru.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="creacionacti.php"> Crear Actividad</a></li>
                            <li class="breadcrumb-item active"><a href="crearsopa.php">Sopa de letras</a></li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Empieza a crear tu sopa de letras</h4>
                                <h6></h6><br><br>
                                <div class="table-responsive">
                                    <table class="table">
                                        <form class="formulario" method="post">
                                            <div    class="row  ocultar text-center">
                                                <br />
                                                <div  class="panel panel-default">
                                                    <div class="panel-heading"><h4>1.  Escribe el nombre de tu sopa de letras</h4></div>
                                                    <br>    
                                                    <div class="panel-body">
                                                            <input type="text" name="nombres" >
                                                        </div>
                                                </div>
                                            </div><br><br>
                                            <div class="panel panel-default">
                                                <div class="panel-heading"><center> <h4>2.  Ingresa el  número de palabras y luego oprime el botón</h4></div></center>
                                                <div class="panel-body"> <center><div class="palabras"required>
                                                                <label for="exampleInputPassword1"> </label>
                                                                
                                                                <input type="radio" name="palabras" id="10" value="10">
                                                                <label class="label-radio 10" for="10">10</label><br> 
                                            
                                                                <input type="radio" name="palabras" id="15" value="15">
                                                                <label class="label-radio 15" for="15">15</label><br> 
                                                                  
                                                                  <input type="radio" name="palabras" id="20" value="20">
                                                                <label class="label-radio 20" for="20">20</label><br> 
                                                             </div> </center></div>
                                                   </div><br><br><br><br>
                                            
                                            
                                            
                                            
                                            
                                    <center><button     name="crear" class="btn waves-effect waves-light btn-info hidden-md-down text-white"> Ingresar palabras</button></center>
                                                    </div><br><br><br><br><br><br>
                                                   </div>
                                            </form>

<?php   
$caracteres= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';  
$longitud= 8;

if (isset($_POST['crear'])) {

  $nombre=$_POST["nombres"];
  $palabras =$_POST["palabras"];
  $codigo= substr(str_shuffle($caracteres), 0, $longitud); 
  $tipoac='sopa';




       $insertardatos="INSERT INTO  actividad (nombre_actividad,codigo_actividad, tipo_actividad, usuarioFK) VALUES('$nombre','$codigo','$tipoac','$idusu')";                                     
                                           
 $ejecutarinsertar=mysqli_query($con, $insertardatos );


 $consulta = " SELECT  * from  actividad WHERE   nombre_actividad='$nombre'" ;
 $ejecutarconsulta = mysqli_query($con,$consulta);
 $fila = mysqli_fetch_array($ejecutarconsulta);
 $nombre_actividad=$fila['nombre_actividad'];
 $id=$fila['idactividad'];


       $insertardatos="INSERT INTO  sopa_letras (nombre_Actividad,npalabras,idactividadFK) VALUES('$nombre_actividad','$palabras','$id')"; 

$ejecutarinsertar=mysqli_query($con, $insertardatos );  

    $consulta = " SELECT  * from  sopa_letras WHERE   nombre_Actividad='$nombre_actividad'" ;
 $ejecutarconsulta = mysqli_query($con,$consulta);
 $fila = mysqli_fetch_array($ejecutarconsulta);
 $id=$fila['idsopa'];


                                           
                                          


$palabras =$palabras-1;


   echo "  <form  action='creacionp.php' class='formulario2'method='POST'>
     <center><div class='panel panel-default'>
    <div class='panel-heading'><h4>3. Escribe las palabras y oprime el botón <strong>'Crear'</strong></h4></div>
    <div class='panel-body'>";


 for ($i=0; $i <=$palabras ; $i++) { 


$name ="palabra".$i;
echo "<input type='text' value='$name' name='$name' >";




 }

echo "
   <input type='hidden' value='$id' name='id' >
   <input type='hidden' value='$palabras' name='palabras' >
</div>
   </div>
   </div><br><br><br><br><br><br>
   <button type='submit' class='btn waves-effect waves-light btn-info hidden-md-down text-white'>Crear</button>
   </center> 
   </form>";











    
} 





 ?>



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2021 Dinamiclass by &copy; | Abello, Bernal, Jaimes y Valencia</a> </footer>
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
</body>

</html>