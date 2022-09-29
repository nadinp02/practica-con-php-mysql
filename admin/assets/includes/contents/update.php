<?php
include( dirname(__DIR__,4) . "/classes/contents.php");
include( dirname(__DIR__,4) . "/classes/images.php");
$contents = new Clases\Contents;
$images = new Clases\Images;

$id = $_GET["id"];
$idImagen = $_GET["id"];

$content = $contents->getById($id);
$image = $images->getByCod($content['cod']);

if (isset($_GET["delete"])) {
    $idDelete = $_GET['delete'];
    $images->delete($idDelete);
    header("Location: /pil/nadin/admin/index.php?opcion=contents&action=update&id=" .$id);

}

if(!empty($_POST))
{
    $codContenido = $content['cod'];
    $contents->update($_POST,$id);    

    $directorio = "assets/images/";
    $archivo = $directorio . basename($_FILES["url"]["name"]);
    $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
    // valida que es img
    $esImagen = getimagesize($_FILES["url"]["tmp_name"]);

    if($esImagen != false){
        
        $images->delete($image['id']);
        if(move_uploaded_file($_FILES["url"]["tmp_name"], $archivo)){
           $images->create($archivo,$codContenido);
            //var_dump($_POST);
        }else{
            echo "hubo un error en la subida del archivo";
        }

    }else{
        echo "El documento no es una imagen";
    }


     header("Location:index.php");
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
    <br></br>
    <img style="width:100px" src="<?= $image['url'] ?>" >
    <a href="index.php?opcion=contents&action=update&id=<?= $content['id'] ?>&delete=<?= $image['id'] ?>">
    <button type='button' class='btn btn-dark' onclick="return ConfirmDelete()">Eliminar imagen</button>
</a>
    <br></br>
    <input type="file" name="url" accept="image/*" > 
     <br></br>
    <input type="submit" value="Actualizar">
</form>










