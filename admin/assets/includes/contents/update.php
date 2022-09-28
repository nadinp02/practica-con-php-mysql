<?php
include( dirname(__DIR__,4) . "/classes/contents.php");
include( dirname(__DIR__,4) . "/classes/images.php");
$contents = new Clases\Contents;
$images = new Clases\Images;


$id = $_GET["id"];
$idImagen = $_GET["id"];


if(!empty($_POST)){

    $contents->update($_POST, $id);
    $images->update($image['url'], $idImagen);

    header("Location:http://26.80.131.44/pil/nadin/admin/index.php");
}

$content = $contents->getById($id);
$image = $images->getByCod($content['cod']);

if (isset($_GET["delete"])) {

    var_dump($_GET["delete"]);
    $images->delete($_GET["delete"]);
    header("Location:http://26.80.131.44/pil/nadin/admin/index.php?opcion=contents&action=update&id=" .$id);

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
<h2 class="mt-4 mb-3">Actualizar el contenido n° <?= $id ?></h2>
<form action ="index.php?opcion=contents&action=update&id=<?= $id ?>" method="POST" enctype="multipart/form-data">
    <input type="text" name="title" value = "<?= $content['title'] ?>">
    <input type="text" name="content" value = "<?= $content['content'] ?>">
    <input type="text" name="keywords" value = "<?= $content['keywords'] ?>">
    <input type="text" name="description" value = "<?= $content['description'] ?>">
    <input type="text" name="category" value = "<?= $content['category'] ?>">
    <input type="submit" value="Actualizar">
    <br></br>
    <img style="width:100px" src="<?= $image['url'] ?>" >
    <a href="index.php?opcion=contents&action=update&id=<?= $content['id'] ?>&delete=<?= $image['id'] ?>"><button type='button' class='btn btn-danger' onclick="return ConfirmDelete()">Eliminar imagen</button></a>
    <!-- <input type="file" name="url" accept="image/*">
    <a href="index.php?opcion=contents&action=update&id=<?= $image['url'] ?>"><input type="submit" value="Actualizar"> -->

</form>










