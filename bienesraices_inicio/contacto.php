<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Contacto</h1>
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="anuncio">
        </picture>
        <h2>Llene el formulario de contacto</h2>
        <form action="" class="formulario">
            <fieldset>
                <legend>Información personal</legend>
                <label for="nombre">Nombre</label>
                <input type="text" name="" id="nombre" placeholder="Tu nombre">

                <label for="email">E-mail</label>
                <input type="email" name="" id="email" placeholder="Email">

                <label for="telefono">Teléfono</label>
                <input type="tel" name="" id="telefono" placeholder="telefono">

                <label for="mensaje">Mensaje:</label>
                <textarea name="" id="mensaje" ></textarea>
            </fieldset>
            <fieldset>
                <legend>Información sobre la Propiedad</legend>
                <label for="opciones">Vende o Compra:</label>
                <select name="" id="opciones">
                    <option value="" disabled selected>--Selecione--</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>
                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" name="" id="presupuesto" placeholder="Tu precio o presupuesto">
            </fieldset>
            <fieldset>
                <legend>Contacto</legend>
                <p>Como desea ser contactado</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                    <label for="contactar-email">E-mail</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>
                <p>Si eligio telefono, elija la fecha y hora</p>

                <label for="fecha">Fecha</label>
                <input type="date" name="" id="fecha">

                <label for="hora">Hora:</label>
                <input type="time" name="" id="hora" min="09:00" max="16:00">

            </fieldset>
            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>
    <?php
    incluirTemplate('footer');
?>