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
    <title>Acerca de</title>
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
.paragraph {
    text-align: justify;
    text-justify: inter-word;
}

.background {
    background-image: linear-gradient(to right, rgba(179, 182, 183), rgba(40, 55, 71));
}

.backgroundCovid {
    height: 500px;
    overflow-x: hidden;
    background-image: url("images/background_virus.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
}

.backgroundAcerca {
    height: 600px;
    overflow-x: hidden;
    background-image: url("images/fcc-logo.png");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    background-size: contain;
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

    <div class="px-3 pt-2 text-center border-bottom backgroundCovid ">
			<br>
        <h1 class="display-5 fw-bold" style="text-shadow: 1px 1px 2px white;">Simulador COVID</h1>
        <div class="col-lg-6 mx-auto paragraph">
            <p class="lead mb-4">Simulador COVID, es un test desarrollado por un equipo de programadores
                de la facultad de ciencias de la computaci&oacute;n de la Benem&eacute;rita Universidad Aut&oacute;noma
                de Puebla.
                Nuestro equipo realizo una investigaci??n ardua sobre el tema para poder desarrollar este test
                y ponerlo a disposici??n de la poblaci??n.<br>
                Aunque en el inicio indicamos que no sustituye una consulta medica, podemos estar seguros de que
                es un apoyo para un diagn&oacute;stico r&aacute;pido.<br>
                Al realizar su registro a nuestra plataforma ayudara a que el resultado del test sea m&aacute;s preciso,
                al mismo tiempo se guarda un historial de sus pruebas donde podra consultar el resultado de cada una.
            </p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
              <?php echo "
                <a href='contacto_user.php'>
                    <button type='button'
                        class='btn btn-outline-secondary btn-lg px-4 gap-3'>Cont&aacute;ctanos $nombre </button>
                </a>
                ";?>
            </div>
            <br>
        </div>
    </div>
		<br><br>

    <div class="b-example-divider"></div>
    <div class="px-4 py-4 text-center backgroundAcerca"></div>
    <div class="b-example-divider"></div>
    <div class="text-center">
        <h1>Nuestro equipo de desarrollo</h1>
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                        <img src="./user_images/profile_picture.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ingeniero </h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="./user_images/profile_picture.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ingeniero </h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="./user_images/profile_picture.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ingeniero Iv&aacute;n Eduardo De Alba</h5>
                            <p class="card-text">Encargado del fronted</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="./user_images/profile_picture.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ingeniero </h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        include("footer.php");
    ?>

</body>

</html>
