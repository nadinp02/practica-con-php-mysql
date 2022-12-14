<?php
include( dirname(__DIR__,4) . "/classes/contents.php");
include( dirname(__DIR__,4) . "/classes/images.php");
$contents = new Clases\Contents;
$image = new Clases\Images;

if(!empty($_POST))
{
    $codContenido = $_POST['cod'];
    $contents->create($_POST);   
 
    foreach($_FILES['url']['tmp_name'] as $key => $value){
        $directorio = "assets/images/";
        $archivo = $directorio . $codContenido. "-". $_FILES["url"]["name"][$key];
      
        // valida que es img
        $esImagen = getimagesize($_FILES["url"]["tmp_name"][$key]);
   
        if($esImagen != false){
            if(move_uploaded_file($_FILES["url"]["tmp_name"][$key], $archivo)){
               $image->create($archivo,$codContenido);
            }else{
                echo "hubo un error en la subida del archivo";
            }
    
        }else{
            echo "El documento no es una imagen";
        }
    }

    header("Location:index.php");
}




?>

<form action ="index.php?opcion=contents&action=create" method="POST" enctype="multipart/form-data">
    <h2 class="mt-4 mb-3">Crear contenidos</h2>
    <input placeholder="Título" type="text" name="title" id="title" required>
    <input type="hidden" name="cod" id="cod" value="<?=rand(10,9999)?>">
    <input placeholder="Contenido"  type="text" name="content" id="content" required>
    <input placeholder="Palabras clave" type="text" name="keywords" id="keywords" required>
    <input placeholder="Descripción" type="text" name="description" id="description" required>
    <input placeholder="Categoría" type="text" name="category" id="category" required>
    <input type="file" multiple name="url[]" id="url" accept="image/*">
    <input type="submit" value="Enviar">
</form>



<!-- nuevo form "el contenido de cargo correctamente" button "regresar" -->
