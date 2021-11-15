<?php

if (isset($_POST["submit"])){

		include("conexion.php");

		$id = htmlentities(mysqli_real_escape_string($con, $_POST['id']));
		$last_password = htmlentities(mysqli_real_escape_string($con,$_POST['last_password']));
    $new_password = htmlentities(mysqli_real_escape_string($con,$_POST['new_password']));
		$confirm_password = htmlentities(mysqli_real_escape_string($con,$_POST['confirm_password']));

		$select_user = "SELECT * FROM User WHERE user_id='$id'";
		$query = mysqli_query($con, $select_user);

		$row = mysqli_fetch_array($query);
		$user_password = $row['user_password'];

    if ($last_password != $user_password) {
  		echo "<script>alert('Ups, la contraseña anterior es incorrecta!')</script>";
  		echo "<script>window.open('edit_password.php?user_id=$user_id', '_self')</script>";
  		exit();
  	}

  	if ($new_password != $confirm_password) {
  		echo "<script>alert('Ups, las contraseñas no coinciden!')</script>";
  		echo "<script>window.open('edit_password.php?user_id=$user_id', '_self')</script>";
  		exit();
  	}

    if ($id != $user_id) {
			echo "<script>alert('El ID no coincide!')</script>";
			echo "<script>window.open('logout.php', '_self')</script>";
			exit();
		}

		$actualizar = "UPDATE User SET user_password = '$new_password' WHERE user_id = '$id' ";


		if (mysqli_query($con, $actualizar)) {
			echo "<script>alert('Se guardo la contraseña: $nombre , listo para seguir.')</script>";
			//mysqli_close($con);
			echo "<script>window.open('home.php?user_id=$user_id', '_self')</script>";
		}else {
			echo "<script>alert('No se pudo guardar la contraseña, intenta otra ves!')</script>";
			echo "Error: " . $insert . "<br>" . mysqli_error($con);
			echo "<script>window.open('edit_password.php?user_id=$user_id', '_self')</script>";
		}
	}


 ?>
