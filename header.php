<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundesotec</title>

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="EstilosCss/Index.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <!-- Iconos -->
    <link rel="manifest" href="manifest.json">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Ads -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17083550466"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-17083550466');
    </script>

    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-17083550466/6KTtCI-X38waEIKWidI_'
        });
    </script>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-74WS4X4NPE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-74WS4X4NPE');
    </script>

    <!-- EmailJS -->
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script>
        emailjs.init('a8kALHJN1zzwKpep0');
    </script>

    <!-- Estilo navbar -->
    <style>
        .navbar.scrolled {
            background-color: #fff !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .navbar-brand img {
            max-height: 50px;
        }
    </style>
</head>

<body>

 

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="Img/LogoFundesotec.png" alt="Logo Fundesotec">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=Vista/Inicio.html">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=Vista/Nosotros.html">Nosotros</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=Vista/Proyectos.html">Proyectos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=Vista/Donaciones.html">Donaciones</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=Vista/Noticias.html">Noticias</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=Vista/Contactos.html">Contactos</a>
                    </li>
                    <li>
                                <a class="dropdown-item" href="index.php?page=Vista/CentroMedico.html">
                                    Sicología
                                </a>
                            </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarServicios"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Servicios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarServicios">
                            <li>
                                <a class="dropdown-item" href="index.php?page=Vista/CentroMedico.html">
                                    Sicología
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index.php?page=Vista/CACFundesotec.html">
                                    CAC. Fundesotec
                                </a>
                            </li>
                            <li><a class="dropdown-item" href="#">Proyectos Sociales</a></li>
                            <li><a class="dropdown-item" href="#">Convenios</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- BOTÓN WHATSAPP FLOTANTE (AGREGADO, NO MODIFICADO) -->
    <a href="https://wa.me/593968734405"
        class="whatsapp-float"
        target="_blank"
        rel="noopener"
        aria-label="WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>



    <!-- Script cerrar menú móvil -->
    <script>
        function cerrarMenu() {
            let navbarToggler = document.querySelector('.navbar-toggler');
            let navbarCollapse = document.querySelector('.navbar-collapse');

            if (navbarToggler && navbarCollapse.classList.contains('show')) {
                navbarToggler.click();
            }
            return false;
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>