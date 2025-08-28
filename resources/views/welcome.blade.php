
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>BibliotecKJ - Inicio</title>
    <style>
        body {
            background: #f7f3ef;
            font-family: 'Georgia', serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            color: #6d4c2e;
            margin-bottom: 30px;
            letter-spacing: 2px;
        }
        a {
            display: inline-block;
            padding: 12px 32px;
            background: #a67c52;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-size: 1.1em;
            font-weight: bold;
            box-shadow: 0 2px 8px rgba(109, 76, 46, 0.08);
            transition: background 0.2s;
        }
        a:hover {
            background: #6d4c2e;
        }
    </style>
</head>
<body>
    <h1>Bienvenido a BibliotecKJ</h1>
    <a href="{{ url('/libros') }}">Ver libros</a>
</body>
</html