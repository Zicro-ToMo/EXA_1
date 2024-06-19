<?php
// Crear el arreglo asociativo
$directorio = [
    [
        "id" => 1,
        "nombre" => "Juan Pérez",
        "telefono" => "555-1234",
        "email" => "juan.perez@example.com"
    ],
    [
        "id" => 2,
        "nombre" => "María López",
        "telefono" => "555-5678",
        "email" => "maria.lopez@example.com"
    ],
    [
        "id" => 3,
        "nombre" => "Carlos García",
        "telefono" => "555-8765",
        "email" => "carlos.garcia@example.com"
    ],
    [
        "id" => 4,
        "nombre" => "Ana Torres",
        "telefono" => "555-4321",
        "email" => "ana.torres@example.com"
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Directorio Telefónico</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Directorio Telefónico</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Email</th>
        </tr>
        <?php foreach ($directorio as $entrada): ?>
            <tr>
                <td><?php echo $entrada['id']; ?></td>
                <td><?php echo $entrada['nombre']; ?></td>
                <td><?php echo $entrada['telefono']; ?></td>
                <td><?php echo $entrada['email']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
