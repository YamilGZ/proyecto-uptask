<div class="contenedor olvide">
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php'; ?>
    <div class="contenedor-sm olvide-form">
        <p class="descripcion-pagina">Recupera tu Acceso UpTask</p>

    <?php include_once __DIR__ . '/../templates/alertas.php'; ?>

        <form action="/olvide" class="formulario" method="POST">
            <div class="campo">
                <label for="email">Email</label>
                <input 
                    type="email"
                    id="email"
                    placeholder="Tu Email"
                    name="email"
                >
            </div>

            <input type="submit" class="boton" value="Enviar Instrucciones">
        </form>

        <div class="acciones">
            <a href="/">¿Ya tienes cuenta? Iniciar Sesión</a>
            <a href="/crear">¿Aún no tienes una cuenta? obtener una</a>
        </div>

    </div><!-- .contener-sm -->
</div>