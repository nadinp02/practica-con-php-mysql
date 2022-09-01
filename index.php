<?php

include("assets/includes/header.inc.php");
include("assets/includes/nav.inc.php");
?>

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

<?php
include("assets/includes/footer.inc.php");



