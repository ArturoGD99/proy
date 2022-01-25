<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>
        <div class="nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto">
                <p class="negrita">25 años de Experiencia</p>
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
        </div>
        <h1>Más sobre nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Duis blandit consectetur urna ut dignissim. 
                    Sed aliquam pharetra sollicitudin. 
                    Sed lectus magna, ullamcorper pulvinar purus nec,</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Duis blandit consectetur urna ut dignissim. 
                    Sed aliquam pharetra sollicitudin. 
                    Sed lectus magna, ullamcorper pulvinar purus nec,</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Duis blandit consectetur urna ut dignissim. 
                    Sed aliquam pharetra sollicitudin. 
                    Sed lectus magna, ullamcorper pulvinar purus nec,</p>
            </div>
        </div>
    </main>
<?php
    incluirTemplate('footer');
?>