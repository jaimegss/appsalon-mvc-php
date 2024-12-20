<h1 class="nombre-pagina">Recuperar Password</h1>
<p class="descripcion-pagina">Restablece tu password escribiendo tu e-amil a continuación</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" method="POST" action="/olvide">
    <div class="campo">
        <label for="email">Email</label>
        <input
            type="mail"
            id="email"
            name="email"
            placeholder="Tu Email"
        />
    </div>
    <input type="submit" value="Recuperar Password" class="boton">
</form>
<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Iniciar Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
</div>
