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
  height: 80%;
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

 </style>
 <body>
   <?php
     while ($resultado = mysqli_fetch_array($run_sql)) {

    ?>
    <div class="row">
 		<div class="col-sm-12">
 			<div class="main-content">
 				<div class="header">
 					<h3 style="text-align: center; font-family: 'Arial'; letter-spacing: 1pt;" id="h3"><strong>Editar Contrase??a</strong></h3>
 				</div>
 				<div class="l-part">
 					<form action="" method="post">
 						<input type="hidden" name="id" value="<?php echo($resultado['user_id'])  ?>">
            <label for='nombre' class='form-label'>Contrase??a Anterior</label>
 						<div class="input-group">
 							<input type="password" name="last_password" class="form-control" placeholder="Contrase??a Anterior" required="required">
 						</div><br>
            <label for='nombre' class='form-label'>Contrase??a Nueva</label>
            <div class="input-group">
 							<input type="password" name="new_password" class="form-control" placeholder="Contrase??a Nueva" required="required">
 						</div><br>
            <label for='nombre' class='form-label'>Confirmar Contrase??a</label>
 						<div class="input-group">
 							<input type="password" name="confirm_password" class="form-control" placeholder="Confirmar Contrase??a" required="required">
 						</div><br>

 						<center><input type = "submit" value ="Guardar Contrase??a" name="submit" class="btn btn-outline-dark btn-lg"></center>

 						<!--<center><button class="btn btn-info btn-lg" id="signup" name="sign_up">Sign Up</button></center>-->
 						<?php
 							include("update_password.php");

 						 ?>
 						 <!--<center id="emailHelp" class="form-text text-muted" style="text-align: center;"> <a href="clientes.php">Regresar</a></center>-->
             <br>
 						<center><small id="emailHelp" class="form-text text-dark" style="text-align: center;">La informaci??n es privada</small></center>
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
