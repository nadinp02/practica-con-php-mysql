<?php
include("assets/includes/header.inc.php");
include("assets/includes/nav.inc.php");
$contents = new Clases\Contents;
$images = new Clases\Images;

$id = $_GET["id"];
$idImagen = $_GET["id"];

$content = $contents->getById($id);
$image = $images->getByCod($content['cod']);

?>

<div class="container container-img-carousel mt-5">
    <div id="slider" class="carousel slide " data-bs-ride="carousel">

        <div class="carousel-indicators pb-0">
            <?php foreach ($image as $key => $img) { ?>
                <button data-bs-target="#slider" data-bs-slide-to="<?= $key ?>" class="<?= $key == 0 ? 'active' : '' ?>"></button>
            <?php } ?>
        </div>
        <div class="carousel-inner carousel-box">
            <?php foreach ($image as $key => $img) { ?>
                <div class="carousel-item  <?= $key == 0 ? 'active' : '' ?>">
                    <img class="img-carousel"  src="<?= URL ?>admin/<?= $img['url'] ?>">
                </div>
                <div class="carousel-caption text-start d-none d-md-block">
                    <h5><?= $content['title'] ?></h5>
                </div>
            <?php } ?>
        </div>
        <button class="carousel-control-prev" styles=" border-radius: 30px;" data-bs-target="#slider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" data-bs-target="#slider" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>
<div class = "contenido">
<p><?= $content['content'] ?></p>
</div>


<?php
include("assets/includes/footer.inc.php");
?>