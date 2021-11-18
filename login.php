<?php
	@session_start();

	include("conexion.php");

	if (isset($_POST["login"])) {

		$email = htmlentities(mysqli_real_escape_string($con, $_POST["email"]));
		$pass = htmlentities(mysqli_real_escape_string($con, $_POST["pass"]));


		$select_user = "SELECT * FROM User WHERE user_email='$email'";
		$query = mysqli_query($con, $select_user);

		$row = mysqli_fetch_array($query);
		//$user_id = $row['user_id'];

		$check_user = mysqli_num_rows($query);

		if ($check_user == 1) {

				$verify = password_verify($pass,$row['user_password']);

				if ($verify) {

					$_SESSION['user_email'] = $email;
					echo "<script>window.open('home.php', '_self')</script>";

				}else {
					echo "<script>alert('Ups, la contraseña es incorrecta!')</script>";
		  		echo "<script>window.open('signin.php', '_self')</script>";
		  		exit();
				}

		}else{
			echo "<script>alert('Tu correo o contraseña son incorrectos')</script>";
			echo "<script>window.open('signin.php', '_self')</script>";
		}
	}
 ?>
