<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contacto - MiSitio</title>
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

        /* -------- MAIN -------- */
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

        .contact-container {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            padding: 40px;
            max-width: 600px;
            width: 100%;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input,
        textarea {
            padding: 12px 15px;
            border: none;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            font-size: 1rem;
            outline: none;
            transition: 0.3s;
        }

        input:focus,
        textarea:focus {
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 8px #00ffaa;
        }

        textarea {
            resize: none;
            height: 120px;
        }

        .btn-enviar {
            background: linear-gradient(90deg, #00d8ff, #00ffaa);
            border: none;
            border-radius: 8px;
            padding: 12px;
            color: #000;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-enviar:hover {
            transform: scale(1.05);
            background: linear-gradient(90deg, #00ffaa, #00d8ff);
        }

        .info-contacto {
            margin-top: 30px;
            font-size: 1rem;
            color: #ccc;
        }

        .info-contacto p {
            margin-bottom: 8px;
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
                <li><a href="servicios.html">Servicios</a></li>
                <li><a href="menuproductos.html">Productos</a></li>
                <li><a href="menuubicacion.html">Ubicación</a></li>
                <li><a href="menucontactos.html" style="color:#00ffaa;">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Contáctanos</h1>

        <div class="contact-container">
            <form action="#" method="post">
                <input type="text" name="nombre" placeholder="Tu nombre" required />
                <input type="email" name="email" placeholder="Tu correo electrónico" required />
                <input type="text" name="asunto" placeholder="Asunto" required />
                <textarea name="mensaje" placeholder="Escribe tu mensaje aquí..." required></textarea>
                <button type="submit" class="btn-enviar">Enviar Mensaje</button>
            </form>

            <div class="info-contacto">
                <p>📞 Teléfono: +34 600 123 456</p>
                <p>📧 Correo: contacto@misitio.com</p>
                <p>📍 Dirección: Calle Principal 123, Ciudad, País</p>
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