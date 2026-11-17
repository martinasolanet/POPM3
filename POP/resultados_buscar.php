<?php
$titulo = "Resultados";
$pagina = "buscar";
include("includes/header.php");
include("includes/conexion.php");

$buscar = $_GET['buscar'];
$buscar_sql = mysqli_real_escape_string($conexion, $buscar);

$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar_sql%' OR apellido LIKE '%$buscar_sql%' OR nacionalidad LIKE '%$buscar_sql%' OR obra_clave LIKE '%$buscar_sql%' ORDER BY apellido");

$nros = mysqli_num_rows($consulta);
?>

<main id="contenido">
    <div class="page-hero">
        <span class="eyebrow">ARTE · COLOR · CULTURA POP</span>
        <h1>RESULTADOS</h1>
        <p>Su consulta: <em><?php echo htmlspecialchars($buscar); ?></em></p>

        <form class="search-form" action="resultados_buscar.php" method="get">
            <input type="search" name="buscar" placeholder="Buscar..." value="<?php echo htmlspecialchars($buscar); ?>" required>
            <button class="btn" type="submit">BUSCAR ↗</button>
        </form>
    </div>

    <section class="search-results">
        <p class="result-count">Cantidad de resultados: <?php echo $nros; ?></p>

        <?php
        if ($nros == 0) {
            echo "<p>No se encontraron artistas. Probá con otra palabra.</p>";
        }

        while ($resultados = mysqli_fetch_array($consulta)) {
        ?>
            <a class="result-card" href="<?php echo $resultados['enlace']; ?>">
                <h2><?php echo $resultados['nombre'] . " " . $resultados['apellido']; ?></h2>

                <p class="result-meta">
                    <?php
                    echo $resultados['nacionalidad'] . " · ";

                    if ($resultados['fallecimiento'] == NULL) {
                        echo "Nació en " . $resultados['nacimiento'];
                    } else {
                        echo $resultados['nacimiento'] . " – " . $resultados['fallecimiento'];
                    }
                    ?>
                </p>

                <p><?php echo $resultados['descripcion']; ?></p>
                <span class="obra">OBRA CLAVE: <?php echo $resultados['obra_clave']; ?></span>
                <span class="ver-mas">VER EN EL SITIO ↗</span>
            </a>
        <?php
        }

        mysqli_free_result($consulta);
        mysqli_close($conexion);
        ?>

        <a class="btn" href="buscador.php">NUEVA BÚSQUEDA ↗</a>
    </section>
</main>

<?php include("includes/footer.php"); ?>
