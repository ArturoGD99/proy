<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="anuncio">
        </picture>
        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
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
            <p>Mauris ac tortor sit amet lorem finibus consectetur. 
                Cras ut rhoncus dui. Nullam cursus nunc in massa maximus sagittis eget quis arcu. 
                In mollis tempus massa ac luctus. Cras commodo volutpat nunc, ut hendrerit odio aliquam in. 
                Phasellus auctor et purus nec suscipit. Etiam elementum leo risus, in congue urna dictum sit amet. 
                Proin bibendum rutrum ante, at ultricies lectus. Donec porttitor hendrerit eros, et tincidunt quam mollis et. 
                Quisque in magna interdum, vehicula dolor non, dignissim nibh.</p>
            <p>Mauris ac tortor sit amet lorem finibus consectetur. 
                Cras ut rhoncus dui. Nullam cursus nunc in massa maximus sagittis eget quis arcu. 
                In mollis tempus massa ac luctus. Cras commodo volutpat nunc, ut hendrerit odio aliquam in. 
                Phasellus auctor et purus nec suscipit. Etiam elementum leo risus, in congue urna dictum sit amet. 
                Proin bibendum rutrum ante, at ultricies lectus. </p>
        </div>
    </main>
    <?php
    incluirTemplate('footer');
?>