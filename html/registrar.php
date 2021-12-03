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
    <title>DINAMICLASS</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo1.png">
    <!-- Bootstrap Core CSS -->
    <link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    
    <script src="https://kit.fontawesome.com/643ffafafa.js" crossorigin="anonymous"></script>
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
                    <a class="navbar-brand" href="./html/Index/index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                           <img src="../assets/images/logodc.png" class="dark-logo" />
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
               <li> <a class="waves-effect waves-dark" href="admin.php" aria-expanded="false">
                        <i class="fas fa-home"></i><span class="hide-menu">Inicio</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="miperfil.php" aria-expanded="false">
                    <i class="fas fa-user"></i></i><span class="hide-menu">Mi Perfil</span></a>
                </li>
                 <li> <a class="waves-effect waves-dark" href="registrar.php" aria-expanded="false">
                 <i class="fas fa-user-plus"></i><span class="hide-menu">Registrar Usuarios</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="table-user.php" aria-expanded="false">
                <i class="fas fa-eye"></i> <span class="hide-menu">Ver Usuarios</span></a>
                </li>
               <li> <a class="waves-effect waves-dark" href="table-user2.php" aria-expanded="false">
                   <i class="fas fa-user-slash"></i><span class="hide-menu"> Usuarios Inactivos</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="creargrupo.php" aria-expanded="false">
                    <i class="fas fa-plus"></i><span class="hide-menu">Crear Grupo</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="cerrar.php" aria-expanded="false">
                    <i class="fas fa-sign-out-alt"></i><span class="hide-menu">Cerrar Sesion</span></a>
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
                        <h3 class="text-themecolor">Registrar Usuario</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                            <li class="breadcrumb-item active">Registrar Usuario</li>
                        </ol>
                    </div>

                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->

                <div class="row">
      
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form method="POST" class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12">Nombre<span class="asterisco">*</span></span></label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="ingrese nombre"
                                                class="form-control form-control-line" name="nombre">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Apellido<span class="asterisco">*</span></span></label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="ingrese apellido "
                                                class="form-control form-control-line" name="apellido">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Correo<span class="asterisco">*</span></span></label>
                                        <div class="col-md-12">
                                            <input type="email" placeholder="ejemplo@gmail.com"
                                                class="form-control form-control-line" name="correo"
                                                id="example-email" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Teléfono<span class="asterisco">*</span></span></label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="ingrese número teléfonico "
                                                class="form-control form-control-line" name="telefono">
                                        </div>
                                    </div>
                            
                                    <div class="form-group">
                                        <label class="col-sm-12">Seleccione el cargo <span class="asterisco">*</span></span></label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line" name="cargo">
                                                <option >Seleccionar </option>
                                                <option value="3">Administrador</option>
                                                <option value="2">Instructor  </option>
                                                <option value="1">Aprendiz</option>
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Seleccione Género <span class="asterisco"> *</span></label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line" name="genero">
                                                <option >Seleccionar </option>
                                                <option value="1">Masculino</option>
                                                <option value="2">Femenino  </option>
                                                                                          
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                        <button type="submit" class="registro">Registrar</button>
                                            <button type="submit" value="actualizar"  name="actualizar" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down text-whit" >Crear Usuario</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
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
            <footer class="footer"> © 2021 DINAMICLASS  </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
      
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>

<?php  
$caracteres= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';  
$longitud= 8;

if (isset($_POST['actualizar'])) {


    $nombre=$_POST["nombre"];
    $apellido= $_POST["apellido"];
    $correo= $_POST["correo"];
    $telefono= $_POST["telefono"];
    $cargo= $_POST["cargo"];
    $pass=random_int(1000000, 9999999);
    $imagen="../model/usuariof.svg"; 
    $genero=$_POST['genero'];                                     
                                               
            $insertardatos="INSERT INTO  usuario ( nombre,apellido,correo,pass,estadoUsuario,telefono,id_cargoFK,imagen,generoFK) VALUES('$nombre','$apellido', '$correo','$pass','activo','$telefono','$cargo','$imagen',$genero)";
                                               
                                               
                                               
                                               
    $ejecutarinsertar=mysqli_query($con, $insertardatos );     
    
    
    
        if ($genero==1) {
        $consulta = "call imagen_m (1,'$nombre');" ;
       $ejecutarconsulta = mysqli_query($con,$consulta);
              
    
    
    
        }else{
    
    
        $consulta = "call imagen_f (2,'$nombre');" ;
       $ejecutarconsulta = mysqli_query($con,$consulta);
                 
    
        }
    
                                              
    
     
    if (!$insertardatos) {
      echo "<script>window.open('login.php','_self')</script>";
    
    } else {
    
    $consulta2= " SELECT  * FROM usuario  WHERE correo='$correo'"  ;
    
     $ejecutarconsulta2 = mysqli_query($con,$consulta2);
                 
                   $fila = mysqli_fetch_array($ejecutarconsulta2);
    
    $id=$fila['idusuario'];
    
           header('location:enviar.php?id='.$id);
    
    
    }
    
}
    
    
    ?>