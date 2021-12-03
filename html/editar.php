
<?php 



		if(isset($_GET['editar'])){
			
			$editar_id = $_GET['editar']; 
			
			$consulta = "SELECT  idusuario,id_cargoFK, nombre,apellido,pass,correo,telefono from usuario  WHERE idusuario= '$editar_id' AND estadoUsuario='activo'";
                             
			$ejecutar = mysqli_query($con, $consulta); 
			
			$fila=mysqli_fetch_array($ejecutar);
			    $id_cargoFK = $fila['id_cargoFK'];
	             $nombre = $fila['nombre']; 
                 $apellido = $fila['apellido'];
              
                 $Correo = $fila['correo'];
                 

                 $telefono = $fila['telefono'];
	           
			 





			}
?>
		
<br/>
<form method="post" action="">
	 
	    <input  hidden="" type="text" name="id" value="<?php echo $editar_id;?>"/><br/>
<label>Nombre: </label>
		<input type="text" name="nombre" value="<?php echo $nombre;?>"/><br/>
<label>Apellido: </label>
		<input type="text" name="apellido" value="<?php echo $apellido;?>"/><br/>
<label>Correo: </label>
		<input type="text" name="Correo" value="<?php echo $Correo; ?>"/><br/>
<label>Telefono: </label>
        <input type="text" name="telefono" value="<?php echo $telefono;?>"/><br/>  
<label>Cargo:    </label>
  <select type="text" name="id_cargoFK" >
    <option value="1">Aprendiz</option>
    <option value="2">Instructor</option>
    <option value="3">Administrador</option>
 

    


  </select><br>
            

		<input type="submit" name="actualizar" value="ACTUALIZAR DATOS"/>
	
</form>
	<?php 
	if(isset($_POST['actualizar'])){
	    $actializar_id =$_POST['id'];
		$actualizar_nombre = $_POST['nombre'];
		$actualizar_apellido= $_POST['apellido'];
		$actualizar_correo = $_POST['Correo'];

        $actualizar_telefono = $_POST['telefono']; 
		$actualizar_id_cargoFK = $_POST['id_cargoFK'];
	
		
		$actualizar = "UPDATE usuario SET nombre='$actualizar_nombre', apellido='$actualizar_apellido', correo='$actualizar_correo',telefono='$actualizar_telefono',id_cargoFK='$actualizar_id_cargoFK ' WHERE idusuario='$actializar_id'";
		
	 if ($ejecutar = mysqli_query($con, $actualizar)) {
	 	
        echo "<script>alert('Datos actualizados!')</script>";
		echo "<script>window.open('table-user.php','_self')</script>";


          
	 	}	
	   else{
	   	echo "esta mal :(";
	   }
		
	}
	
	?> 