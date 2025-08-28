
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Libros</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            background-color: #f7f3ef;
            margin: 20px;
        }
        h2 {
            text-align: center;
            color: #6d4c2e;
            letter-spacing: 2px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
            background-color: #fff8f0;
            box-shadow: 0 2px 8px rgba(109, 76, 46, 0.08);
        }
        th, td {
            border: 1px solid #bfa382;
            padding: 10px 8px;
            text-align: left;
        }
        th {
            background-color: #a67c52;
            color: #fff;
            font-weight: bold;
            letter-spacing: 1px;
        }
        tr:nth-child(even) {
            background-color: #f3e5d8;
        }
        tr:hover {
            background-color: #e0c9b1;
        }
        td {
            color: #5a3e1b;
        }
    </style>
</head>
<body>
<div style="max-width: 900px; margin: 0 auto;">
    <h2>Listado de Libros</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Editorial</th>
                <th>Autor</th>
                <th>Género</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($libros as $libro)
            <tr>
                <td>{{ $libro->ID_Libro }}</td>
                <td>{{ $libro->Titulo }}</td>
                <td>{{ $libro->Editorial }}</td>
                <td>{{ $libro->Autor }}</td>
                <td>{{ $libro->Genero }}</td>
                <td>{{ $libro->Cantidad }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="6" style="text-align:center;">No hay libros registrados.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
</body>
</html>