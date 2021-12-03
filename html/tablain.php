<?php 

$servidor="localhost";
$usuario="root";
$clave="";
$basededatos="proyecto_senaplay";

     $con = mysqli_connect($servidor, $usuario, $clave, $basededatos);
if (!$con) {
    echo"error al conectar el servidor";
}



 ?>
<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    
        <title>Formulario De Registro</title>
      <link rel="shortcut icon" href="../model/logo_4.png" type="image/x-icon">
    </head>
     <header>

<img class="avatar1" src="../model/logodc.png"  ><br>
        <br> <br> 

        <center>
          
        <section class="textos-header" >
<img class="avatar" src="../model/logodc.png"  ><br><br>
            <h1> Usuarios Inactivos</h1>
            
    
        </section> 
       

            </center>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #FFFFFF;"></path>
            </svg></div>
    </header>

               <nav class="nav-main">
      <!--BTN-->
    <input type="checkbox" class="nav-main_btn-collapse" id="nav-main_checkbox">
    <label for="nav-main_checkbox" class="nav-main_btn-collapse-icon">
      <span class="icon-nav"></span>
      <span class="icon-nav"></span>
      <span class="icon-nav"></span>
    </label>
    <!--Box ted-->
    <div class="nav-main_btn-collapse-bg"></div>
   
    <!--Menu-->
      <div class="nav-main_menu"><style>A {text-decoration: none;} </style>


  
     <a href="admin.php" class="nav-main_link-item"><i class="far fa-grin-beam">Inicio</i></a>

      <a href="datosp.php" class="nav-main_link-item"><i class="far fa-grin-beam">Mi perfil</i></a>
      
      
      <a href="registro.php" class="nav-main_link-item"><i class="fas fa-flag-checkered">Registrar Usuario</i></a>
      
      
      <a href="tabla.php" class="nav-main_link-item"><i class="far fa-envelope"> Ver Usuarios</i></a>

      <a href="tablain.php" class="nav-main_link-item"><i class="far fa-envelope">Usuarios Inactivos</i></a>
     
      <a href="cerrar.php" class="nav-main_link-item"><i class="far fa-power-off">Cerrar Sesion</i></a>
    
      
    </div>
    </nav>




<body style="background-color:#fff">

    <div class="tabla">
    <table class="table table-#bdecb6 table-striped">
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Correo</th>
          <th>Telefono</th>
          <th>Cargo</th>
          <th> Activar</th>
         
        </tr>

      <?php 
 $consulta = " SELECT  idusuario ,nombre , apellido , correo , telefono ,cargo from usuario INNER JOIN cargoss ON  usuario.id_cargoFK = cargoss.idcargo
  WHERE  estadoUsuario='inactivo';";
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
                    
                       
                   
                          echo "<td> <a href='tablain.php?no=".$fila[0]."''><button type='button' class='btn btn-danger'>Activar</button></a> </td>";
                     echo "</tr>";   

                      
                       $fila = mysqli_fetch_array($ejecutarconsulta);

                  }
                }

               }
               
               ?>        
    </table><br><br>  <br>  <br>  <br>  <br>  
  </div>
     
<center>
  <?php 
  if(isset($_GET['no'])){
  
  $borrar_id = $_GET['no'];
  
  $borrar = "UPDATE usuario SET estadoUsuario ='activo' WHERE idusuario = $borrar_id";

    

    if( $ejecutar = mysqli_query($con,$borrar)){
    
    echo "<script>alert('El usuario ha sido activado!')</script>";
    echo "<script>window.open('tablain.php','_self')</script>";
    }
     else{
      
      echo "no sirve";

     }
  }
 


  ?>
  </center>

<br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  
   <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Teléfono</h4>
                <p>Conmutador Nacional (57 1) 5461500 - Extensiones
                 <br>

Atención al ciudadano: Bogotá (57 1) 3430111</p>
            </div>
            <div class="content-foo">
                <h4>E-mail</h4>
                <p>Dinamiclass123@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Localización</h4>
                <p>Cl. 52 #13 65, Bogotá
                 </p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Dinamiclass | Abello, Bernal, Jaimes y Valencia</h2>
    </footer>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>

  