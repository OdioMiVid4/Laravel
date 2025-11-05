<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menú de Inicio</title>
    <style>
        /* ----------- RESET Y FUENTES ----------- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: linear-gradient(135deg, #1e1e2f, #2a2a40);
            color: #fff;
        }

        /* ----------- HEADER / NAV ----------- */
        header {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            padding: 15px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 600;
            color: #00d8ff;
            letter-spacing: 1px;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            transition: 0.3s;
            font-weight: 500;
        }

        nav ul li a:hover {
            color: #00d8ff;
        }

        /* ----------- CONTENIDO PRINCIPAL ----------- */
        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 50px 20px;
        }

        main h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            background: linear-gradient(90deg, #00d8ff, #00ffaa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        main p {
            font-size: 1.2rem;
            max-width: 600px;
            color: #ccc;
        }

        /* ----------- FOOTER ----------- */
        footer {
            background: rgba(255, 255, 255, 0.05);
            padding: 15px;
            text-align: center;
            color: #aaa;
            font-size: 0.9rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* ----------- RESPONSIVE ----------- */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                background: rgba(0, 0, 0, 0.5);
                position: absolute;
                top: 70px;
                right: 0;
                padding: 20px;
                display: none;
            }

            nav ul.active {
                display: flex;
            }

            .menu-toggle {
                display: block;
                cursor: pointer;
            }
        }

        .menu-toggle {
            display: none;
            font-size: 1.8rem;
            color: #fff;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">MiSitio</div>
        <div class="menu-toggle" id="menu-toggle">&#9776;</div>
        <nav>
            <ul id="menu">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Bienvenido a Mi Sitio</h1>
        <p>
            Un lugar moderno y elegante donde la simplicidad se une con el estilo. Explora nuestras secciones y descubre
            más.
        </p>
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