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
<h2 class="mt-4 text-center"><?= $content['title'] ?></h2>
<div class=" mt-4 text-center"><?= $content['content'] ?></div>

<div id="intro" class="carousel slide pb-5" data-bs-ride="carousel">

    <div class="carousel-indicators pb-5">

        <?php foreach ($image as $key => $img) { ?>
            <button data-bs-target="#intro" data-bs-slide-to="<?= $key ?>" class="<?= $key == 0 ? 'active' : '' ?>"></button>
        <?php } ?>
    </div>


    <div class="carousel-inner">

        <?php foreach ($image as $key => $img) {
        ?>
            <div class="carousel-item <?= $key == 0 ? 'active' : '' ?>">
                <img class="mt-4 mx-auto d-block" src="<?= URL ?>admin/<?= $img['url'] ?>">
            </div>
        <?php
        }
        ?>
    </div>

    <button class="carousel-control-prev" data-bs-target="#intro" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" data-bs-target="#intro" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

</div>

<?php
include("assets/includes/footer.inc.php");
?>