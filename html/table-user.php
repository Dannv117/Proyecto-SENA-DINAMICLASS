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
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logodc.png">
    <!-- Bootstrap Core CSS -->
    <link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/643ffafafa.js" crossorigin="anonymous"></script>
    <script src="sweetalert2.all.min.js"></script>
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
            <p class="loader__label">DINAMICLASS</p>
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
                            <img src="../assets/images/logodc.png" height="80" width="80" class="dark-logo" />
                            <!-- Light Logo icon -->
                        
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                            <!-- dark Logo text -->
                           
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
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href=""
                                id="navbarDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="<?php echo $imagen ?>" alt="user" class="" /> <span
                                    class="hidden-md-down"> <?php  echo"<h7>". $fila[1]."</h7>";?> </a>
                                    
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

                  <?php   if ($id_cargoFK == 3) {

                     echo "         <ul id='sidebarnav'>
                     <li> <a class='waves-effect waves-dark' href='admin.php' aria-expanded='false'>
                     <i class='fas fa-home'></i><span class='hide-menu'>Inicio</span></a>
             </li>
             <li> <a class='waves-effect waves-dark' href='miperfil.php' aria-expanded='false'>
             <i class='fas fa-user'></i><span class='hide-menu'>Mi Perfil</span></a>
             </li>
              <li> <a class='waves-effect waves-dark' href='registrar.php' aria-expanded='false'>
              <i class='fas fa-user-plus'></i><span class='hide-menu'>Registrar Usuarios</span></a>
             </li>
             <li> <a class='waves-effect waves-dark' href='table-user.php' aria-expanded='false'>
             <i class='fas fa-eye'></i><span class='hide-menu'>Ver Usuarios</span></a>
             </li>
            <li> <a class='waves-effect waves-dark' href='table-user2.php' aria-expanded='false'>
            <i class='fas fa-user-slash'></i><span class='hide-menu'> Usuarios Inactivos</span></a>
             </li>
             <li> <a class='waves-effect waves-dark' href='creargrupo.php' aria-expanded='false'>
             <i class='fas fa-plus'></i><span class='hide-menu'>Crear Grupo</span></a>
             </li>

             <li> <a class='waves-effect waves-dark' href='cerrar.php' aria-expanded='false'>
             <i class='fas fa-sign-out-alt'></i><span class='hide-menu'>Cerrar Sesion</span></a>
             </li>

                    </ul> ";


                    }else{

                        if ($id_cargoFK == 2 ) {

                            echo " 
    
    
                         <ul id='sidebarnav'>
                            <li> <a class='waves-effect waves-dark' href='instru.php' aria-expanded='false'><i
                                        class='fa fa-tachometer'></i><span class='hide-menu'>Inicio</span></a>
                            </li>
                            <li> <a class='waves-effect waves-dark' href='miperfil.php' aria-expanded='false'><i
                                        class='fa fa-user-circle-o'></i><span class='hide-menu'>Mi Perfil</span></a>
                            </li>
                            <li> <a class='waves-effect waves-dark' href='veracti2.php' aria-expanded='false'><i
                            class='fa fa-user-circle-o'></i><span class='hide-menu'>Ver Actividades</span></a>
                            </li>
                            <li> <a class='waves-effect waves-dark' href='creacionacti.php' aria-expanded='false'><i
                                class='fa fa-table'></i><span class='hide-menu'>Crear Actividad</span></a>
                            <li> <a class='waves-effect waves-dark' href='table-user.php' aria-expanded='false'><i
                                        class='fa fa-table'></i><span class='hide-menu'>Ver Usuarios</span></a>
                            </li>
    
                            <li> <a class='waves-effect waves-dark' href='creargrupo.php' aria-expanded='false'><i
                            class='fa fa-table'></i><span class='hide-menu'>Crear Grupo</span></a>
                            </li>
                            
                            <li> <a class='waves-effect waves-dark' href='cerrar.php' aria-expanded='false'><i
                                        class='fa fa-smile-o'></i><span class='hide-menu'>Cerrar Sesion</span></a>
                            </li>
    
                        </ul>
                             ";
                            
                         }else{
    
                            echo " ";
                         }
    
                         
    
    
                        } ?>
    
                        
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
                        <h3 class="text-themecolor">Tabla de usuarios</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                            <li class="breadcrumb-item active">Tabla de usuarios</li>
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
                        
                                <h6 class="card-subtitle">Usuarios del sistema<code>.tabla</code></h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <div class="tabla">
    <table class="table table-#bdecb6 table-striped">
        <tr>
          
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Correo</th>
          <th>Telefono</th>
          <th>Contrase??a</th>
          <th>Cargo</th>
      
          <th> Modificar</th>
           <th>Eliminar</th>
        </tr>
     

      <?php 
                           $consulta = " SELECT  idusuario ,nombre , apellido , correo , telefono ,pass  , cargo from usuario INNER JOIN cargoss ON  usuario.id_cargoFK = cargoss.idcargo
  WHERE  estadoUsuario='activo';";
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
                          echo "<td>";  echo $fila[1];  echo "</td>";
                           echo "<td>";  echo $fila[2];  echo "</td>";
                          echo "<td>";  echo $fila[3];  echo "</td>";
                          echo "<td>";  echo $fila[4];  echo "</td>";
                          echo "<td>";  echo $fila[5];  echo "</td>";
                          echo "<td>";  echo $fila[6];  echo "</td>";
                       
                        
                          echo "<td>  <a  href='table-user.php?editar=".$fila[0]."'> <button type='button' class='btn waves-effect waves-light btn-info hidden-md-down text-white'>Modificar</button> </a> </td>";
                          
                          echo "<td> <a href='table-user.php?no=".$fila[0]."''> <button type='button' class='btn waves-effect waves-light btn-info hidden-md-down text-white' onclink= 'inac()'> Inactivar</button></a> </td>";
                     echo "</tr>";   

                      
                       $fila = mysqli_fetch_array($ejecutarconsulta);

                  }
                }

               }
               
               ?>     
      
    







  
  </table>
  <?php
    if(isset($_GET['editar'])){
    include("editar.php");
    }
  ?> 
  <?php 
  if(isset($_GET['no'])){
  
  $borrar_id = $_GET['no'];
  
  $borrar = "UPDATE usuario SET estadoUsuario ='inactivo' WHERE idusuario = $borrar_id";

    

    if( $ejecutar = mysqli_query($con,$borrar)){
    
    echo "<script>alert('El usuario ha sido inhabilitado!')</script>";
    echo "<script>window.open('table-user2.php','_self')</script>";
    }
     else{
      
      echo "no sirve";

     }
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
            <footer class="footer"> ?? 2021 DINAMICLASS </footer>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>