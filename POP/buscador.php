<?php
$titulo = "Buscar artistas";
$pagina = "buscar";
include("includes/header.php");
?>

<main id="contenido">
    <div class="page-hero">
        <span class="eyebrow">ARTE · COLOR · CULTURA POP</span>
        <h1>BUSCÁ UN ARTISTA</h1>
        <p>Escribí un nombre, apellido, país u obra. Por ejemplo: Warhol, Reino Unido o LOVE.</p>

        <form class="search-form" action="resultados_buscar.php" method="get">
            <input type="search" name="buscar" placeholder="Buscar..." required>
            <button class="btn" type="submit">BUSCAR ↗</button>
        </form>
    </div>
</main>

<?php include("includes/footer.php"); ?>
