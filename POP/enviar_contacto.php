<?php
$titulo = "Mensaje enviado";
$pagina = "contacto";
include("includes/header.php");
include("includes/conexion.php");

$nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
$email = mysqli_real_escape_string($conexion, $_POST['email']);
$mensaje = mysqli_real_escape_string($conexion, $_POST['mensaje']);

$consulta = mysqli_query($conexion, "INSERT INTO contactos (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')");

mysqli_close($conexion);
?>

<main id="contenido">
    <div class="page-hero">
        <span class="eyebrow">ARTE · COLOR · CULTURA POP</span>

        <?php
        if ($consulta == true) {
            echo "<h1>¡GRACIAS, " . htmlspecialchars($_POST['nombre']) . "!</h1>";
            echo "<p>Tu mensaje se guardó correctamente. Te vamos a responder a <strong>" . htmlspecialchars($_POST['email']) . "</strong>.</p>";
        } else {
            echo "<h1>¡UPS!</h1>";
            echo "<p>Hubo un error al guardar tu mensaje. Por favor, intentá de nuevo.</p>";
        }
        ?>

        <a class="btn" href="index.php">VOLVER AL HOME ↗</a>
    </div>
</main>

<?php include("includes/footer.php"); ?>
