<?
 include_once 'config/contents.php';
 $contenidos = new Clases\Contents();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Practica</title>
</head>

<body>

    <div class="container-fluid-navbar m-0">

        <div class="navbar align-items-center " style="height: 120px; ">
            <img class="mx-auto d-block" src="admin/assets/images/img01.png" style="width: 230px">
        </div>

        <div>
            <ul class="nav justify-content-center" style="height: 45px">
                <li class="nav-item pe-4">
                    <a class="nav-link" href="#">INICIO</a>
                </li>
                <li class="nav-item pe-4">
                    <a class="nav-link" href="#">SOBRE NOSOTROS</a>
                </li>
                <li class="nav-item pe-4">
                    <a class="nav-link" href="#">SERVICIOS</a>
                </li>
                <li class="nav-item pe-4">
                    <a class="nav-link" href="#">DÓNDE ENCONTRARNOS</a>
                </li>
                <li class="nav-item pe-4">
                    <a class="nav-link" href="#">CONTACTO</a>
                </li>
            </ul>
        </div>
    </div>

    <div id="intro" class="carousel slide pb-5" data-bs-ride="carousel">

        <div class="carousel-indicators pb-5">

            <button data-bs-target="#intro" data-bs-slide-to="0" class="active"></button>
            <button data-bs-target="#intro" data-bs-slide-to="1"></button>
            <button data-bs-target="#intro" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="admin/assets/images/img02.png" class="imagen-carousel">
            </div>

            <div class="carousel-item">
                <img src="admin/assets/images/img06.png" class="imagen-carousel">
            </div>

            <div class="carousel-item">
                <img src="admin/assets/images/img05.png" class="imagen-carousel">
            </div>
        </div>

        <button class="carousel-control-prev" data-bs-target="#intro" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" data-bs-target="#intro" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>


    <section>
        <div class="card mx-auto mt-4 mb-5" style="max-width: 1150px;">
            <div class="row g-0">
                <div class="col">
                    <img src="admin/assets/images/img06.png"
                         class="img-fluid rounded-start" style="width: 450px; height:300px">
                </div>
                <div class="col">
                    <div class="card-body pt-5 ps-2 ">
                        <h5 class="card-title">Servicio 1</h5>
                        <p class="card-text pe-5">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standa….
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <article>
            <div class="container pb-5 pt-4 pe-2 ps-0">

                <div class="card-group">

                    <div class="col ps-5">
                        <div class="card mx-auto text-center" style="width: 300px; height: 370px">
                            <img class="img-card-top"
                                 src="admin/assets/images/img06.png">
                            <div class="card-body">
                                <h2 class="card-title">Servicio 1</h2>
                                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                            </div>
                        </div>
                    </div>

                    <div class="col pe-5 ps-5">
                        <div class="card mx-auto text-center " style="width:300px; height:370px">
                            <img class="img-card-top" src="admin/assets/images/img05.png">
                            <div class="card-body">
                                <h2 class="card-title">Servicio 2</h2>
                                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                            </div>
                        </div>
                    </div>
                    <div class="col pe-5">
                        <div class="card mx-auto text-center" style="width: 300px; height:370px">
                            <img class="img-card-top" src="admin/assets/images/img04.png">
                            <div class="card-body">
                                <h2 class="card-title">Servicio 3</h2>
                                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </article>
    </section>
    <footer class="footer mt-5 align-items-center">
        <div class="container">
            <div class="row row-cols-3 pt-5 pb-4  ">
                <div class="col p-5">
                    <div class="container">
                        <h3 class="text-center">Servicio 1</h3>
                        <p>
                            Lorem Ipsum is simply dummy text <br />
                            of the printing and typesetting <br />
                            industry. Lorem Ipsum has been the
                        </p>
                    </div>

                </div>
                <div class="col p-5">
                    <div class="container">
                        <h3 class="text-center">Servicio 2</h3>
                        <p>
                            Lorem Ipsum is simply dummy text <br />
                            of the printing and typesetting <br />
                            industry. Lorem Ipsum has been the
                        </p>
                    </div>
                </div>
                <div class="col p-5">
                    <div class="container">
                        <h3 class="text-center">Servicio 3</h3>
                        <p>
                            Lorem Ipsum is simply dummy text <br />
                            of the printing and typesetting <br />
                            industry. Lorem Ipsum has been the
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <img class=" mx-auto d-block pt-2 pb-5" src="admin/assets/images/img01.png"
             style="width:230px">
    </footer>


