<?php
include(dirname(__DIR__, 4) . "/classes/contents.php");
include(dirname(__DIR__, 4) . "/classes/images.php");
$contents = new Clases\Contents;

$contentsList = $contents->list();

if (isset($_GET["delete"])) {
    $contents->delete($_GET["delete"]);
    header("Location: /pil/nadin/admin/index.php?opcion=contents&action=list");
}
?>

<script type="text/javascript">
    function ConfirmDelete() {
        var respuesta = confirm("Estas seguro que deseas Eliminar el contenido?")
        if (respuesta == true) {
            return true;
        } else {
            return false;
        }
    }
</script>

<h2 class="mt-4">Lista de contenidos</h2>
<table class="table table-response table-hover">
    <thead>
        <th>Titulo</th>
        <th>Contenido</th>
        <th>Imagenes</th>
        <th>Ajustes</th>
    </thead>
    <tbody>
        <?php foreach ($contentsList as $contenido) {
            // echo "<pre>";
            // var_dump($contenido);
            // echo "</pre>";
        ?>
            <tr>
                <td> <?= $contenido['title'] ?></td>
                <td> <?= $contenido['content'] ?></td>
                <td> <img style="width:200px" src="<?= $contenido['imagenes'][0]['url'] ?>" ></td>
                <td>
                    <a href="index.php?opcion=contents&action=update&id=<?= $contenido['id'] ?>"><button type='button' class='btn btn-dark'>Actualizar</button></a>
                    <a href="index.php?opcion=contents&action=list&delete=<?= $contenido['id'] ?>"><button type='button' class='btn btn-danger' onclick="return ConfirmDelete()">Borrar</button></a>

                </td>


            </tr>
        <?php } ?>

    </tbody>
</table>