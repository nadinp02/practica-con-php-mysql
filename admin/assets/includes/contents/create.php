<?php
include( dirname(__DIR__,4) . "/classes/contents.php");
$contents = new Clases\Contents;


if(isset($_POST)){

    $contents->create($_POST);

}

?>
<form action ="index.php?opcion=contents&action=create" method="POST">
    <h2>Crear contenidos</h2>
    <input placeholder="Titulo" type="text" name="title" id="title">
    <input placeholder="Contenido"  type="text" name="content" id="content">
    <input placeholder="Palabras clave" type="text" name="keywords" id="keywords">
    <input placeholder="Descripcion" type="text" name="description" id="description">
    <input placeholder="Categoria" type="text" name="category" id="category">
    <input type="submit" value="Añadir contenido">
</form>

