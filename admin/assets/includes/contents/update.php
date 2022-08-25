<?php

include( dirname(__DIR__,4) . "/classes/contents.php");
$contents = new Clases\Contents;
$id = $_GET["id"];

// echo "<pre>";
// var_dump($content);
// echo "</pre>";

if(isset($_POST)){

    $contents->update($_POST, $id);
}
$content = $contents->getById($id);


?>
<h2 class="mt-4">Actualizar el contenido n° <?= $id ?></h2>
<form action ="index.php?opcion=contents&action=update&id=<?= $id ?>" method="POST">
    <input type="text" name="title" value = "<?= $content['title'] ?>">
    <input type="text" name="content" value = "<?= $content['content'] ?>">
    <input type="text" name="keywords" value = "<?= $content['keywords'] ?>">
    <input type="text" name="description" value = "<?= $content['description'] ?>">
    <input type="text" name="category" value = "<?= $content['category'] ?>">
    <input type="submit" value="Actualizar">
</form>