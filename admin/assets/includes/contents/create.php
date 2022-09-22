<?php
include( dirname(__DIR__,4) . "/classes/contents.php");
include( dirname(__DIR__,4) . "/classes/images.php");
$contents = new Clases\Contents;
$image = new Clases\Images;



if(!empty($_POST))
{
    $contents->create($_POST);
    
    $directorio = "assets/images/";
    $archivo = $directorio . basename($_FILES["file"]["name"]);
    $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
    //valida que es img
    $esImagen = getimagesize($_FILES["file"]["tmp_name"]);
    
    if($esImagen != false){
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $archivo)){
            $image->create($_POST);
            echo "el archivo se subio correctamente";
        }else{
            echo "hubo un error en la subida del archivo";
        }

    }else{
        echo "El documento no es una imagen";
    }


    //header("Location:http://localhost/practica-con-php-mysql/admin/index.php");
}




?>

<form action ="index.php?opcion=contents&action=create" method="POST" enctype="multipart/form-data">
    <h2 class="mt-4 mb-3">Crear contenidos</h2>
    <input placeholder="Título" type="text" name="title" id="title" required>
    <input placeholder="Contenido"  type="text" name="content" id="content" required>
    <input placeholder="Palabras clave" type="text" name="keywords" id="keywords" required>
    <input placeholder="Descripción" type="text" name="description" id="description" required>
    <input placeholder="Categoría" type="text" name="category" id="category" required>
    <input type="file" name="file" accept="image/*">
    <input type="submit" value="Enviar">
</form>

<!-- nuevo form "el contenido de cargo correctamente" button "regresar" -->
