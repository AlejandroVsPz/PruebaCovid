<?php
	session_start();

	include("header.php");

	if (!isset($_SESSION["user_email"])) {
		header("location: index.php");
	}

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</head>

<style>

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    .b-example-divider {
        height: 3rem;
        background-image: linear-gradient(to right, rgba(244, 246, 247), rgba(169, 204, 227), rgba(244, 246, 247));
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    @media (min-width: 992px) {
        .rounded-lg-3 {
            border-radius: .3rem;
        }
    }

</style>

<body>

  <?php echo"

    <div class='container mt-5'>
        <h1>Hola nos gustar&iacute;a saber sobre ti, ¡Cont&aacute;ctanos!</h1>
        <form class='row g-3'>
            <div class='col-md-6'>
                <label for='nombre' class='form-label'>Nombre(s)</label>
                <input type='text' class='form-control' id='nombre' required placeholder='$nombre' value='$nombre'>
            </div>
            <div class='col-md-6'>
                <label for='apellido' class='form-label'>Apellidos</label>
                <input type='text' class='form-control' id='apellido' required placeholder='$apellido' value='$apellido'>
            </div>
            <div class='col-md-6'>
                <label for='email' class='form-label'>Email</label>
                <input type='email' class='form-control' id='email' required placeholder='$correo' value='$correo'>
            </div>
            <div class='col-md-6'>
                <label for='telefono' class='form-label'>Telefono</label>
                <input type='tel' class='form-control' id='telfono' placeholder='$telefono' value='$telefono'>
            </div>
            <div class='col-md-12'>
                <label for='comentarios' class='form-label'>Comentarios</label>
                <textarea class='form-control' id='comentarios' rows='3'>
                </textarea>
            </div>
            <div class='col-md-12'>
                <button type='submit' class='btn btn-outline-secondary btn-lg px-4 gap-3'>Enviar</button>
            </div>
        "; ?>

        </form>
    </div>

    <?php
        include("footer.php");
    ?>

</body>

</html>
