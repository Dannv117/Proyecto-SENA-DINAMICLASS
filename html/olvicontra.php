
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
        <script src="js/modal_preguntas.js"></script>

    </footer>
  </body>
  </html>
