<?php
include( dirname(__DIR__,4) . "/classes/contents.php");
$contents = new Clases\Contents;
$contentsList = $contents->list();
?>
<h2 class="mt-4">Listar los contenidos del Sistema</h2>
<table class="table table-response table-hover">
    <thead>
        <th>Titulo</th>
        <th>Ajustes</th>
    </thead>
    <tbody>
        <?php foreach ($contentsList as $contenido) {
            //var_dump($contenido);
            ?>

            <tr>
                <td> <?= $contenido['title']?></td>
                <td>
                    <a href="index.php?opcion=contents&action=update&id=<?= $contenido['id'] ?>">
                        ACTUALIZAR
                    </a>
                    <a href="index.php?opcion=contents&action=list&delete=<?= $contenido['id']?>">
                        BORRAR
                    </a>
                </td>


            </tr>
        <?php } ?>
    </tbody>
</table>