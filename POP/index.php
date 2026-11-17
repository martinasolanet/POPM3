<?php
$titulo = "Inicio";
$pagina = "home";
include("includes/header.php");
?>

<main id="contenido">
    <section class="hero">
        <div class="hero-copy">
            <p class="eyebrow">ARTE · COLOR · CULTURA POP</p>
            <h1>¡ESTO ES<br><em>POP ART!</em></h1>
            <p>El arte que convirtió lo cotidiano en extraordinario.</p>
            <a class="btn" href="movimiento.php">EXPLORAR ↗</a>
        </div>

        <div class="hero-art">
            <div class="burst">WOW!</div>
            <span class="sticker star">★</span>
            <span class="sticker pow">POW!</span>
        </div>
    </section>

    <section class="page-links">
        <a class="page-link" href="movimiento.php">
            <h2>EL MOVIMIENTO ↗</h2>
            <p>De los años cincuenta al legado contemporáneo.</p>
        </a>
        <a class="page-link" href="artistas.php">
            <h2>ARTISTAS ↗</h2>
            <p>Cuatro figuras fundamentales, sus trayectorias y sus obras.</p>
        </a>
        <a class="page-link" href="obras.php">
            <h2>OBRAS ↗</h2>
            <p>Diez piezas esenciales explicadas en detalle.</p>
        </a>
        <a class="page-link" href="galeria.php">
            <h2>GALERÍA ↗</h2>
            <p>Doce obras para explorar visualmente.</p>
        </a>
        <a class="page-link" href="contacto.php">
            <h2>CONTACTO ↗</h2>
            <p>Escribí un mensaje.</p>
        </a>
    </section>
</main>

<?php include("includes/footer.php"); ?>
