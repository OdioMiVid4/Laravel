<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Servicios</title>
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
            margin-bottom: 30px;
        }

        .menu-servicio {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 25px;
            width: 90%;
            max-width: 1000px;
        }

        .servicio {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            transition: 0.3s;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        .servicio:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }

        .servicio h3 {
            color: #00d8ff;
            margin-bottom: 10px;
        }

        .servicio p {
            color: #ccc;
            font-size: 0.95rem;
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
                <li><a href="menuservicio.html" style="color:#00ffaa;">Servicios</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Menú de Servicios</h1>
        <div class="menu-servicio">
            <div class="servicio">
                <h3>Diseño Web</h3>
                <p>Creación de sitios web profesionales, modernos y adaptables a cualquier dispositivo.</p>
            </div>
            <div class="servicio">
                <h3>Desarrollo de Aplicaciones</h3>
                <p>Aplicaciones personalizadas con las últimas tecnologías y excelente rendimiento.</p>
            </div>
            <div class="servicio">
                <h3>Marketing Digital</h3>
                <p>Potencia tu marca con estrategias efectivas en redes sociales y SEO.</p>
            </div>
            <div class="servicio">
                <h3>Soporte Técnico</h3>
                <p>Asistencia continua para mantener tus sistemas funcionando sin interrupciones.</p>
            </div>
            <div class="servicio">
                <h3>Consultoría TI</h3>
                <p>Asesoramiento experto para optimizar tus procesos tecnológicos y de negocio.</p>
            </div>
        </div>
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