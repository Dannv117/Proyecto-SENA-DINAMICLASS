<?php
    include_once 'database.php';
    
    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset(); 

        // destroy the session 
        session_destroy(); 
    }
    
    if(isset($_SESSION['id_cargoFK'])){
        switch($_SESSION['id_cargoFK']){
            case 1:
            header('location: aprendiz.php');     
                   break;

            case 2:
            header('location: instru.php');
            break;

           case 3:
            header('location: admin.php');
            break;

            default:
        }
    }  

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $db = new Database();
        $query = $db->connect()->prepare("SELECT *FROM usuario WHERE correo = :username AND pass = :password AND  estadoUsuario ='activo' ");
        $query->execute(['username' => $username, 'password' => $password]);
     
        $row = $query->fetch(PDO::FETCH_NUM);
      
       
        if($row == true){
            $id=$row[0]; 
            $cargo = $row[8];
           $_SESSION['idusuario'] = $id;
            $_SESSION['id_cargoFK'] = $cargo;
            switch($cargo){
                case 1:
                    header('location: aprendiz.php');
                break;

                case 2:
                header('location: instru.php');
                break;

                 case 3:
            header('location: admin.php');      
                      break;

                default:
            }





 



        }else{
          
            echo  "<script> alert ('Nombre de usuario o contraseña incorrecto');</script>";
        }
        

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>DINAMICLASS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="../assets/images/logo1.png" alt="IMG">
                </div>

                <form  method="POST" class="login100-form validate-form">
                    <span class="login100-form-title">
                        Inicio de Sesión
                    </span>
                    <span > Correo <span class="asterisco">*</span></span>
                    <div class="wrap-input100 validate-input" data-validate = "Correo requerido">
                        <input class="input100" type="text" name="username" placeholder="Gmail">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <span >Contraseña <span class="asterisco">*</span></span>
                    <div class="wrap-input100 validate-input" data-validate = "Contraseña requerida">
                        
                        <input class="input100" type="password" name="password" id="password" placeholder="Contraseña">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
			
			<button type="button" onclick="mostrarSenha()">Mostrar Contraseña</button>
		
		<script>
			function mostrarSenha(){
				var tipo = document.getElementById("password");
				if(tipo.type == "password"){
					tipo.type = "text";
				}else{
					tipo.type = "password";
				}
			}
		</script>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Ingresar
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Olvidaste tu 
                        </span>
                        <a class="txt2" href="olvicontra.php">
                            Usuario / Contraseña?
                        </a>
                    </div>

                    <div class="text-center p-t-136">
                        
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    
    

    
<!--===============================================================================================-->  
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html>
