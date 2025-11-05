<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ubicación - MiSitio</title>
    <style>
        /* -------- RESET -------- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: linear-gradient(135deg, #1e1e2f, #2a2a40);
            color: #fff;
        }

        /* -------- HEADER -------- */
        header {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            padding: 15px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            font-size: 1.6rem;
            font-weight: 600;
            color: #00d8ff;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: 500;
            transition: 0.3s;
        }

        nav ul li a:hover {
            color: #00ffaa;
        }

        .menu-toggle {
            display: none;
            font-size: 1.8rem;
            color: #fff;
            cursor: pointer;
        }

        /* -------- CONTENIDO -------- */
        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 50px 20px;
            text-align: center;
        }

        main h1 {
            font-size: 2.8rem;
            background: linear-gradient(90deg, #00d8ff, #00ffaa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 20px;
        }

        .ubicacion-info {
            max-width: 600px;
            color: #ccc;
            font-size: 1.1rem;
            margin-bottom: 30px;
        }

        iframe {
            border: none;
            border-radius: 15px;
            width: 90%;
            max-width: 900px;
            height: 400px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        /* -------- FOOTER -------- */
        footer {
            background: rgba(255, 255, 255, 0.05);
            text-align: center;
            padding: 15px;
            color: #aaa;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* -------- RESPONSIVE -------- */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                background: rgba(0, 0, 0, 0.6);
                position: absolute;
                top: 70px;
                right: 0;
                width: 200px;
                display: none;
                padding: 15px;
                border-radius: 0 0 0 15px;
            }

            nav ul.active {
                display: flex;
            }

            .menu-toggle {
                display: block;
            }

            iframe {
                height: 300px;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">MiSitio</div>
        <div class="menu-toggle" id="menu-toggle">&#9776;</div>
        <nav>
            <ul id="menu">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="servicios.html">Servicios</a></li>
                <li><a href="menuservicio.html">Menú Servicio</a></li>
                <li><a href="menuubicacion.html" style="color:#00ffaa;">Ubicación</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Nuestra Ubicación</h1>
        <p class="ubicacion-info">
            Encuéntranos fácilmente. Estamos ubicados en el corazón de la ciudad, en un punto estratégico de fácil
            acceso.
            Ven a visitarnos y conoce más sobre nuestros servicios.
        </p>

        <!-- 🌍 Mapa de Google integrado (puedes reemplazar el src con tu ubicación exacta) -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2798994483!2d-74.25987508731913!3d40.69767006360057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQyJzUzLjYiTiA3NMKwMTUnMjguNiJX!5e0!3m2!1ses!2sus!4v1634081972839!5m2!1ses!2sus"
            allowfullscreen="" loading="lazy">
        </iframe>
    </main>

    <footer>
        © 2025 MiSitio - Todos los derechos reservados.
    </footer>

    <script>
        const toggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('menu');

        toggle.addEventListener('click', () => {
            menu.classList.toggle('active');
        });
    </script>
</body>

</html>