<?php
include( dirname(__DIR__,4) . "/classes/contents.php");
include( dirname(__DIR__,4) . "/classes/images.php");
$contents = new Clases\Contents;
$images = new Clases\Images;

$id = $_GET["id"];

// echo "<pre>";
// var_dump($content);
// echo "</pre>";

if(!empty($_POST)){

    $contents->update($_POST, $id);
    header("Location:http://localhost/practica-con-php-mysql/admin/index.php");
}
$content = $contents->getById($id);


?>
<h2 class="mt-4 mb-3">Actualizar el contenido n° <?= $id ?></h2>
<form action ="index.php?opcion=contents&action=update&id=<?= $id ?>" method="POST" enctype="multipart/form-data">
    <input type="text" name="title" value = "<?= $content['title'] ?>">
    <input type="text" name="content" value = "<?= $content['content'] ?>">
    <input type="text" name="keywords" value = "<?= $content['keywords'] ?>">
    <input type="text" name="description" value = "<?= $content['description'] ?>">
    <input type="text" name="category" value = "<?= $content['category'] ?>">
    <input type="submit" value="Actualizar">
</form>
