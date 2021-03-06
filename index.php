<!DOCTYPE html>
<html>

<head>
    <title>Simulador Covid</title>
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
</head>
<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light ">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand ms-5" href="index.php"><img src="images/logo.png" width="30" height="30"
                class="d-inline-block align-top" alt="">&nbspSimulador COVID-19</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item active">
                    <a class="nav-link text-dark" aria-current="page" href="index.php">Inicio</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-dark" href="signin.php">Prueba COVID-19</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-dark" aria-current="page" href="acerca.php">Acerca de</a>
                </li>
            </ul>
            <form method="post" class="d-flex">
                <button class="btn btn-outline-dark me-2" type="submit" name="signin">Iniciar Sesi??n</button>
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
    background-image: url("images/backgrounf_image.jpeg");
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
    <div class="px-4 py-4 text-center backgroundCovid">
        <img class="d-block mx-auto mb-4" src="images/logo.png" alt="" width="72" height="72">
        <h1 class="display-5 fw-bold">Prueba COVID-19</h1>
        <div class="col-lg-6 mx-auto paragraph">
            <h6><p class="lead mb-4 text-dark" >Este auto-test le permitir??
                orientarse con respecto a los s??ntomas de la COVID-19, pero debe saber que nunca sustituir?? una consulta
                m??dica. Recuerde que si presenta alg??n s??ntoma que indique gravedad (dificultad repentina para respirar,
                alteraci??n del nivel de conciencia, dolor tor??cico importante...) deber?? consultar con el servicio de
                emergencias sanitarias.</p></h6>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="signin.php">
                    <button type="button" class="btn btn-outline-dark btn-lg px-4 gap-3">Realizar Prueba</button>
                </a>
            </div>
        </div>
    </div>

    <div class="b-example-divider"></div>

    <div class="px-3 pt-2 my-5 text-center border-bottom">
        <h1 class="display-4 fw-bold">??Qu?? es?</h1>
        <div class="col-lg-6 mx-auto paragraph">
            <p class="lead mb-4">El coronavirus SARS-Cov-2 es un virus que apareci?? en China. Despu??s se extendi?? a
                todos los continentes del mundo provocando una pandemia. Actualmente Europa y Am??rica son los m??s
                afectados. Este nuevo virus, provoca la enfermedad conocida con el nombre de COVID-19.</p>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
            <div class="container px-5">
                <a href="https://coronavirus.gob.mx/informacion-accesible/">
                    <img src="images/covid.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image"
                        width="700" height="500" loading="lazy">
                </a>
            </div>
        </div>
    </div>

    <div class="b-example-divider"></div>

    <div class="container px-4 py-4" id="custom-cards">
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col">
                <a href="https://coronavirus.gob.mx/">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                        style="background-image: url('images/covid4.jpg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Todo sobre el COVID-19</h2>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="images/logo.png" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white">
                                </li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="https://coronavirus.gob.mx/informacion-accesible/">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                        style="background-image: url('images/sars-cov-2.jpg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Informaci??n general</h2>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="images/logo.png" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white">
                                </li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="https://www.who.int/health-topics/coronavirus#tab=tab_1">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                        style="background-image: url('images/coronavirus-2.jpg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Coronavirus disease</h2>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="images/logo.png" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white">
                                </li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="b-example-divider"></div>

    <div class="px-3 pt-2 my-5 text-center border-bottom">
        <h1 class="display-5 fw-bold lh-1 mb-3">Reconoce los S??ntomas</h1>
        <div class="col-lg-6 mx-auto paragraph">
            <p class="lead mb-4">Si presentas estos s??ntomas, puedes llamar a los siguientes tel??fonos: 800
                0044 800 o al 55 56 58 11 11. Por favor, considera que, si tienes esos s??ntomas, no necesariamente
                tienes COVID-19, podr??a ser s??lo gripe. La mayor??a de las personas que se contagien no desarrollar??n
                la enfermedad y mejorar??n por s?? mismas. Pero a??n as?? pueden transmitir el virus a las dem??s.
                Cuidarnos es tambi??n cuidar a las dem??s personas. Por eso debes llamar a los tel??fonos anteriores,
                para que te puedan brindar m??s informaci??n sobre qu?? puedes hacer.</p>
        </div>
        <div class="overflow-hidden col-lg-6 mx-auto" style="width: 40%; height: auto;">
            <div class="container px-5">
                <a href="https://coronavirus.gob.mx/informacion-accesible/">
                    <img src="images/sintomasComun.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image"
                        width="700" height="500" loading="lazy">
                </a>
            </div>
        </div>
    </div>

    <div class="b-example-divider"></div>


    <?php
include("footer.php");
 ?>

</body>

</html>
