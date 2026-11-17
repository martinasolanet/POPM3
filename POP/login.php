<?php
$titulo = "Ingresar";
$pagina = "login";
include("includes/header.php");
?>

<main id="contenido">
    <div class="page-hero">
        <span class="eyebrow">ARTE · COLOR · CULTURA POP</span>
        <h1>INGRESÁ</h1>
        <p>Iniciá sesión para acceder a la tienda exclusiva de productos Pop Art.</p>
    </div>

    <section class="section contact">
        <div class="contact-wrap">
            <div class="contact-heading">
                <h2>LOGUEATE<span>!</span></h2>
                <p>¿No tenés cuenta? <a href="registro.php">Registrate acá</a>.</p>
            </div>

            <form class="contact-form" action="validar_login.php" method="post">
                <label for="usuario">NOMBRE DE USUARIO</label>
                <input id="usuario" type="text" name="usuario" maxlength="20" required>

                <label for="password">CONTRASEÑA</label>
                <input id="password" type="password" name="password" maxlength="20" required>

                <button class="btn" type="submit">INGRESAR ↗</button>
            </form>
        </div>
    </section>
</main>

<?php include("includes/footer.php"); ?>
