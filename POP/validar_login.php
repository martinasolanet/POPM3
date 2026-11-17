<?php
session_start();
include("includes/conexion.php");

$usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
$password = md5($_POST['password']);

$consulta = mysqli_query($conexion, "SELECT nombre, apellido, usuario FROM usuarios WHERE usuario='$usuario' AND password='$password'");
$resultado = mysqli_num_rows($consulta);

if ($resultado != 0) {
    $respuesta = mysqli_fetch_array($consulta);
    $_SESSION['usuario'] = $respuesta['usuario'];
    $_SESSION['nombre'] = $respuesta['nombre'];
    $_SESSION['apellido'] = $respuesta['apellido'];
}

mysqli_close($conexion);

$titulo = "Ingresar";
$pagina = "login";
include("includes/header.php");
?>

<main id="contenido">
    <div class="page-hero">
        <span class="eyebrow">ARTE · COLOR · CULTURA POP</span>

        <?php
        if ($resultado != 0) {
            echo "<h1>¡HOLA, " . htmlspecialchars($_SESSION['nombre']) . "!</h1>";
            echo "<p>Ingresaste correctamente. Ya podés acceder a la tienda exclusiva.</p>";
            echo "<a class='btn' href='tienda.php'>IR A LA TIENDA ↗</a>";
        } else {
            echo "<h1>¡UPS!</h1>";
            echo "<p>Usuario o contraseña incorrectos. Si no tenés cuenta, <a href='registro.php'>registrate acá</a>.</p>";
            echo "<a class='btn' href='login.php'>VOLVER A INTENTAR ↗</a>";
        }
        ?>
    </div>
</main>

<?php include("includes/footer.php"); ?>
