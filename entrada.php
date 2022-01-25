<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>
        
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="anuncio">
        </picture>
        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
        <div class="resumen-propiedad">
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