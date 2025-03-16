<?php
// Enrutador básico
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
include 'bd/conexion.php';


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos de Jensen Ballen Banguera</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="?page=home">Inicio</a></li>
                <li><a href="?page=proyectos">Proyectos</a></li>
            </ul>
        </nav>

        <h1>Proyectos</h1>
        <p>Aquí puedes descargar mis proyectos realizados durante mis estudios.</p>
    </header>
    <section id="descargas" style="display: <?php echo $page === 'proyectos' ? 'block' : 'none'; ?>;">

        <h2>Descargas</h2>
        <ul>
            <?php
            if ($page === 'proyectos') {
                // Verificar la conexión a la base de datos

            if ($conn) {
                $stmt = $conn->prepare("SELECT id, nombre, ruta FROM proyecto");
                $stmt->execute();
                $proyectos = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($proyectos as $proyecto) {
                    echo "<li><a href='{$proyecto['ruta']}' download>Descargar {$proyecto['nombre']}</a></li>";
                }
            } else {
                echo "<li>Error en la conexión a la base de datos.</li>";
            }

            }
            ?>
        </ul>
    </section>
    <footer>
        <p>&copy; 2023 Jensen Ballen Banguera. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
