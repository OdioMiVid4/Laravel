<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Productos - MiSitio</title>
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
            margin-bottom: 40px;
        }

        .productos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 25px;
            width: 90%;
            max-width: 1000px;
        }

        .producto {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            transition: 0.3s;
        }

        .producto:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }

        .producto img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .producto h3 {
            color: #00d8ff;
            margin-bottom: 10px;
        }

        .producto p {
            color: #ccc;
            font-size: 0.95rem;
            margin-bottom: 10px;
        }

        .producto span {
            display: block;
            font-weight: bold;
            color: #00ffaa;
            margin-bottom: 10px;
        }

        .btn-comprar {
            background: linear-gradient(90deg, #00d8ff, #00ffaa);
            border: none;
            border-radius: 8px;
            padding: 8px 16px;
            color: #000;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-comprar:hover {
            transform: scale(1.05);
            background: linear-gradient(90deg, #00ffaa, #00d8ff);
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

            .producto img {
                height: 150px;
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
                <li><a href="menuproductos.html" style="color:#00ffaa;">Productos</a></li>
                <li><a href="menuubicacion.html">Ubicación</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Nuestros Productos</h1>

        <div class="productos">
            <div class="producto">
                <img src="https://via.placeholder.com/300x180.png?text=Producto+1" alt="Producto 1">
                <h3>Producto 1</h3>
                <p>Descripción breve del producto con detalles interesantes.</p>
                <span>$25.00</span>
                <button class="btn-comprar">Comprar</button>
            </div>

            <div class="producto">
                <img src="https://via.placeholder.com/300x180.png?text=Producto+2" alt="Producto 2">
                <h3>Producto 2</h3>
                <p>Excelente calidad y diseño moderno para tus necesidades.</p>
                <span>$40.00</span>
                <button class="btn-comprar">Comprar</button>
            </div>

            <div class="producto">
                <img src="https://via.placeholder.com/300x180.png?text=Producto+3" alt="Producto 3">
                <h3>Producto 3</h3>
                <p>Innovador, duradero y al mejor precio del mercado.</p>
                <span>$30.00</span>
                <button class="btn-comprar">Comprar</button>
            </div>

            <div class="producto">
                <img src="https://via.placeholder.com/300x180.png?text=Producto+4" alt="Producto 4">
                <h3>Producto 4</h3>
                <p>Ideal para quienes buscan rendimiento y estilo.</p>
                <span>$55.00</span>
                <button class="btn-comprar">Comprar</button>
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