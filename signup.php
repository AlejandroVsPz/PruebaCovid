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
                <button class="btn btn-outline-dark me-5" type="submit" name="signup">¿Ya tienes cuenta?</button>
                <?php
  				if (isset($_POST['signup'])) {
  					echo "<script>window.open('signin.php','_self')</script>";
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
    height: 100%;
    margin: 10px auto;
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
</style>

<body>

    <div class="row">
        <div class="col-sm-12">
            <div class="main-content">
                <div class="header">
                    <h3 style="text-align: center; font-family: 'Arial'; letter-spacing: 1pt;" id="h3">
                        <strong>Registrate</strong></h3>
                </div>
                <div class="l-part">
                    <form action="" method="post">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre"
                                required="required">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <input type="text" name="apellido" class="form-control" placeholder="Apellido"
                                required="required">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="Correo Electronico" required="required">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" id="password" name="pass" class="form-control"
                                placeholder="Contraseña" required="required">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" id="password" name="passconfirm" class="form-control"
                                placeholder="Confirmar Contraseña" required="required">
                        </div><br>

                        <center><input type="submit" value="Registrarse" name="submit"
                                class="btn btn-outline-dark btn-lg" id="signup" /></center>
                        <!--<center><button class="btn btn-info btn-lg" id="signup" name="sign_up">Sign Up</button></center>-->
                        <?php
            include("insert_user.php");

           ?>
                        <center><small id="emailHelp" class="form-text text-dark" style="text-align: center;">Al
                                registrarse, acepta los Términos de servicio y la Política de privacidad. </small>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>

    <?php
include("footer.php");
 ?>
</body>

</html>