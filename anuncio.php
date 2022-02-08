<?php
    $id=$_GET['id'];
    $id=filter_var($id,FILTER_VALIDATE_INT);//Valida el id del POST o GET para que no se pueda modificar
    if(!$id){
        header('Location:/');
    }
    //importar conexion
    require 'includes/config/database.php';//Dir hace que no sea relativo el archivo, o sea hace que la dirección actual sea la final
    $db=conectarDB();
    //consultar
    $query="Select * FROM propiedades where id=${id}";
    //obtener resultado
    $resultado=mysqli_query($db,$query);
    if(!$resultado->num_rows){
        header('Location:/');
    }
    $propiedad=mysqli_fetch_assoc($resultado);

    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1><?php echo $propiedad['titulo']; ?></h1>
        <img loading="lazy" src="imagenes/<?php echo $propiedad['imagen']; ?>" alt="anuncio">
        
        <div class="resumen-propiedad">
            <p class="precio">$<?php echo $propiedad['precio']; ?></p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono"loading="lazy" src="build/img/icono_wc.svg" alt="Icono wc">
                    <p><?php echo $propiedad['wc']; ?></p>
                </li>
                <li>
                    <img class="icono"loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                    <p><?php echo $propiedad['estacionamiento']; ?></p>
                </li>
                <li>
                    <img class="icono"loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono Dormitorio">
                    <p><?php echo $propiedad['habitaciones']; ?></p>
                </li>
            </ul>
            <p><?php echo $propiedad['descripcion']; ?></p>
        </div>
    </main>
    <?php
    mysqli_close($db);
    incluirTemplate('footer');
?>