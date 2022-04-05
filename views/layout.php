<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title;?>
    </title>

    <meta name="description" content="<?php echo $descripcion;?>">

    <link rel="stylesheet" href="/build/css/app.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins:wght@400;600&display=swap"
        rel="stylesheet">


</head>

<!-- fijar-body -->
<body class="body ">
    <!-- <style>
    .loader {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        transition: 1s all;
        opacity: 0;
    }

    .loader.show {
        opacity: 1;
    }

    .loader .spin {
        border: .5rem solid rgba(255, 255, 255, 0.534);
        border-top-color: #212121;
        border-radius: 50%;
        width: 10rem;
        height: 10rem;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }
    </style>

    <!-- Loading HTML -->
    <div class="loader show">
        <div class="spin"></div>
    </div> 

    <header class="header ">

        <div class=" barra-nav">
            <div class="contenedor barra-nav-hijo">

                <div class="logo">
                    <a href="/">
                        <img loading="lazy" src="/build/img/logo ari gomez.svg" alt="Logo Ari Gomez">
                    </a>

                    <div class="flex-centrar navegacion-iconos-padre">
                        <nav class="nav">

                            <div class="enlace-navegacion">
                                <a class="nav-hijos" href="/">Inicio</a>
                                <div class="l"></div>
                            </div>

                            <div class="enlace-navegacion">
                                <a class="nav-hijos" href="/proyectos">Proyectos</a>
                                <div class="l"></div>
                            </div>

                            <div class="enlace-navegacion">
                                <a class="nav-hijos" href="/sobre_mi">Sobre mi</a>
                                <div class="l"></div>
                            </div>

                            <div class="enlace-navegacion">
                                <a class="nav-hijos" href="/contacto">Contacto</a>
                                <div class="l"></div>
                            </div>



                        </nav>
                    </div>
                </div>
                <div class="iconos-nav">


                    <div id="menu-toggle">
                        <div id="hamburger">
                            <span class="span"></span>
                            <span class="span"></span>
                            <span class="span"></span>
                        </div>
                        <div id="cross">
                            <span class="span"></span>
                            <span class="span"></span>
                        </div>
                    </div>

                </div>


            </div>
        </div>

        <!-- No quitar -->
        <div class="pantallaCompleta"></div>





    </header>


    <?php echo $contenido; ?>


    <footer class="footer seccion flex-centrar">
        <p>Ari Gómez <?php echo date('Y'); ?> </p>
    </footer>

    <script type="text/javascript" src="/build/js/app.js"></script>
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
    <script src="https://kit.fontawesome.com/c15b744a04.js" crossorigin="anonymous"></script>

</body>

</html>