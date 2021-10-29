<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
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
    <title>Iniciar Sesión</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand ms-5" href="index.php"><img src="images/logo.png" width="30" height="30"
                class="d-inline-block align-top" alt="">&nbspSimulador Covid</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">

            </ul>
            <form method="post" class="d-flex">
                <button class="btn btn-outline-dark me-5" type="submit" name="signup">¿No tienes cuenta?</button>
                <?php
  				if (isset($_POST['signup'])) {
  					echo "<script>window.open('signup.php','_self')</script>";
  				}
  				 ?>
            </form>
        </div>
    </div>
</nav>
<style media="screen">
body {
    overflow-x: hidden;
    background-image: url("images/covid.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
}

.main-content {
    width: 50%;
    height: 80%;
    margin: 60px auto;
    background-color: rgba(255, 255, 255, 0.5);
    border: 2px solid #34495e;
    padding: 40px 50px;
    border-radius: 20px;
}


#h3 {
    background: -webkit-linear-gradient(#34495e, #34495e);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.overlap-text {
    position: relative;
}

.overlap-text a {
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
    <div class="row">
        <div class="col-sm-12">
            <div class="main-content">
                <div class="header">
                    <h3 style="text-align: center; font-family: 'Arial'; letter-spacing: 1pt;" id="h3"><strong>Iniciar
                            Sesión</strong></h3>
                </div>
                <div class="l-part">
                    <form action="" method="post">
                        <input type="email" name="email" placeholder="Correo" required="required"
                            class="form-control imput-md"><br>
                        <div class="overlap-text">
                            <input type="password" name="pass" placeholder="Contraseña" required="required"
                                class="form-control input-md"><br>
                        </div>
                        <a href="recuperar_contraseña.php" style="text-decoration: none; float: right; color: #34495e;"
                            data-toggle="tooltip" title="Recuperar Contraseña">Recuperar Contraseña</a><br><br>
                        <center><input type="submit" value="Iniciar Sesión" name="login"
                                class="btn  btn-lg btn-outline-dark" /></center>
                        <?php

  							include("login.php");

  						 ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <?php
    include("footer.php");
     ?>

</body>

</html>