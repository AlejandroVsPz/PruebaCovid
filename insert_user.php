<?php
if (isset($_POST["submit"])){

	include("conexion.php");

	$nombre = htmlentities(mysqli_real_escape_string($con,$_POST['nombre']));
	$apellido = htmlentities(mysqli_real_escape_string($con,$_POST['apellido']));
	$email = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
	$pass = htmlentities(mysqli_real_escape_string($con,$_POST['pass']));
	$passconfirm = htmlentities(mysqli_real_escape_string($con,$_POST['passconfirm']));
	$profile_pic = "users_images/profile_picture.png";

	if (strlen($pass) < 6) {
		echo "<script>alert('La contraseña debe de ser mayor a 6 caracteres!')</script>";
		echo "<script>window.open('signup.php', '_self')</script>";
		exit();
	}

	if ($pass != $passconfirm) {
		echo "<script>alert('Ups, Las contraseñas no coinciden!')</script>";
		echo "<script>window.open('signup.php', '_self')</script>";
		exit();
	}

	$check_user = "SELECT * FROM User WHERE user_email='$email'";

	$run_user = mysqli_query($con, $check_user);

	$check = mysqli_num_rows($run_user);

	if ($check >= 1) {
		echo "<script>alert('El correo ya existe, intenta otro correo!')</script>";
		echo "<script>window.open('signup.php', '_self')</script>";
		exit();
	}

	$insert = "INSERT INTO `User` (`user_name`, `user_lastname`, `user_email`, `user_password`,`user_image`) VALUES('$nombre', '$apellido', '$email','$pass','$profile_pic')";

	if (mysqli_query($con, $insert)) {
		echo "<script>alert('Bien hecho $nombre , listo para seguir.')</script>";
		//mysqli_close($con);
		echo "<script>window.open('home.php', '_self')</script>";
	}else {
		echo "<script>alert('No se pudo registrar, intenta otra ves!')</script>";
		echo "Error: " . $insert . "<br>" . mysqli_error($con);
		echo "<script>window.open('signup.php', '_self')</script>";
	}
}
?>
