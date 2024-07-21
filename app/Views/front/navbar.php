<!-- Navegación -->
<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg bg-body-green">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand me-auto barra" href="<?= base_url('principal') ?>">
                <!-- Logo/Marca de la empresa -->
                <img src="<?= base_url('assets/img/logo_ruli_contorno.png') ?>" alt="marca" width="75" height="30" class="img-fluid" />
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <?php if ($perfil == 1): ?>
        <div class="btn btn-secondary active btnUser btn-sm">
            <a href="">ADMIN: <?= $nombre; ?></a>
        </div>
        <a class="navbar-brand" href="#"></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('registro') ?>">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/logout'); ?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
                </li>
            </ul>
        </div>
        <?php elseif ($perfil == 2): ?>
        <div class="btn btn-info active btnUser btn-sm">
            <a href="">CLIENTE: <?= $nombre; ?></a>
        </div>
        <!--Navbar para clientes-->
        <a class="navbar-brand" href="#"></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('quienes_somos') ?>">Quiénes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('acerca_de') ?>">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/logout'); ?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
                </li>
            </ul>
        </div>
        <?php else: ?>
        <!--Navbar para clientes no logueados-->
        <a class="navbar-brand" href="#"></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('quienes_somos') ?>">Quiénes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('acerca_de') ?>">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('registro') ?>">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
                </li>
            </ul>
        </div>
        <form class="d-flex" role="buscar">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
        <?php endif; ?>
    </div>
</div>
</nav>
