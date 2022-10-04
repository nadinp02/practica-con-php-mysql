<?php
include("assets/includes/header.inc.php");
include("assets/includes/nav.inc.php");

$contents = new Clases\Contents;

$contentsList = $contents->list();
?>

<article>
    <div class="container pb-5 pt-4 pe-2 ps-0">
        <div class="card-group ">
            <?php
            foreach ($contentsList as $contents) { ?>
                <div class="col ps-5">
                    <div class="card mx-auto text-center" style="width: 280px; height: 350px">
                        <a href="<?= URL ?>/servicio.php?id=<?= $contents["id"] ?>">
                            <img class="img-card-top" style="width:280px" src="<?= URL ?>admin/<?= $contents['imagenes'][0]['url'] ?>">
                        </a>
                        <div class="card-body">
                            <h2 class="card-title"><?= $contents['title'] ?></h2>
                            <p class="card-text"><?= $contents['description'] ?></p>
                            <a href="<?= URL ?>/servicio.php?id=<?= $contents["id"] ?>"style = "color:white">
                                ver más
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
<?php
include("assets/includes/footer.inc.php");
?>