<?php

include("assets/includes/header.inc.php");
include("assets/includes/nav.inc.php");

$contents = new Clases\Contents;

$contentsList = $contents->list();
?>

<div id="intro" class="carousel slide pb-5" data-bs-ride="carousel">

        <div class="carousel-indicators pb-5">

            <button data-bs-target="#intro" data-bs-slide-to="0" class="active"></button>
            <button data-bs-target="#intro" data-bs-slide-to="1"></button>
            <button data-bs-target="#intro" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/img02.png" class="imagen-carousel">
            </div>

            <div class="carousel-item">
                <img src="assets/images/img06.png" class="imagen-carousel">
            </div>

            <div class="carousel-item">
                <img src="assets/images/img05.png" class="imagen-carousel">
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
        <article>
     <div class="container pb-5 pe-2 ps-0">
        <div class="card-group ">
            <?php
            foreach ($contentsList as $contents) { ?>
                <div class="col-4 ">
                    <div class="card mx-auto text-center mt-4" style="width: 300px; height: 350px">
                        <a href="<?= URL ?>/servicio.php?id=<?= $contents["id"] ?>">
                            <img class="img-card-top" style="width:300px; height: 220px" src="<?= URL ?>admin/<?= $contents['imagenes'][0]['url'] ?>">
                        </a>
                        <div class="card-body">
                            <h2 class="card-title"><?= $contents['title'] ?></h2>
                            <p class="card-text"><?= $contents['description'] ?></p>
                            <a href="<?= URL ?>/servicio.php?id=<?= $contents["id"] ?>"style = "color:white">
                            </a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</article>
    </section>

<?php
include("assets/includes/footer.inc.php");



