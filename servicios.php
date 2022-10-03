

<?php
include("assets/includes/header.inc.php");
include("assets/includes/nav.inc.php");

$contenido = new Clases\Contents;

$listaContenido = $contenido->list();
var_dump($listaContenido);
?>

    <article>
            <div class="container pb-5 pt-4 pe-2 ps-0">

                <div class="card-group " >
                    <?php
                    foreach($listaContenido as $contenido){?>
                                        <div class="col ps-5">
                        <div class="card mx-auto text-center" style="width: 300px; height: 370px">
                            <img class="img-card-top" style="width:100px" src="<?= $contenido['imagenes'][0]['url'] ?>" >
                            <div class="card-body">
                                <h2 class="card-title"><?= $contenido['title'] ?></h2>
                                <p class="card-text"><?= $contenido['description'] ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>

<!-- 
                    <div class="col pe-5 ps-5">
                        <div class="card mx-auto text-center " style="width:300px; height:370px">
                            <img class="img-card-top" src="assets/images/img05.png">
                            <div class="card-body">
                                <h2 class="card-title">Mercadolibre</h2>
                                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                            </div>
                        </div>
                    </div>
                    <div class="col pe-5">
                        <div class="card mx-auto text-center" style="width: 300px; height:370px">
                            <img class="img-card-top" src="assets/images/img04.png">
                            <div class="card-body">
                                <h2 class="card-title">Publicidad Digital</h2>
                                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pb-5 pt-4 pe-2 ps-0">

<div class="card-group">

    <div class="col ps-5">
        <div class="card mx-auto text-center" style="width: 300px; height: 370px">
            <img class="img-card-top"
                 src="assets/images/img06.png">
            <div class="card-body">
                <h2 class="card-title">Marketing Operativo</h2>
                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
            </div>
        </div>
    </div>

    <div class="col pe-5 ps-5">
        <div class="card mx-auto text-center " style="width:300px; height:370px">
            <img class="img-card-top" src="assets/images/img05.png">
            <div class="card-body">
                <h2 class="card-title">Redes Sociales</h2>
                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
            </div>
        </div>
    </div>
    <div class="col pe-5">
        <div class="card mx-auto text-center" style="width: 300px; height:370px">
            <img class="img-card-top" src="assets/images/img04.png">
            <div class="card-body">
                <h2 class="card-title">E-commerce</h2>
                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the </p>
            </div>
        </div>
    </div>
</div> -->
</div>

        </article>
<?php
include("assets/includes/footer.inc.php");
?>
