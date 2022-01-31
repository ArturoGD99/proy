<?php
    //validar URL
    $id=$_GET['id'];
    $id=filter_var($id,FILTER_VALIDATE_INT);

    if(!$id){
        header('Location:/admin');
    }
    require '../../includes/config/database.php';
    $db=conectarDB();

    //Obtener datos de propiedad
    $consulta="SELECT * FROM propiedades WHERE id=${id}";
    $resultado=mysqli_query($db,$consulta);
    $propiedad=mysqli_fetch_assoc($resultado);

    //arreglo con mensajes de errores
    $errores=[];

    //consultar a bd
    $consulta="SELECT * FROM vendedores";
    $resultado=mysqli_query($db,$consulta);

    //variables para guardar los campos de formulario en caso de existir algun error
    $titulo=$propiedad['titulo'];
    $precio=$propiedad['precio'];
    $descripcion=$propiedad['descripcion'];
    $habitaciones=$propiedad['habitaciones'];
    $wc=$propiedad['wc'];
    $estacionamiento=$propiedad['estacionamiento'];
    $idvendedor=$propiedad['idvendedor'];
    $imagenPropiedad=$propiedad['imagen'];
    
    //ejecutar código despues de que se envia formulario

    if($_SERVER['REQUEST_METHOD']==='POST'){

        $titulo=mysqli_real_escape_string($db, $_POST['titulo']);
        $precio=mysqli_real_escape_string($db, $_POST['precio']);
        $descripcion=mysqli_real_escape_string($db, $_POST['descripcion']);
        $habitaciones=mysqli_real_escape_string($db, $_POST['habitaciones']);
        $wc=mysqli_real_escape_string($db, $_POST['wc']);
        $estacionamiento=mysqli_real_escape_string($db, $_POST['estacionamiento']);
        $idvendedor=mysqli_real_escape_string($db, $_POST['vendedor']);
        // $creado=date('y/m/d');
        // echo "<pre>";
        // var_dump($_FILES);
        // echo "</pre>";
        //asignar FILES  a una variable
        $imagen=$_FILES['imagen'];
        
        // exit;
        if(!$titulo){
            $errores[]="Debes añadir un título";
        }
        if(!$precio){
            $errores[]="Debes añadir una cantidad en precio";
        }
        if(strlen($descripcion)<50){
            $errores[]="La descripción es obligatoria y debe de tener al menos 50 caracteres";
        }
        if(!$habitaciones){
            $errores[]="El número de habitaciones es obligatorio";
        }
        if(!$wc){
            $errores[]="El número de cuartos de baño es obligatorio";
        }
        if(!$estacionamiento){
            $errores[]="El número de estacionamientos es obligatorio";
        }
        if(!$idvendedor){
            $errores[]="Eligé un vendedor";
        }
        
        //validar por tamaño
        $medida=2*1000*1000;
        if($imagen['size']>$medida){
            $errores[]="La imagen es muy pesada";
        }
        // var_dump($errores);

        //revisar arreglo vacio
        if(empty($errores)){
            //crear carpeta
            $carpetaImagenes='../../imagenes/';
            if(!is_dir($carpetaImagenes)){
                mkdir($carpetaImagenes);
            } 
            $nombreImagen='';
            //Subida de archivos
            if($imagen['name']){
                //Eliminar imagen previa
                unlink($carpetaImagenes . $propiedad['imagen']);//elimina la imagen del servidor para poderla actualizar
                //generar nombre unico para imagenes
                $nombreImagen=md5(uniqid(rand(),true)). ".jpg";
                //subir imagen
                move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
            }else{
                $nombreImagen=$propiedad['imagen'];
            }
            
            
            //insertar
            $query="UPDATE propiedades SET titulo='${titulo}',precio='${precio}',descripcion='${descripcion}',imagen='${nombreImagen}',habitaciones=${habitaciones},
            wc=${wc},estacionamiento=${estacionamiento},creado=NOW(),idvendedor=${idvendedor} WHERE id=${id}";
            //VALUES(null,'','$precio','$nombreImagen','$descripcion','$habitaciones','$wc','$estacionamiento',NOW(),'$idvendedor')";
            // echo $query;
            $resultado=mysqli_query($db,$query);
            if($resultado){
                //Redireccionar al usuario
                $titulo="";
                $precio="";
                $descripcion="";
                $habitaciones="";
                $wc="";
                $estacionamiento="";
                $idvendedor="";
                header('Location:/admin?resultado=2');
            }
        }
        
    }
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Actualizar</h1>
        <a href="../" class="boton boton-verde">Volver</a>
        <?php foreach($errores as $e){ ?>
            <div class="alerta error">
                <?php echo $e; ?>
            </div>
        <?php } ?>
        <form method="POST" class="formulario" enctype="multipart/form-data">
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text"id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo;?>">

                <label for="precio">Precio:</label>
                <input type="number"id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio;?>">

                <label for="imagen">Imagen:</label>
                <input type="file"id="imagen" accept="image/jpeg, image/png" name="imagen">

                <img src="/imagenes/<?php echo $imagenPropiedad; ?>" alt="" class="imagen-small">

                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" id="descripcion"><?php echo $descripcion;?></textarea>

            </fieldset>
            <fieldset>
                <legend>Información Propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number"id="habitaciones"placeholder="EJ: 3" min="1" max="9" name="habitaciones" value="<?php echo $habitaciones;?>">

                <label for="wc">Cuartos de baño:</label>
                <input type="number"id="wc"placeholder="EJ: 3" min="1" max="9" name="wc" value="<?php echo $wc;?>">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number"id="estacionamiento"placeholder="EJ: 3" min="1" max="9" name="estacionamiento" value="<?php echo $estacionamiento;?>">

            </fieldset>
            <fieldset>
                <legend>Vendedor</legend>
                <select name="vendedor" id="">
                    <option value="">Seleccione</option>
                    <?php while($vendedor=mysqli_fetch_assoc($resultado)){ ?>
                        <option <?php echo $idvendedor === $vendedor['id'] ? 'selected' : '';?> value="<?php echo $vendedor['id'];?>">
                        <?php echo $vendedor['nombre']. " " . $vendedor['apellido'];?></option>
                    <?php } ?>
                </select>
            </fieldset>
            <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
        </form>
    </main>
<?php
    incluirTemplate('footer');
?>