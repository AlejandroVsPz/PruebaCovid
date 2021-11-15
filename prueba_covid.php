<?php
	session_start();

	include("header.php");

	if (!isset($_SESSION["user_email"])) {
		header("location: index.php");
	}
  $id = $_GET['user_id'];
	$sql = "SELECT * FROM User WHERE user_id='$id'";
	$run_sql = mysqli_query($con, $sql);

 ?>
 <!DOCTYPE html>
 <html>

 <head>
     <title>Simulador Covid</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
         integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
         integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
     </script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

     <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
 </head>

 <style media="screen">

 body{
  overflow-x: hidden;
  background-image: url("images/covid.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  background-size: cover;
}
.main-content{
  width: 80%;
  height: auto;
  margin: 60px auto;
  background-color: rgba(255,255,255, 0.7);
  border: 2px solid #34495e;
  padding: 40px 50px;
   border-radius: 20px;
}


#h3{
  background: -webkit-linear-gradient(#34495e,  #34495e);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.overlap-text{
  position: relative;
}

.overlap-text a{
  position: absolute;
  top: 8px;
  right: 10px;
  font-size: 14px;
  text-decoration: none;
  font-family: 'Overpass Mono', monospace;
  letter-spacing: -1px;
}
.paragraph {
    text-align: justify;
    text-justify: inter-word;
}


 </style>

 <body>

   <div class="row">
   <div class="col-sm-12">
     <div class="main-content">
       <div class="header">
         <h3 style="text-align: center; font-family: 'Arial'; letter-spacing: 1pt;" id="h3"><strong>Prueba Covid</strong></h3>
       </div>
         <div class="l-part">
           <div class="col-lg-12 mx-auto paragraph">
               <p class="lead mb-4 text-dark" >Hola <?php echo "$nombre";  ?>, si en los últimos días presentaste uno o varios de los siguientes síntomas: Fiebre, Tos, Dolor de cabeza intenso y/o Dificultad para respirar, te invitamos a responder el siguiente test, que tiene como objetivo identificar si tus padecimientos se relacionan con el COVID-19, y mereces una atención inmediata por parte del sector salud.</p>
           </div>
           <div class="container">

            <form action="resultados.php" method="post">
              <input type="hidden" name="id" value="<?php echo($user_id)?>">
              <input type="hidden" name="nombre" value="<?php echo($nombre)?>">
              <input type="hidden" name="apellido" value="<?php echo($apellido)?>">
              <input type="hidden" name="fecha_nacimiento" value="<?php echo($fecha_nacimiento)?>">
              <!-- Pregunta 1-->
              <div class="form-group">
                  <h5>¿Ha tenido contacto con algún paciente con coronavirus?</h5>
                  <ol style="list-style: none;">
                    <li>
                      <input type="radio" name="q1" value="1" required="required" />&nbsp;Si
                    </li>
                    <li>
                      <input type="radio" name="q1" value="0" required="required" />&nbsp;No
                    </li>
                    <li>
                      <input type="radio" name="q1" value="0" required="required" />&nbsp;Nose
                    </li>
                  </ol>
              </div>
              <!-- Pregunta 2-->
              <div class="form-group">
                  <h5>¿Considera usted que ha presentado fiebre o temperatura arriba de 38 grados?</h5>
                  <ol style="list-style: none;">
                    <li>
                      <input type="radio" name="q2" value="1" required="required" />&nbsp;Si
                    </li>
                    <li>
                      <input type="radio" name="q2" value="0" required="required" />&nbsp;No
                    </li>
                  </ol>
              </div>
              <!-- Pregunta 3-->
              <div class="form-group">
                <h5>¿Presenta tos seca y persistente?</h5>
                <ol style="list-style: none;">
                  <li>
                    <input type="radio" name="q3" value="1" required="required" />&nbsp;Si
                  </li>
                  <li>
                    <input type="radio" name="q3" value="0" required="required" />&nbsp;No
                  </li>
                </ol>
              </div>
              <!-- Pregunta 4-->
              <div class="form-group">
                <h5>¿Ha tenido o presenta perdida de olfato?</h5>
                <ol style="list-style: none;">
                  <li>
                    <input type="radio" name="q4" value="1" required="required" />&nbsp;Si
                  </li>
                  <li>
                    <input type="radio" name="q4" value="0" required="required" />&nbsp;No
                  </li>
                </ol>
              </div>
              <!-- Pregunta 5-->
              <div class="form-group">
                <h5>¿Ha tenido o presenta dificultad para respirar?</h5>
                <ol style="list-style: none;">
                  <li>
                    <input type="radio" name="q5" value="1" required="required" />&nbsp;Si
                  </li>
                  <li>
                    <input type="radio" name="q5" value="0" required="required" />&nbsp;No
                  </li>
                </ol>
              </div>
              <!-- Pregunta 6-->
              <div class="form-group">
                <h5>¿Ha tenido o presenta dolores musculares?</h5>
                <ol style="list-style: none;">
                  <li>
                    <input type="radio" name="q6" value="1" required="required" />&nbsp;Si
                  </li>
                  <li>
                    <input type="radio" name="q6" value="0" required="required" />&nbsp;No
                  </li>
                </ol>
              </div>
              <!-- Pregunta 7-->
              <div class="form-group">
                <h5>¿Ha tenido o presenta dolor de cabeza?</h5>
                <ol style="list-style: none;">
                  <li>
                    <input type="radio" name="q7" value="1" required="required" />&nbsp;Si
                  </li>
                  <li>
                    <input type="radio" name="q7" value="0" required="required" />&nbsp;No
                  </li>
                </ol>
              </div>
              <!-- Pregunta 8-->
              <div class="form-group">
                <h5>¿Ha tenido o presenta dolor de garganta?</h5>
                <ol style="list-style: none;">
                  <li>
                    <input type="radio" name="q8" value="1" required="required" />&nbsp;Si
                  </li>
                  <li>
                    <input type="radio" name="q8" value="0" required="required" />&nbsp;No
                  </li>
                </ol>
              </div>
              <!-- Pregunta 9-->
              <div class="form-group">
                <h5>¿Ha tenido o presenta dolor en pecho? (tórax)</h5>
                <ol style="list-style: none;">
                  <li>
                    <input type="radio" name="q9" value="1" required="required" />&nbsp;Si
                  </li>
                  <li>
                    <input type="radio" name="q9" value="0" required="required" />&nbsp;No
                  </li>
                </ol>
              </div>
              <!-- Pregunta 10-->
              <div class="form-group">
                <h5>¿Ha tenido o presenta diarrea?</h5>
                <ol style="list-style: none;">
                  <li>
                    <input type="radio" name="q10" value="1" required="required" />&nbsp;Si
                  </li>
                  <li>
                    <input type="radio" name="q10" value="0" required="required" />&nbsp;No
                  </li>
                </ol>
              </div>
              <!-- Pregunta 11-->
              <div class="form-group">
                <h5>¿Padece Hipertensión (presión alta), Diabetes (Azúcar elevada), Asma u Obesidad / sobrepeso?</h5>
                <ol style="list-style: none;">
                  <li>
                    <input type="radio" name="q11" value="1" required="required" />&nbsp;Si
                  </li>
                  <li>
                    <input type="radio" name="q11" value="0" required="required" />&nbsp;No
                  </li>
                </ol>
              </div>
              <!-- Peso -->
              <div class="form-group">
                <h5><label for='nombre' class='form-label'>¿Cuanto pesas? (kg):</label></h5>
     						<div class="input-group">
                  <div class="row">
                    <div class="col">
                      <input type="number" step="any" name="peso" class="form-control" placeholder="65 (kg)" required="required" >
                    </div>
                  </div>
     						</div><br>
              </div>
              <!-- Estatura -->
              <div class="form-group">
                <h5><label for='nombre' class='form-label'>¿Cuanto mides? (m):</label></h5>
     						<div class="input-group">
                  <div class="rows">
                    <div class="col">
                      <input type="number" step="any" name="estatura" class="form-control" placeholder="1.63 (m)"  required="required">
                    </div>
                  </div>
     						</div><br>
              </div>

              <!-- Temperatura -->
              <div class="form-group">
                <h5><label for='nombre' class='form-label'>¿Cual es tu temperatura? (ºC):</label></h5>
     						<div class="input-group">
                  <div class="row">
                    <div class="col">
                      <input type="number"  step="any" name="temperatura" class="form-control" placeholder="37 (ºC)">
                    </div>
                  </div>
     						</div><br>
              </div>

              <!-- Nivel de oxígeno -->
              <div class="form-group">
                <h5><label for='nombre' class='form-label'>¿Cual es tu nivel de oxígeno? (SPO2):</label></h5>
     						<div class="input-group">
                  <div class="row">
                    <div class="col">
                      <input type="number" step="any" name="oxigeno" class="form-control" placeholder="96 (SPO2)">
                    </div>
                  </div>
     						</div><br>
              </div>

              <!-- Presión -->
              <div class="form-group">
                <h5><label for='nombre' class='form-label'>¿Cual es tu presión arteliar? (SYS | DIA):</label></h5>
     						<div class="input-group">
                  <div class="row">
                    <div class="col">
                      <input type="number" step="any" name="sistolica" class="form-control" placeholder="120 (SYS)">
                    </div>
                    <div class="col">
                      <input type="number"step="any" name="diastolica" class="form-control" placeholder="80 (DIA)">
                    </div>
                  </div>
     						</div>
              </div>
              <br>

              <div class="form-group text-center ">
                <input type="submit" value="Enviar" name="submit" class="btn btn-outline-dark btn-lg"/>
              </div>

              <?php
              include("resultados.php");
               ?>
            </form>

            <div class="col-lg-12 mx-auto">
                <p class="lead mb-4 text-dark" style="text-align: center;">Este test es informativo y no representa un diagnóstico médico. Si presentas síntomas respiratorios graves, acude inmediatamente a la unidad de salud más cercana.</p>
            </div>
            </div>

       </div>
     </div>
   </div>
 </div>
 <?php
 include("footer.php");
  ?>
 </body>
 </html>
