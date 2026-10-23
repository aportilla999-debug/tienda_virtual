<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Virtual Mi Barrio</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f6f8; /* Fondo general gris claro neutro */
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #1e293b; /* Azul oscuro elegante */
            color: #ffffff;
            padding: 30px 20px;
            text-align: center;
        }

        header h1 {
            margin: 0 0 10px 0;
            font-size: 2.2rem;
        }

        header p {
            margin: 0;
            font-size: 1.1rem;
            color: #cbd5e1;
        }

        nav {
            background-color: #2563eb; /* Azul primario vibrante */
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1rem;
            font-weight: 500;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            width: 90%;
            max-width: 900px;
            margin: 40px auto;
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .bienvenida {
            background-color: #ffffff; /* Tarjeta blanca limpia */
            padding: 50px 40px;
            text-align: center;
            border-radius: 12px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05); /* Suave sombra para dar profundidad */
        }

        .bienvenida h2 {
            margin: 0 0 15px 0;
            color: #0f172a; /* Texto oscuro de alto contraste */
            font-size: 1.8rem;
        }

        .bienvenida p {
            margin: 0 0 25px 0;
            color: #475569;
            font-size: 1.1rem;
        }

        .boton {
            display: inline-block;
            background-color: #2563eb; /* Botón a juego con el menú */
            color: white;
            padding: 12px 28px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.2s ease;
        }

        .boton:hover {
            background-color: #1d4ed8;
        }

        footer {
            padding: 20px;
            text-align: center;
            background-color: #0f172a; /* Pie de página muy oscuro */
            color: #94a3b8;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Tienda virtual</h1>
        <p>Tienda en linea para que compres tdos tus productos</p>
    </header>

    <nav>
        <a href="/">Inicio</a>
        <a href="/productos">Productos</a>
        <a href="#">Categorias</a>
        <a href="#">Contacto</a>
    </nav>

    <main>
        <section class="bienvenida">
            <h2>Bienvenido a nuestra tienda</h2>
            <p>Encuentra los mejores productos en un solo lugar</p>
            <a href="/productos" class="boton">Ver Productos</a>
        </section>
    </main>

    <footer>
        <p>2026 Tienda virtual - Todos los derechos reservados</p>
    </footer>
</body>
</html>