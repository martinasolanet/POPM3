<?php
$titulo = "Contacto";
$pagina = "contacto";
include("includes/header.php");
?>

<main id="contenido">
    <div class="page-hero">
        <span class="eyebrow">ARTE · COLOR · CULTURA POP</span>
        <h1>LET’S POP!</h1>
        <p>¿Querés compartir una pregunta o comentario?</p>
    </div>

    <section class="section contact">
        <div class="contact-wrap">
            <div class="contact-heading">
                <h2>HABLEMOS<span>!</span></h2>
                <p>El arte también se construye conversando.</p>
            </div>

            <form class="contact-form" action="enviar_contacto.php" method="post">
                <label for="nombre">TU NOMBRE</label>
                <input id="nombre" type="text" name="nombre" maxlength="50" required>

                <label for="email">TU EMAIL</label>
                <input id="email" type="email" name="email" maxlength="80" required>

                <label for="mensaje">TU MENSAJE</label>
                <textarea id="mensaje" name="mensaje" rows="5" required></textarea>

                <button class="btn" type="submit">ENVIAR MENSAJE ↗</button>
            </form>
        </div>
    </section>
</main>

<?php include("includes/footer.php"); ?>
