<?php

if (isset($_POST["submit"])){

		include("conexion.php");

		$id = htmlentities(mysqli_real_escape_string($con, $_POST['id']));
		$nombre = htmlentities(mysqli_real_escape_string($con,$_POST['nombre']));
    $apellido = htmlentities(mysqli_real_escape_string($con,$_POST['apellido']));
		$direccion = htmlentities(mysqli_real_escape_string($con,$_POST['direccion']));
		$fecha_nacimiento = htmlentities(mysqli_real_escape_string($con,$_POST['fecha_nacimiento']));
		$telefono = htmlentities(mysqli_real_escape_string($con,$_POST['telefono']));
		$email = htmlentities(mysqli_real_escape_string($con,$_POST['email']));

		if ($id != $user_id) {
			echo "<script>alert('El ID no coincide!')</script>";
			echo "<script>window.open('logout.php', '_self')</script>";
			exit();
		}



		$actualizar = "UPDATE User SET user_name = '$nombre', user_lastname = '$apellido', user_adress = '$direccion', user_birthday = '$fecha_nacimiento', user_phone = '$telefono', user_email = '$email' WHERE user_id = '$id' ";





		if (mysqli_query($con, $actualizar)) {
			echo "<script>alert('Se guardaron los cambios $nombre , listo para seguir.')</script>";
			//mysqli_close($con);
			echo "<script>window.open('home.php', '_self')</script>";
		}else {
			echo "<script>alert('No se pudo actualizar, intenta otra ves!')</script>";
			echo "Error: " . $insert . "<br>" . mysqli_error($con);
			echo "<script>window.open('edit_profile.php', '_self')</script>";
		}
	}


 ?>
