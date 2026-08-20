<?php include '../PHP/conexion.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Productos | SHOESTYLE</title>

    <link rel="stylesheet" href="../CSS/PRODUCTOS5.CSS">

    <!-- FUENTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bebas+Neue&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">

    <!-- ICONOS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>


<body>

<div id="contenedor">


    <!-- =====================================================
         BANNER
    ====================================================== -->

    <header class="banner-portada">


        <div class="imagen-banner">

            <img
                src="../imagenes/banner-productos.jpg"
                alt="Banner de productos">

            <div class="capa-oscura"></div>

        </div>


        <!-- =================================================
             BARRA SUPERIOR
        ================================================== -->

        <div class="top-bar">


            <!-- LOGO -->

            <a href="../index.php" class="logo">

                SHOE<span class="logo-rojo">STYLE</span>

            </a>


            <!-- =================================================
                 BOTÓN HAMBURGUESA
            ================================================== -->

            <button
                class="menu-movil"
                id="menuMovil"
                aria-label="Abrir menú"
                aria-expanded="false">

                <i class="fa-solid fa-bars"></i>

            </button>


            <!-- =================================================
                 MENÚ
            ================================================== -->

            <nav class="navegacion" id="navegacion">

                <ul>

                    <li>
                        <a href="../index.php">
                            INICIO
                        </a>
                    </li>

                    <li>
                        <a href="../paginas/nuestra empresa.html">
                            NUESTRA EMPRESA
                        </a>
                    </li>

                    <li>
                        <a href="#" class="activo">
                            PRODUCTOS
                        </a>
                    </li>

                    <li>
                        <a href="../paginas/contactenos.html">
                            CONTACTENOS
                        </a>
                    </li>

                    <li>
                        <a href="../paginas/inicio de sesion.html">
                            INICIO DE SESIÓN
                        </a>
                    </li>

                    <li>
                        <a href="../paginas/servicios.html">
                            SERVICIOS
                        </a>
                    </li>

                    <li>
                        <a href="../paginas/galeria fotografica.html">
                            GALERIA FOTOGRAFICA
                        </a>
                    </li>

                    <li>
                        <a href="../paginas/registrarse.html">
                            REGISTRARSE
                        </a>
                    </li>

                </ul>

            </nav>


            <!-- =================================================
                 ICONOS
            ================================================== -->

            <div class="top-icons">

                <a
                    href="../paginas/carrito.php"
                    class="icon-link"
                    title="Carrito">

                    <i class="fa-solid fa-cart-shopping"></i>

                </a>

                <a
                    href="#catalogo"
                    class="icon-link"
                    title="Ver productos">

                    <i class="fa-regular fa-eye"></i>

                </a>

            </div>


        </div>


        <!-- =================================================
             CONTENIDO HERO
        ================================================== -->

        <div class="contenido-centro">

            <p class="etiqueta-hero">
                SHOESTYLE
            </p>

            <h1 class="titulo-hero">

                CATÁLOGO

                <span>
                    DE ZAPATOS
                </span>

            </h1>

            <p class="subtitulo">

                Descubre nuestra colección de calzado,
                encuentra tu estilo y elige tus favoritos.

            </p>

            <div class="botones-container">
            </div>

        </div>


        <!-- =================================================
             LEMA
        ================================================== -->

        <div class="lema-centro">
        </div>


        <!-- =================================================
             SCROLL
        ================================================== -->

        <div class="scroll-indicator">

            <div class="mouse">

                <div class="rueda"></div>

            </div>

        </div>


    </header>



    <!-- =====================================================
         CATÁLOGO
    ====================================================== -->

    <main id="catalogo" class="productos">


        <section class="encabezado-productos">

            <span class="seccion-etiqueta">
                COLECCIÓN SHOESTYLE
            </span>

            <h2>
                CATÁLOGO DE ZAPATOS
            </h2>

            <p>
                Explora nuestra selección de zapatos.
                Encuentra diferentes marcas, estilos,
                colores y tallas para elegir el modelo
                que más te guste.
            </p>

            <a
                href="../paginas/carrito.php"
                class="btn-carrito">

                <i class="fa-solid fa-cart-shopping"></i>

                IR AL CARRITO

            </a>

        </section>



        <!-- =================================================
             PRODUCTOS
        ================================================== -->

        <section class="grid-productos">

            <?php

            $resultado = $conexion->query(
                "SELECT * FROM zapatos"
            );

            if ($resultado && $resultado->num_rows > 0):

                while ($fila = $resultado->fetch_assoc()):

            ?>

                <article class="card-producto">


                    <div class="imagen-producto">

                        <img
                            src="<?= htmlspecialchars($fila['imagen']) ?>"
                            alt="<?= htmlspecialchars($fila['nombre']) ?>"
                        >

                        <span class="etiqueta-producto">
                            SHOESTYLE
                        </span>

                    </div>


                    <div class="info-producto">


                        <h3>
                            <?= htmlspecialchars($fila['nombre']) ?>
                        </h3>


                        <div class="detalles-producto">


                            <p>
                                <strong>Marca</strong>

                                <span>
                                    <?= htmlspecialchars($fila['marca']) ?>
                                </span>
                            </p>


                            <p>
                                <strong>Talla</strong>

                                <span>
                                    <?= htmlspecialchars($fila['talla']) ?>
                                </span>
                            </p>


                            <p>
                                <strong>Género</strong>

                                <span>
                                    <?= htmlspecialchars($fila['genero']) ?>
                                </span>
                            </p>


                            <p>
                                <strong>Color</strong>

                                <span>
                                    <?= htmlspecialchars($fila['color']) ?>
                                </span>
                            </p>


                            <p>
                                <strong>Tipo</strong>

                                <span>
                                    <?= htmlspecialchars($fila['tipo']) ?>
                                </span>
                            </p>


                        </div>


                        <div class="precio">

                            $

                            <?= number_format(
                                $fila['precio'],
                                2
                            ) ?>

                        </div>


                        <form
                            action="../paginas/carrito.php"
                            method="POST"
                            class="form-carrito"
                        >

                            <?php foreach ($fila as $key => $value): ?>

                                <input
                                    type="hidden"
                                    name="<?= htmlspecialchars($key) ?>"
                                    value="<?= htmlspecialchars($value) ?>"
                                >

                            <?php endforeach; ?>


                            <button type="submit">

                                <i class="fa-solid fa-cart-shopping"></i>

                                AGREGAR AL CARRITO

                            </button>


                        </form>


                    </div>

                </article>


            <?php

                endwhile;

            else:

            ?>

                <div class="sin-productos">

                    <i class="fa-solid fa-box-open"></i>

                    <h3>
                        No hay productos disponibles
                    </h3>

                    <p>
                        Actualmente no tenemos productos
                        registrados en el catálogo.
                    </p>

                </div>

            <?php endif; ?>


        </section>


    </main>



    <!-- =====================================================
         FOOTER
    ====================================================== -->

    <footer>


        <div class="redes-sociales">

            <h3>
                ENCUÉNTRANOS TAMBIÉN EN:
            </h3>


            <div class="iconos-redes">


                <a
                    href="https://www.facebook.com/profile.php?id=61575560894613&locale=es_LA"
                    target="_blank">

                    <img
                        src="../imagenes/facebook.png"
                        alt="Facebook">

                </a>


                <a href="#">

                    <img
                        src="../imagenes/instagram.jpg"
                        alt="Instagram">

                </a>


                <a
                    href="https://vm.tiktok.com/ZSHtArvgSS6t6-bfRuv/"
                    target="_blank">

                    <img
                        src="../imagenes/tiktok.png"
                        alt="TikTok">

                </a>


                <a
                    href="https://x.com/shoestyle397157"
                    target="_blank">

                    <img
                        src="../imagenes/twitter.png"
                        alt="Twitter">

                </a>


                <a
                    href="https://chat.whatsapp.com/EopjMlzLqiFFMkKOCvCasU?mode=ems_copy_c"
                    target="_blank">

                    <img
                        src="../imagenes/whatsapp.png"
                        alt="WhatsApp">

                </a>


            </div>

        </div>



        <div class="footer-info">


            <div class="columna">

                <h4>
                    AYUDA
                </h4>

                <ul>

                    <li>
                        <a href="https://chat.whatsapp.com/EopjMlzLqiFFMkKOCvCasU?mode=ems_copy_c">
                            Asistencia
                        </a>
                    </li>

                    <li>
                        <a href="https://chat.whatsapp.com/EopjMlzLqiFFMkKOCvCasU?mode=ems_copy_c">
                            Seguimiento de pedidos
                        </a>
                    </li>

                    <li>
                        <a href="https://chat.whatsapp.com/EopjMlzLqiFFMkKOCvCasU?mode=ems_copy_c">
                            Envíos
                        </a>
                    </li>

                    <li>
                        <a href="https://chat.whatsapp.com/EopjMlzLqiFFMkKOCvCasU?mode=ems_copy_c">
                            Devoluciones
                        </a>
                    </li>

                </ul>

            </div>


            <div class="columna">

                <h4>
                    SHOESTYLE
                </h4>

                <ul>

                    <li>
                        <strong>Teléfonos:</strong>
                        +57 310 700 1125 /
                        +57 302 2001695
                    </li>

                    <li>
                        <strong>Correo:</strong>
                        shoestyle@gmail.com
                    </li>

                    <li>
                        <strong>Horarios:</strong>
                        8:00 a.m - 7:00 p.m
                    </li>

                    <li>
                        <strong>Dirección:</strong>
                        Por confirmar
                    </li>

                </ul>

            </div>


            <div class="columna">

                <h4>
                    INFORMACIÓN LEGAL
                </h4>

                <ul>

                    <li>
                        <a
                            href="../paginas/terminos.pdf"
                            target="_blank">

                            Términos y Condiciones

                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Política de Privacidad
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Condiciones de Uso
                        </a>
                    </li>

                </ul>

            </div>


        </div>


        <div class="copyright">

            <p>
                &copy; 2025 SHOESTYLE.
                Todos los derechos reservados.
            </p>

        </div>


    </footer>


</div>



<!-- =====================================================
     JAVASCRIPT
====================================================== -->

<script>

const menuMovil =
    document.getElementById("menuMovil");

const navegacion =
    document.getElementById("navegacion");


if (menuMovil && navegacion) {

    menuMovil.addEventListener("click", function () {

        navegacion.classList.toggle("activo");

        const abierto =
            navegacion.classList.contains("activo");

        menuMovil.setAttribute(
            "aria-expanded",
            abierto
        );

        const icono =
            menuMovil.querySelector("i");

        if (abierto) {

            icono.classList.remove("fa-bars");
            icono.classList.add("fa-xmark");

        } else {

            icono.classList.remove("fa-xmark");
            icono.classList.add("fa-bars");

        }

    });


    navegacion
        .querySelectorAll("a")
        .forEach(enlace => {

            enlace.addEventListener("click", function () {

                navegacion.classList.remove("activo");

                menuMovil.setAttribute(
                    "aria-expanded",
                    "false"
                );

                const icono =
                    menuMovil.querySelector("i");

                icono.classList.remove("fa-xmark");
                icono.classList.add("fa-bars");

            });

        });

}


document
    .querySelectorAll('a[href^="#"]')
    .forEach(enlace => {

        enlace.addEventListener("click", function(e) {

            const href =
                this.getAttribute("href");

            if (href === "#") {
                return;
            }

            const destino =
                document.querySelector(href);

            if (destino) {

                e.preventDefault();

                destino.scrollIntoView({
                    behavior: "smooth"
                });

            }

        });

    });

</script>


</body>
</html>
