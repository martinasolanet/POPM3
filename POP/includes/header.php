<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $titulo; ?> | POP!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/datos.js" defer></script>
    <script src="js/script.js" defer></script>
</head>

<body>
    <a class="skip" href="#contenido">Ir al contenido</a>

    <header class="site-header">
        <a class="brand" href="index.php">POP<span>!</span></a>

        <nav class="nav" id="nav">
            <a href="index.php" <?php if ($pagina == "home") { echo 'class="active"'; } ?>>HOME</a>
            <a href="movimiento.php" <?php if ($pagina == "movimiento") { echo 'class="active"'; } ?>>MOVIMIENTO</a>
            <a href="artistas.php" <?php if ($pagina == "artistas") { echo 'class="active"'; } ?>>ARTISTAS</a>
            <a href="obras.php" <?php if ($pagina == "obras") { echo 'class="active"'; } ?>>OBRAS</a>
            <a href="galeria.php" <?php if ($pagina == "galeria") { echo 'class="active"'; } ?>>GALERÍA</a>
            <a href="tienda.php" <?php if ($pagina == "tienda") { echo 'class="active"'; } ?>>TIENDA</a>
            <a href="contacto.php" <?php if ($pagina == "contacto") { echo 'class="active"'; } ?>>CONTACTO</a>
            <?php
            if (isset($_SESSION['usuario'])) {
                echo '<a href="salir.php">SALIR</a>';
            } else {
                if ($pagina == "login") {
                    echo '<a href="login.php" class="active">INGRESAR</a>';
                } else {
                    echo '<a href="login.php">INGRESAR</a>';
                }
            }
            ?>
        </nav>

        <a class="nav-search <?php if ($pagina == "buscar") { echo 'active'; } ?>" href="buscador.php" aria-label="Buscar artistas">
            <svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true">
                <circle cx="10" cy="10" r="6.5" fill="none" stroke="currentColor" stroke-width="3"/>
                <line x1="15" y1="15" x2="21.5" y2="21.5" stroke="currentColor" stroke-width="3.2" stroke-linecap="round"/>
            </svg>
            <span>BUSCAR</span>
        </a>

        <button class="menu-toggle" aria-expanded="false" aria-controls="nav">☰ MENÚ</button>
    </header>
