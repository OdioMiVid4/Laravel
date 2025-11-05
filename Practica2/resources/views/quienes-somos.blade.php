<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quiénes Somos - SENATI</title>
    <meta name="description" content="Conoce la misión, visión y valores de SENATI">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            font-family: 'Roboto', sans-serif;
            background-color: #f0f4f8;
            color: #333;
            line-height: 1.6;
        }

        header {
            background: linear-gradient(135deg, #0d6efd, #3a8dff);
            color: white;
            text-align: center;
            padding: 3rem 1rem;
        }

        header h1 {
            font-size: 3rem;
            margin-bottom: 0.5rem;
        }

        header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        main {
            flex: 1;
            /* hace que main ocupe todo el espacio disponible */
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .intro {
            text-align: center;
            margin-bottom: 3rem;
        }

        .intro p {
            font-size: 1.2rem;
            color: #555;
        }

        .msv-container {
            display: flex;
            justify-content: space-around;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .msv-card {
            background-color: white;
            flex: 1 1 300px;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .msv-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
        }

        .msv-card h2 {
            color: #0d6efd;
            margin-bottom: 1rem;
            font-size: 1.8rem;
        }

        .msv-card p {
            color: #555;
            font-size: 1rem;
        }

        footer {
            background-color: #0d6efd;
            color: white;
            text-align: center;
            padding: 1.5rem;
        }

        @media (max-width: 900px) {
            .msv-container {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>Quiénes Somos</h1>
        <p>Formando profesionales de excelencia para el futuro.</p>
    </header>

    <main>
        <section class="intro">
            <p>
                Bienvenidos a <strong>SENATI - 2025</strong>. Somos una institución líder en formación técnica
                profesional, comprometida con la innovación, el conocimiento y la excelencia educativa.
            </p>
        </section>

        <section class="msv-container">
            <div class="msv-card">
                <h2>Misión</h2>
                <p>
                    Brindar educación técnica de alta calidad, desarrollando competencias profesionales que permitan a
                    nuestros estudiantes enfrentar los desafíos del mundo laboral con éxito.
                </p>
            </div>

            <div class="msv-card">
                <h2>Visión</h2>
                <p>
                    Ser reconocidos como líderes en formación técnica, promoviendo la innovación, la creatividad y la
                    responsabilidad social en todos nuestros programas educativos.
                </p>
            </div>

            <div class="msv-card">
                <h2>Valores</h2>
                <p>
                    Excelencia, integridad, compromiso, innovación y trabajo en equipo, pilares fundamentales que guían
                    nuestras acciones y decisiones.
                </p>
            </div>
        </section>
    </main>

    <footer>
        &copy; 2025 SENATI. Todos los derechos reservados.
    </footer>
</body>

</html>