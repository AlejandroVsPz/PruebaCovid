<?php
	include("conexion.php");

  $user_email = $_SESSION['user_email'];
  $user = "SELECT * FROM User WHERE user_email='$user_email'";
  $run_user = mysqli_query($con, $user);
  $row = mysqli_fetch_array($run_user);


  $user_id = $row['user_id'];
  $nombre = $row['user_name'];
  $apellido = $row['user_lastname'];
  $correo = $row['user_email'];
  $profile_pic = $row['user_image'];
	$telefono = $row['user_phone'];
	$fecha_nacimiento = $row['user_birthday']

 ?>

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

 <style media="screen">

 .radius{
	 border: 1px solid #17202a;
	 border-radius: 100%;

 }

 </style>


<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light ">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand ms-5" href='home.php?<?php echo "user_id=$user_id" ?>'><img src="images/logo.png"
                width="30" height="30" class="d-inline-block align-top" alt="">&nbspSimulador COVID-19</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item active">
                    <a class="nav-link text-dark" href='prueba_covid.php?<?php echo "user_id=$user_id" ?>'>Nueva Prueba</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-dark" aria-current="page" href="acerca_user.php">Acerca de</a>
                </li>
            </ul>

            <?php
      echo"
      <div class='dropdown me-5'>
        <button class='btn btn-outline-dark dropdown-toggle' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>
           <img  src='user_images/$profile_pic' alt='Profile' class='img-circle radius' width='28px' height='28px'>  $nombre
        </button>
        <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>
          <li><a class='dropdown-item' href='prueba_covid.php?user_id=$user_id'><i class='bi bi-card-checklist' style='font-size: 1.3rem;'></i> Nueva Prueba</a></li>
          <li><a class='dropdown-item' href='user_profile.php?user_id=$user_id'><i class='bi bi-person-badge-fill' style='font-size: 1.3rem;'></i> Perfil</a></li>
          <li><a class='dropdown-item' href='edit_profile.php?user_id=$user_id'><i class='bi bi-pencil-square' style='font-size: 1.3rem;'></i> Editar Perfil</a></li>
          <li><hr class='dropdown-divider'></li>
          <li><a class='dropdown-item' href='logout.php'><i class='bi bi-power' style='font-size: 1.3rem;'></i> Cerrar Sesi??n</a></li>
        </ul>
      </div>
      ";
      ?>


        </div>
    </div>
</nav>
