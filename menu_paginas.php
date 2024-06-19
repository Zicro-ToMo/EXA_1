<?php
// Crear el arreglo de páginas web
$paginas = [
    ["nombre" => "Google", "url" => "https://www.google.com"],
    ["nombre" => "Facebook", "url" => "https://www.facebook.com"],
    ["nombre" => "Twitter", "url" => "https://www.twitter.com"],
    ["nombre" => "LinkedIn", "url" => "https://www.linkedin.com"],
    ["nombre" => "GitHub", "url" => "https://www.github.com"]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menú de Páginas Web</title>
    <style>
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 5px 0;
        }
        a {
            text-decoration: none;
            color: #007BFF;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Menú de Páginas Web</h1>
    <ul>
        <?php foreach ($paginas as $pagina): ?>
            <li>
                <a href="<?php echo $pagina['url']; ?>" target="_blank">
                    <?php echo htmlspecialchars($pagina['nombre']); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
