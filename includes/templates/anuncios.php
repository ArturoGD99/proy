<?php
    //importar conexion
        require __DIR__.'/../config/database.php';//Dir hace que no sea relativo el archivo, o sea hace que la dirección actual sea la final
        $db=conectarDB();
    //consultar
        $query="Select * FROM propiedades LIMIT ${limite}";
    //obtener resultado
        $resultado=mysqli_query($db,$query);

?>

<div class="contenedor-anuncios">
    <?php while($propiedad=mysqli_fetch_assoc($resultado)):?>
            <div class="anuncios">
               
                    
                    <img loading="lazy" src="/imagenes/<?php echo $propiedad['imagen'];?>" alt="anuncio">
                
                <div class="contenido-anuncio">
                    <h3><?php echo $propiedad['titulo'];?></h3>
                    <p><?php echo $propiedad['descripcion'];?></p>
                    <p class="precio">$<?php echo $propiedad['precio'];?></p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono"loading="lazy" src="build/img/icono_wc.svg" alt="Icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono"loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                            <p>2</p>
                        </li>
                        <li>
                            <img class="icono"loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono Dormitorio">
                            <p>5</p>
                        </li>
                    </ul>
                    <a class="boton boton-amarillo" href="anuncio.html">
                        Ver Propiedad
                    </a>
                </div>
            </div>
            <?php endwhile;?>
        </div>

<?php 
    //cerrar conexion
?>