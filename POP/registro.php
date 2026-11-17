<?php
$titulo = "Registro";
$pagina = "login";
include("includes/header.php");
?>

<main id="contenido">
    <div class="page-hero">
        <span class="eyebrow">ARTE · COLOR · CULTURA POP</span>
        <h1>SUMATE AL POP!</h1>
        <p>Creá tu cuenta para entrar a la tienda exclusiva de productos Pop Art.</p>
    </div>

    <section class="section contact">
        <div class="contact-wrap">
            <div class="contact-heading">
                <h2>REGISTRATE<span>!</span></h2>
                <p>¿Ya tenés cuenta? <a href="login.php">Ingresá acá</a>.</p>
            </div>

            <form class="contact-form" action="guardar_registro.php" method="post">
                <label for="nombre">NOMBRE</label>
                <input id="nombre" type="text" name="nombre" maxlength="50" required>

                <label for="apellido">APELLIDO</label>
                <input id="apellido" type="text" name="apellido" maxlength="50" required>

                <label for="email">EMAIL</label>
                <input id="email" type="email" name="email" maxlength="80" required>

                <label for="usuario">NOMBRE DE USUARIO</label>
                <input id="usuario" type="text" name="usuario" maxlength="20" required>

                <label for="password">CONTRASEÑA</label>
                <input id="password" type="password" name="password" minlength="4" maxlength="20" required>

                <button class="btn" type="submit">CREAR CUENTA ↗</button>
            </form>
        </div>
    </section>
</main>

<?php include("includes/footer.php"); ?>
