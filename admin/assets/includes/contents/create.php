<form action="create.php" method="POST">
    <h2>Crear contenidos</h2>
    <input type="text" name="texto" id="texto">
    <input type="submit" value="Añadir contenido">
</form>

<div id="contenido">
    <?php
    $servidor = "localhost";
    $nombreusuario = "root";
    $password = "estudiorocha123";
    $db = "practica";

    $conexion = new mysqli($servidor, $nombreusuario, $password, $db);

    if($conexion->connect_error){
        die("Conexion fallida: " . $conexion->connect_error);

    }

    if(isset($_POST['texto'])){

        $texto = $_POST['texto'];
        
        $sql = "INSERT INTO contenido(nombre, content) VALUES('$texto', false)";
        if ($conexion->query($sql)===true){
            //echo '<div><form action=""><input type="checkbox">'. $texto . '</form></div>';
        }else{
            die("Error al insertar datos: " . $conexion->error);
        }


    }

    $sql = "SELECT * FROM contenido";
    $resultado = $conexion->query($sql);

    if($resultado->num_rows > 0){
        while($row = $resultado->fetch_assoc()){
            ?>
            <div>
                <form id="form <?php echo $row['id']?>" action="">
                    <input name="select" value="<?php echo $row['id']?>" id="<?php echo $row['id']?>" type="checkbox" onchange="seleccionar(this)"><?php echo $row['nombre']?>
                </form>
                
            </div>
            <?php
        }

    }
    $conexion->close();
    ?>
</div>

<script>
    function seleccionar(e){
            var id ="form" + e.id;
            var formulario = document.getElementById(id);
            formulario.submit();
    }
</script>