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
  width: 50%;
  height: 90%;
  margin: 60px auto;
  background-color: rgba(255,255,255, 0.5);
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

 </style>
 <body>
   <?php
     while ($resultado = mysqli_fetch_array($run_sql)) {

    ?>
    <div class="row">
 		<div class="col-sm-12">
 			<div class="main-content">
 				<div class="header">
 					<h3 style="text-align: center; font-family: 'Arial'; letter-spacing: 1pt;" id="h3"><strong>Editar Perfil</strong></h3>
 				</div>
 				<div class="l-part">
 					<form action="" method="post">
 						<input type="hidden" name="id" value="<?php echo($resultado['user_id'])  ?>">
            <label for='nombre' class='form-label'>Nombre(s)</label>
 						<div class="input-group">
 							<input type="text" name="nombre" class="form-control" placeholder="Nombre Completo" value="<?php echo($resultado['user_name'])  ?>">
 						</div><br>
            <label for='nombre' class='form-label'>Apellido</label>
            <div class="input-group">
 							<input type="text" name="apellido" class="form-control" placeholder="Apellido"  value="<?php echo($resultado['user_lastname'])  ?>">
 						</div><br>
            <label for='nombre' class='form-label'>Dirección</label>
 						<div class="input-group">
 							<input type="text" name="direccion" class="form-control" placeholder="Dirección" required="required" value="<?php echo($resultado['user_adress'])  ?>">
 						</div><br>
            <label for='nombre' class='form-label'>Fecha de Nacimiento</label>
 						<div class="input-group">
 							<input type="date" id="rfc" name="fecha_nacimiento" class="form-control" placeholder="Fecha de Nacimiento" required="required" value="<?php echo($resultado['user_birthday'])  ?>">
 						</div><br>
            <label for='nombre' class='form-label'>Telefóno</label>
 						<div class="input-group">
 							<input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Telefóno"  value="<?php echo($resultado['user_phone'])  ?>">
 						</div><br>
            <label for='nombre' class='form-label'>Correo Electronico</label>
 						<div class="input-group">
 							<input type="email" id="email" name="email" class="form-control" placeholder="Correo Electronico" required="required" value="<?php echo($resultado['user_email'])  ?>">
 						</div><br>

 						<center><input type = "submit" value ="Guardar Cambios" name="submit" class="btn btn-outline-dark btn-lg"></center>

 						<!--<center><button class="btn btn-info btn-lg" id="signup" name="sign_up">Sign Up</button></center>-->
 						<?php
 							include("update_user.php");

 						 ?>
 						 <!--<center id="emailHelp" class="form-text text-muted" style="text-align: center;"> <a href="clientes.php">Regresar</a></center>-->
             <br>
 						<center><small id="emailHelp" class="form-text text-dark" style="text-align: center;">La información es privada</small></center>
            <center><p><a href="<?php echo"edit_password.php?user_id=$user_id"  ?>" class="text-dark">Cambiar Contraseña</a></p></center>
 					</form>
 				</div>
 			</div>
 		</div>
 	</div>








    <?php
      }
     ?>
 <?php
 include("footer.php");
  ?>

</body>
</html>
