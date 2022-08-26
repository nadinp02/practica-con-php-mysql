<?php
include( dirname(__DIR__,4) . "/classes/contents.php");
$contents = new Clases\Contents;


if(!empty($_POST)){

    $contents->create($_POST);
    header("Location:http://localhost/practica-con-php-mysql/admin/index.php");
}


?>
<form action ="index.php?opcion=contents&action=create" method="POST">
    <h2 class="mt-4 mb-3">Crear contenidos</h2>
    <input placeholder="Título" type="text" name="title" id="title">
    <input placeholder="Contenido"  type="text" name="content" id="content">
    <input placeholder="Palabras clave" type="text" name="keywords" id="keywords">
    <input placeholder="Descripción" type="text" name="description" id="description">
    <input placeholder="Categoría" type="text" name="category" id="category">
    <input type="submit" value="Añadir contenido">
</form>

<!-- nuevo form "el contenido de cargo correctamente" button "regresar" -->
