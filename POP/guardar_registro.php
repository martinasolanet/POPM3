<?php
$titulo = "Registro";
$pagina = "login";
include("includes/header.php");
include("includes/conexion.php");

$nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
$apellido = mysqli_real_escape_string($conexion, $_POST['apellido']);
$email = mysqli_real_escape_string($conexion, $_POST['email']);
$usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
$password = md5($_POST['password']);

$consulta = mysqli_query($conexion, "SELECT usuario FROM usuarios WHERE usuario='$usuario'");
$existe = mysqli_num_rows($consulta);

if ($existe == 0) {
    $guardado = mysqli_query($conexion, "INSERT INTO usuarios (nombre, apellido, email, usuario, password) VALUES ('$nombre', '$apellido', '$email', '$usuario', '$password')");
} else {
    $guardado = false;
}

mysqli_close($conexion);
?>

<main id="contenido">
    <div class="page-hero">
        <span class="eyebrow">ARTE · COLOR · CULTURA POP</span>

        <?php
        if ($existe != 0) {
            echo "<h1>¡UPS!</h1>";
            echo "<p>El usuario <strong>" . htmlspecialchars($_POST['usuario']) . "</strong> ya existe. Elegí otro nombre de usuario.</p>";
            echo "<a class='btn' href='registro.php'>VOLVER AL REGISTRO ↗</a>";
        } elseif ($guardado == true) {
            echo "<h1>¡BIENVENIDO/A, " . htmlspecialchars($_POST['nombre']) . "!</h1>";
            echo "<p>Tu cuenta se creó correctamente. Ya podés ingresar con tu usuario y contraseña.</p>";
            echo "<a class='btn' href='login.php'>INGRESAR ↗</a>";
        } else {
            echo "<h1>¡UPS!</h1>";
            echo "<p>Hubo un error al crear tu cuenta. Por favor, intentá de nuevo.</p>";
            echo "<a class='btn' href='registro.php'>VOLVER AL REGISTRO ↗</a>";
        }
        ?>
    </div>
</main>

<?php include("includes/footer.php"); ?>
