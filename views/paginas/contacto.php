<section class="seccion-uno fondo-gradiente flex-centrar entrada">
    <div class="contenedor">
        <h1 class="text-center">Contacto</h1>

    </div>
</section>

<main class="contenedor-formulario seccion">

    <h2 class="svg-titulos  text-center">¿Cómo sería tu sitio web ideal?</h2>

    <?php include 'formulario.php'; ?>



</main>




<div class="ventanaContacto <?php if($mensaje) { ?>
mostrarVentana
<?php } ?>">
    <div class="flex-centrar column height">

        <div>

            <h2 class="svg-titulos">Se envió el formulario correctamente</h2>
            <p>Se le contactará por medio de <span>Télefono</span> o <span>WhatsApp</span>.</p>
            <p>¡Gracias!</p>

            <div class="redes-sociales">

                <a href="https://www.facebook.com/arigomez04" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="https://m.me/arigomez04" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-facebook-messenger"></i>
                </a>

                <a href="http://instagram.com/ariamzi_?utm_source=qr" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="https://api.whatsapp.com/send?phone=+528113257604" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-whatsapp"></i>
                </a>
                
                <a href="tel:+528113257604" target="_blank" rel="noopener noreferrer">
                    <i class="fas fa-phone"></i>
                </a>

            </div>

            <div class="boton-pri btnCerrarVentana">
            Cerrar
            </div>
            <!-- <a href="/contacto" class="boton-pri btnCerrarVentana">Cerrar</a> -->

        </div>

    </div>
</div>
