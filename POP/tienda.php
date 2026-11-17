<?php
$titulo = "Tienda";
$pagina = "tienda";
include("includes/header.php");

$productos[0] = array("nombre" => "Lámina Campbell’s Soup Cans", "detalle" => "Impresión giclée sobre papel de algodón, 40 × 50 cm.", "precio" => "18.500", "imagen" => "imagenes/obras/campbells-soup-cans.jpg");
$productos[1] = array("nombre" => "Póster Whaam!", "detalle" => "Póster de gran formato en papel satinado, 50 × 100 cm.", "precio" => "22.000", "imagen" => "imagenes/obras/whaam.jpg");
$productos[2] = array("nombre" => "Remera Gold Marilyn", "detalle" => "Remera de algodón peinado con estampa serigráfica.", "precio" => "28.900", "imagen" => "imagenes/tienda/remera-marilyn.jpg");
$productos[3] = array("nombre" => "Taza LOVE", "detalle" => "Taza de cerámica de 350 ml, apta lavavajillas.", "precio" => "12.500", "imagen" => "imagenes/tienda/taza-love.jpg");
$productos[4] = array("nombre" => "Lámina A Bigger Splash", "detalle" => "Impresión sobre papel mate, 30 × 30 cm.", "precio" => "19.900", "imagen" => "imagenes/obras-principales/obra-08.jpg");
$productos[5] = array("nombre" => "Almohadón Flowers", "detalle" => "Funda de gabardina estampada con relleno, 45 × 45 cm.", "precio" => "24.000", "imagen" => "imagenes/tienda/almohadon-flowers.jpg");
$productos[6] = array("nombre" => "Tote bag Drowning Girl", "detalle" => "Bolsa de lienzo resistente con estampa a todo color.", "precio" => "15.800", "imagen" => "imagenes/tienda/tote-drowning-girl.jpg");
$productos[7] = array("nombre" => "Cuaderno Brillo Box", "detalle" => "Cuaderno A5 de 96 hojas lisas con tapa dura.", "precio" => "9.900", "imagen" => "imagenes/tienda/cuaderno-brillo.jpg");
?>

<main id="contenido">

<?php
if (isset($_SESSION['usuario'])) {
?>

    <div class="page-hero">
        <span class="eyebrow">TIENDA EXCLUSIVA · SOLO USUARIOS</span>
        <h1>TIENDA POP!</h1>
        <p>Hola, <strong><?php echo htmlspecialchars($_SESSION['nombre'] . " " . $_SESSION['apellido']); ?></strong>. Estos son los productos exclusivos para usuarios registrados.</p>
        <a class="btn" href="salir.php">CERRAR SESIÓN ↗</a>
    </div>

    <section class="section shop">
        <div class="shop-grid">
            <?php
            for ($i = 0; $i < count($productos); $i++) {
            ?>
                <article class="product-card">
                    <img src="<?php echo $productos[$i]['imagen']; ?>" alt="<?php echo $productos[$i]['nombre']; ?>" loading="lazy">
                    <div class="product-info">
                        <h2><?php echo $productos[$i]['nombre']; ?></h2>
                        <p><?php echo $productos[$i]['detalle']; ?></p>
                        <span class="price">$ <?php echo $productos[$i]['precio']; ?></span>
                        <a class="btn" href="contacto.php">CONSULTAR ↗</a>
                    </div>
                </article>
            <?php
            }
            ?>
        </div>
    </section>

<?php
} else {
?>

    <div class="page-hero locked">
        <span class="eyebrow">ACCESO RESTRINGIDO</span>
        <h1>SOLO USUARIOS<br>REGISTRADOS</h1>
        <p>La tienda de productos Pop Art es exclusiva. Ingresá con tu usuario o creá una cuenta para verla.</p>
        <div class="locked-actions">
            <a class="btn" href="login.php">INGRESAR ↗</a>
            <a class="btn" href="registro.php">REGISTRARME ↗</a>
        </div>
    </div>

<?php
}
?>

</main>

<?php include("includes/footer.php"); ?>
