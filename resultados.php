<?php

function verfecha($vfecha){
$fch=explode("-",$vfecha);
$tfecha=$fch[2]."-".$fch[1]."-".$fch[0];
return $tfecha;
}

function calcular_edad($fecha){
$dias = explode("-", $fecha, 3);
$dias = mktime(0,0,0,$dias[1],$dias[0],$dias[2]);
$edad = (int)((time()-$dias)/31556926 );
return $edad;
}

if (isset($_POST["submit"])){

		include("conexion.php");
    $id = htmlentities(mysqli_real_escape_string($con, $_POST['id']));
    $user_name =  htmlentities(mysqli_real_escape_string($con, $_POST['nombre']));
    $user_lastname =  htmlentities(mysqli_real_escape_string($con, $_POST['apellido']));
    $cerca_de_covid =  htmlentities(mysqli_real_escape_string($con, $_POST['q1']));
    $fiebre =  htmlentities(mysqli_real_escape_string($con, $_POST['q2']));
    $tos =  htmlentities(mysqli_real_escape_string($con, $_POST['q3']));
    $perdida_de_olfato =  htmlentities(mysqli_real_escape_string($con, $_POST['q4']));
    $dificultad_para_respirar =  htmlentities(mysqli_real_escape_string($con, $_POST['q5']));
    $dolores_musculares =  htmlentities(mysqli_real_escape_string($con, $_POST['q6']));
    $dolor_de_cabeza =  htmlentities(mysqli_real_escape_string($con, $_POST['q7']));
    $dolor_de_garganta =  htmlentities(mysqli_real_escape_string($con, $_POST['q8']));
    $dolor_torax =  htmlentities(mysqli_real_escape_string($con, $_POST['q9']));
    $diarrea =  htmlentities(mysqli_real_escape_string($con, $_POST['q10']));
    $enfermedades =  htmlentities(mysqli_real_escape_string($con, $_POST['q11']));
    $nueva_fecha = verfecha($_POST['fecha_nacimiento']);
    $edad = calcular_edad($nueva_fecha);
    $peso =  htmlentities(mysqli_real_escape_string($con, $_POST['peso']));
    $estatura =  htmlentities(mysqli_real_escape_string($con, $_POST['estatura']));
    $temperatura =  htmlentities(mysqli_real_escape_string($con, $_POST['temperatura']));
    $nivel_de_oxigeno =  htmlentities(mysqli_real_escape_string($con, $_POST['oxigeno']));
    $presion_sistolica =  htmlentities(mysqli_real_escape_string($con, $_POST['sistolica']));
    $presion_diastolica =  htmlentities(mysqli_real_escape_string($con, $_POST['diastolica']));
    $presion_arterial = $presion_sistolica.'/'.$presion_diastolica;
    $imc = ($peso/($estatura*$estatura));

    date_default_timezone_set('America/Mexico_City');
    //$date = date('m/d/Y h:i:s a', time());

    $select_user = "SELECT * FROM User WHERE user_id='$id'";
		$query = mysqli_query($con, $select_user);

		$row = mysqli_fetch_array($query);
		$user_id = $row['user_id'];


		if ($id != $user_id) {
			echo "<script>alert('El ID no coincide!')</script>";
			echo "<script>window.open('logout.php', '_self')</script>";
			exit();
		}


    $insert = "INSERT INTO `Sintomas` (`user_id`, `user_name`, `user_lastname`, `fiebre`, `tos`, `perdida_de_olfato`, `dificultad_para_respirar`, `dolores_musculares`, `dolor_de_cabeza`, `dolor_de_garganta`, `dolor_torax`, `diarrea`, `edad`, `peso`, `estatura`, `temperatura`, `nivel_de_oxigeno`, `presion_arterial`, `imc`) VALUES('$id', '$user_name', '$user_lastname', '$fiebre','$tos','$perdida_de_olfato', '$dificultad_para_respirar', '$dolores_musculares', '$dolor_de_cabeza','$dolor_de_garganta', '$dolor_torax', '$diarrea', '$edad', '$peso', '$estatura', '$temperatura', '$nivel_de_oxigeno', '$presion_arterial', '$imc' )";





    if (mysqli_query($con, $insert)) {
      echo "<script>alert('Bien hecho $user_name , listo para seguir.')</script>";
      //mysqli_close($con);
      echo "<script>window.open('home.php?user_id=$user_id', '_self')</script>";
    }else {
      echo "<script>alert('No se pudo registrar, intenta otra ves!')</script>";
      echo "Error: " . $insert . "<br>" . mysqli_error($con);
      echo "<script>window.open('prueba_covid.php?user_id=$user_id', '_self')</script>";
    }
	}


 ?>
