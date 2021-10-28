<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand ms-5" href="index.php"><img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">&nbspSimulador Covid</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item active">
          <a class="nav-link text-dark" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-dark" href="#">Prueba Covid</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-dark" aria-current="page" href="#">Contacto</a>
        </li>
      </ul>
      <form method="post" class="d-flex">
        <button class="btn btn-outline-dark me-2" type="submit" name="signin">Iniciar Sesión</button>
				<?php
				if (isset($_POST['signin'])) {
					echo "<script>window.open('signin.php','_self')</script>";
				}
				 ?>
        <button class="btn btn-dark me-5" type="submit" name="signup">Registrarse</button>
				<?php
				if (isset($_POST['signup'])) {
					echo "<script>window.open('signup.php','_self')</script>";
				}
				 ?>
      </form>
    </div>
  </div>
</nav>
<style>

.paragraph{
	text-align: justify;
  text-justify: inter-word;
}
.background{
	background-image: linear-gradient(to right, rgba(179,182,183), rgba(40,55,71));
}
.backgroundCovid{
		height: 500px;
		overflow-x: hidden;
		background-image: url("images/covid.jpg");
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-position: center;
		background-size: cover;
	}

	.bd-placeholder-img {
		font-size: 1.125rem;
		text-anchor: middle;
		-webkit-user-select: none;
		-moz-user-select: none;
		user-select: none;
	}

	@media (min-width: 768px) {
		.bd-placeholder-img-lg {
			font-size: 3.5rem;
		}
	}


	.b-example-divider {
	  height: 3rem;
		background-image: linear-gradient(to right, rgba(244,246,247), rgba(169,204,227), rgba(244,246,247));
	  border: solid rgba(0, 0, 0, .15);
	  border-width: 1px 0;
	  box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
	}

	@media (min-width: 992px) {
	  .rounded-lg-3 { border-radius: .3rem; }
	}


</style>
<body>
    
</body>
</html>