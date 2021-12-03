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
    <title>DinamiClass Admin</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap-lite/" />
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="../assets/images/img-01.png" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
    <link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="../assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="css/pages/dashboard1.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/643ffafafa.js" crossorigin="anonymous"></script>
    <!-- You can change the theme colors from here -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Administrador</p>
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
                    <a class="navbar-brand" href="admin.php">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logodc.png" class="dark-logo" />
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
                                class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)">
                                <i class="fa fa-search"></i></a>
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
                        <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="miperfil.php"
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
                    <li> <a class="waves-effect waves-dark" href="instru.php" aria-expanded="false">
                            <i class="fas fa-home"></i><span class="hide-menu">Inicio</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="miperfil.php" aria-expanded="false">
                        <i class="fas fa-user"></i><span class="hide-menu">Mi Perfil</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="registrar.php" aria-expanded="false"><i class='fas fa-user-plus'></i><span class="hide-menu">Registrar Usuarios</span></a>
                </li>
                         <li> <a class="waves-effect waves-dark" href="veracti2.php" aria-expanded="false">
                             <i class="far fa-eye"></i><span class="hide-menu">Ver Actividades</span></a>
                             </li>
               <li> <a class="waves-effect waves-dark" href="table-user2.php" aria-expanded="false"><i class='fas fa-user-slash'></i><span class="hide-menu"> Usuarios Inactivos</span></a>
                </li>
                
                        <li> <a class="waves-effect waves-dark" href="creargrupo.php" aria-expanded="false">
                            <i class="fas fa-users"></i><span class="hide-menu">Crear Grupo</span></a>
                        </li>

                        <li> <a class="waves-effect waves-dark" href="cerrar.php" aria-expanded="false">
                            <i class="fas fa-sign-out-alt"></i><span class="hide-menu">Cerrar Sesión</span></a>
                        </li>


                        
                 
               
                    
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
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Sales Chart and browser state-->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div>
                                        <h5 class="card-title mb-0">Alcance</h5>
                                    </div>
                                    <div class="ms-auto">
                                        <ul class="list-inline text-center font-12">
                                            <li><i class="fa fa-circle text-success"></i>INTITUCIONES</li>
                                            <li><i class="fa fa-circle text-info"></i>DOCENTES</li>
                                            <li><i class="fa fa-circle text-primary"></i> ESTUDIANTES</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="" id="sales-chart" style="height: 355px;"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex mb-4 no-block">
                                    <h5 class="card-title mb-0 align-self-center">Nuestros visitantes</h5>
                                    <div class="ms-auto">
                                        <select class="form-select b-0">
                                            <option selected="">Hoy</option>
                                            <option value="1">Ayer</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="visitor" style="height:260px; width:100%;"></div>
                                <ul class="list-inline mt-4 text-center font-12">
                                    <li><i class="fa fa-circle text-purple"></i> Instituciones</li>
                                    <li><i class="fa fa-circle text-success"></i> Docentes</li>
                                    <li><i class="fa fa-circle text-info"></i> Estudiantes</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Sales Chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Projects of the Month -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="card-title">Actividades</h5>
                                    </div>
                                    <div class="ms-auto">
                                        <select class="form-select b-0">
                                            <option selected="">Enero</option>
                                            <option value="1">Febrero</option>
                                            <option value="2">Marzo</option>
                                            <option value="3">Abril</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="table-responsive mt-3 no-wrap">
                                    <table class="table vm no-th-brd pro-of-month">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Nombre</th>
                                                <th>Descripción </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width:50px;"><span class="round">S</span></td>
                                                <td>
                                                    <h6>Sopa de letras</h6><small class="text-muted"> </small>
                                                </td>
                                                <td> Es un pasatiempo que consiste en una cuadrícula u otra forma geométrica rellena con diferentes letras</td>
                                                
                                            </tr>
                                            <tr class="active">
                                                <td><span class="round round-success">C</span></td>
                                                <td>
                                                    <h6>Crucigrama</h6><small class="text-muted"></small>
                                                </td>
                                                <td>Pasatiempo que consiste en rellenar con letras las casillas en blanco de un dibujo cuadrado o <br> rectangular  para que leídas horizontal y verticalmente formen palabras</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><span class="round round-success">PyR</span></td>
                                                <td>
                                                    <h6>Preguntas y Respuestas</h6><small class="text-muted"></small>
                                                </td>
                                                <td> permite la creación de cuestionarios de evaluación</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><span class="round round-success">PYR</span></td>
                                                <td>
                                                    <h6>Ahorcados</h6><small class="text-muted"></small>
                                                </td>
                                                <td> permite la creación del juego interactivo y clasico de ahorcado. Introduzca palabras para que sus estudiantes <br>adivinen la palabra antes de que se acaben los intentos y finalice el juego</td>
                                                
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="up-img" style="background-image:url(../assets/images/admin.jpeg)"></div>
                            <div class="card-body">
                                <h5 class=" card-title">Aprendizaje interactivo virtual</h5>
                                <span class="label label-info label-rounded">Educación</span>
                                <p class="mb-0 mt-3">"Si no persigues lo que quieres, nunca lo tendrás.
                                    Si no vas hacia adelante, siempre estarás en el mismo lugar."</p>
                                <div class="d-flex mt-3">
                                    <a class="link" href="javascript:void(0)">Motivate más</a>
                                    <div class="ms-auto align-self-center">
                                        <a href="javascript:void(0)" class="link me-2"><i
                                                class="fa fa-heart-o"></i></a>
                                        <a href="javascript:void(0)" class="link me-2"><i
                                                class="fa fa-share-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Projects of the Month -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Notification And Feeds -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Start Notification -->
                    <div class="col-lg-6 col-md-12">
                        <div class="card card-body mailbox">
                            <h5 class="card-title">Notificaciòn</h5>
                            <div class="message-center" style="height: 420px !important;">
                                <!-- Message -->
                                <a href="#">
                                    <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                    <div class="mail-contnet">
                                        <h6 class="text-dark font-medium mb-0">Comparte el código de las actividades</h6> <span class="mail-desc">No olvides compartir el código a tus aprendices</span>
                                        <span class="time">9:30 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="btn btn-success btn-circle"><i class="fa fa-calendar-check-o"></i></div>
                                    <div class="mail-contnet">
                                        <h6 class="text-dark font-medium mb-0">Programa tu alarma</h6> <span class="mail-desc">No se te olvide 
                                            programar tu alarma</span> <span class="time">06:15 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
            
                                <!-- Message -->
                                <a href="#">
                                    <div class="btn btn-primary btn-circle"><i class="fa fa-user"></i></div>
                                    <div class="mail-contnet">
                                        <h6 class="text-dark font-medium mb-0">Perfil </h6> <span class="mail-desc">Puedes editar tu perfil</span> <span
                                            class="time">10:02 AM</span>
                                    </div>
                                </a>
                               
                            </div>
                        </div>
                    </div>
                    <!-- End Notification -->
                    
                    <!-- Start Feeds -->
                    
                    <!-- End Feeds -->
                </div>
                <!-- ============================================================== -->
                <!-- End Notification And Feeds -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Page Content -->
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