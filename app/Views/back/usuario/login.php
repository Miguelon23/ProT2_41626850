<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card" style="width: 50%;">
        <div class="card-header text-center">
            <h2>Iniciar Sesión</h2>
        </div>

<!--Mensaje de Error-->
        <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif;?>

        <!--Inicio del Login-->
        <form method="post" action="<?= base_url('/enviarlogin') ?>">
            <div class="card-body">
                <div class="mb-2">
                    <label for="email" class="form-label">Correo</label>
                    <input name="email" id="email" type="text" class="form-control" placeholder="Correo" autocomplete="email">
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label">Password</label>
                    <input name="pass" id="pass" type="password" class="form-control" placeholder="contraseña">
                </div>
                <input type="submit" value="Ingresar" class="btn btn-success">
                <a href="<?= base_url('login'); ?>" class="btn btn-danger">Cancelar</a>
                <br><span>¿Aún no se registró? <a href="<?= base_url('/registro'); ?>">Registrarse aquí</a></span>
            </div>
        </form>
    </div>
</div>
