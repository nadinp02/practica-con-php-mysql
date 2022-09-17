<?php
include( dirname(__DIR__,4) . "/classes/contents.php");
include( dirname(__DIR__,4) . "/classes/images.php");
$contents = new Clases\Contents;


if(!empty($_POST)){

    $contents->create($_POST);
    header("Location:http://localhost/practica-con-php-mysql/admin/index.php");
}



?>

<form action ="index.php?opcion=contents&action=create" method="POST" enctype="multipart/form-data">
    <h2 class="mt-4 mb-3">Crear contenidos</h2>
    <input placeholder="Título" type="text" name="title" id="title">
    <input placeholder="Contenido"  type="text" name="content" id="content">
    <input placeholder="Palabras clave" type="text" name="keywords" id="keywords">
    <input placeholder="Descripción" type="text" name="description" id="description">
    <input placeholder="Categoría" type="text" name="category" id="category">
    <input placeholder="Imagen" type="file" name="url" id="url">
    <input type="submit" value="Enviar">
</form>

<!-- nuevo form "el contenido de cargo correctamente" button "regresar" -->
