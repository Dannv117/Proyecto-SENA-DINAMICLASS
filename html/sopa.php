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




    $id=$_GET['id'];
        $consulta1 = " SELECT  * FROM sopa_letras WHERE idsopa='$id'  " ;      
            $ejecutar1 = mysqli_query($con, $consulta1);          
            $fila1=mysqli_fetch_array($ejecutar1);



                    $consulta2 = " SELECT  * FROM actividad WHERE nombre_actividad='$fila1[1]'  " ;      
            $ejecutar2 = mysqli_query($con, $consulta2);          
            $fila2=mysqli_fetch_array($ejecutar2);

            $consulta3 = " SELECT idusuario, nombre FROM usuario WHERE idusuario='$fila2[3]'  " ;      
            $ejecutar3 = mysqli_query($con, $consulta3);          
            $fila3=mysqli_fetch_array($ejecutar3);

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
    <meta name="robots" content="noindex,nofollow">
    <title>Creación Sopa</title>
    <script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
    <script type="text/javascript" src="js/wordfind.js"></script> 
    <script type="text/javascript" src="js/wordfindgame.js"></script> 
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap-lite/" />
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="../assets/images/img-01.png" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
    <link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->   
     <link rel="stylesheet" type="text/css" href="css/stylesopa.css">
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
            <p class="loader__label">Sopa creada</p>
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
                    <a class="navbar-brand" href="instru.php">
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
                <li> <a class="waves-effect waves-dark" href="pages-profile.html" aria-expanded="false"><i
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
                <li> <a class="waves-effect waves-dark" href="table-basic.html" aria-expanded="false"><i
                            class="fa fa-table"></i><span class="hide-menu">Crear Ficha</span></a>
                </li>

                <li> <a class="waves-effect waves-dark" href="cerrar.php" aria-expanded="false"><i
                            class="fa fa-smile-o"></i><span class="hide-menu">Cerrar Sesión</span></a>
                </li>


                    </ul>
                    
                </nav>
                </aside>
                <!-- End Sidebar navigation -->
            </div>
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
                        <h3 class="text-themecolor">Creación de Sopa de letras</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active"><a href="creacionacti.php"> Crear Actividad</a></li>
                            <li class="breadcrumb-item active"><a href="crearsopa.php">Sopa de letras</a></li>
                        </ol>
                    </div>
                    
                </div>
            
            <!-- End Sidebar scroll-->
        
            <center>
          <img src="../assets/images/sopa.gif"  id="avatar1" >
          <h1 id="titulo"><?php echo $fila1[1]; ?> </h1>
                  
<center>
    <div id='juego'></div>


    <div id='Palabras'></div>
    </center><br><br>
    <div><center><button id="solve" class="btn waves-effect waves-light btn-info hidden-md-down text-white">Resolver el juego</button></center></div>



<?php 

            $consulta4= " SELECT idasignacionpala,palabra,nombre_Actividad from asignacionpala INNER JOIN palabras on asignacionpala.idpalabrasFK = palabras.idpalabras
              inner join sopa_letras on asignacionpala.idsopaFK = sopa_letras.idsopa where nombre_Actividad= '$fila1[1]' " ;      
            $ejecutar4 = mysqli_query($con, $consulta4); 
            $verfilas = mysqli_num_rows($ejecutar4);
           $fila4 = mysqli_fetch_array($ejecutar4);

 if (!$ejecutar4) {
                echo "error de consulta";

               }else{
                  if ($verfilas<1) {
                  echo "<tr><td>sin registros</td></tr>";
                }else{
                  for($i =0; $i<= $fila4; $i++){
                      

                      $name ="palabra".$i;
                    echo "<input type='hidden' value='$fila4[1]' id='$name' name='$name' >";
  

                      
                       $fila4 = mysqli_fetch_array($ejecutar4);

                  }

     
                  if ($fila1[2]==10) {
                    ?>

                     <script >
                     var palabra = document.getElementById('palabra0').value
                     var palabra2 = document.getElementById('palabra1').value
                     var palabra3 = document.getElementById('palabra2').value
                     var palabra4 = document.getElementById('palabra3').value
                     var palabra5 = document.getElementById('palabra4').value
                     var palabra6 = document.getElementById('palabra5').value
                     var palabra7 = document.getElementById('palabra6').value
                     var palabra8 = document.getElementById('palabra7').value
                     var palabra9 = document.getElementById('palabra8').value
                     var palabra10 = document.getElementById('palabra9').value
              var words = [ palabra,palabra2,palabra3,palabra4,palabra5,palabra6,palabra7,palabra8,palabra9,palabra10];
                     </script>

              <?php 
                   } else {
                    if ($fila1[2]==15) {
                      
                        ?>

                     <script >
                     var palabra = document.getElementById('palabra0').value
                     var palabra2 = document.getElementById('palabra1').value
                     var palabra3 = document.getElementById('palabra2').value
                     var palabra4 = document.getElementById('palabra3').value
                     var palabra5 = document.getElementById('palabra4').value
                     var palabra6 = document.getElementById('palabra5').value
                     var palabra7 = document.getElementById('palabra6').value
                     var palabra8 = document.getElementById('palabra7').value
                     var palabra9 = document.getElementById('palabra8').value
                     var palabra10 = document.getElementById('palabra9').value
                     var palabra11 = document.getElementById('palabra10').value
                     var palabra12 = document.getElementById('palabra11').value
                     var palabra13 = document.getElementById('palabra12').value
                     var palabra14 = document.getElementById('palabra13').value
                     var palabra15 = document.getElementById('palabra14').value

              var words = [ palabra,palabra2,palabra3,palabra4,palabra5,palabra6,palabra7,palabra8,palabra9,palabra10,palabra11,palabra12,palabra13,palabra14,palabra15];
                     </script>

              <?php 

                    } else {
                     ?>

                     <script >
                     var palabra = document.getElementById('palabra0').value
                     var palabra2 = document.getElementById('palabra1').value
                     var palabra3 = document.getElementById('palabra2').value
                     var palabra4 = document.getElementById('palabra3').value
                     var palabra5 = document.getElementById('palabra4').value
                     var palabra6 = document.getElementById('palabra5').value
                     var palabra7 = document.getElementById('palabra6').value
                     var palabra8 = document.getElementById('palabra7').value
                     var palabra9 = document.getElementById('palabra8').value
                     var palabra10 = document.getElementById('palabra9').value
                     var palabra11 = document.getElementById('palabra10').value
                     var palabra12 = document.getElementById('palabra11').value
                     var palabra13 = document.getElementById('palabra12').value
                     var palabra14 = document.getElementById('palabra13').value
                     var palabra15 = document.getElementById('palabra14').value
                     var palabra16 = document.getElementById('palabra15').value
                     var palabra17 = document.getElementById('palabra16').value
                     var palabra18 = document.getElementById('palabra17').value
                     var palabra19 = document.getElementById('palabra18').value
                     var palabra20 = document.getElementById('palabra19').value
              var words = [ palabra,palabra2,palabra3,palabra4,palabra5,palabra6,palabra7,palabra8,palabra9,palabra10,palabra11,palabra12,palabra13,palabra14,palabra15,palabra16,palabra17,palabra18,palabra19,palabra20];
                     </script>

              <?php 

                    }
                    
                    
                   }
                    

                }

               }
 ?>
 <script >
    var gamePuzzle = wordfindgame.create(words, '#juego', '#Palabras'); 
        
    var puzzle = wordfind.newPuzzle(words,{height: 18, width:18, fillBlanks: false});
    wordfind.print(puzzle);   
        
    $('#solve').click( function() {wordfindgame.solve(gamePuzzle, words);});
        
  </script>

    <br>
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