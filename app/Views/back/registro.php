<div class="content">
            <!-- Registro -->
            <div class="container mt-0 mb-0">
                <div class="card-header text-justify">
                    <div class="row d-flex justify-content-center">
                        <div class="card col-lg-3" style="width: 50%;">
                            <h4>Registrarse</h4>
        
                            <?php $validation = \Config\Services::validation(); ?>
                            <form method="post" action="<?= base_url('/enviar-form') ?>">
                                <?= csrf_field(); ?>
                                <?php if (!empty(session()->getFlashdata('fail'))): ?>
                                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                                <?php endif; ?>
                                <div class="card-body justify-content-center">
                                    <div class="form">
                                        <label for="nombre" class="form-label">Nombre</label>
                                        <input name="nombre" id="nombre" type="text" class="form-control" placeholder="nombre">
                                        <?php if ($validation->getError('nombre')): ?>
                                            <div class='alert alert-danger mt-2'>
                                                <?= $validation->getError('nombre'); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="apellido" class="form-label">Apellido</label>
                                        <input type="text" name="apellido" id="apellido" class="form-control" placeholder="apellido">
                                        <?php if ($validation->getError('apellido')): ?>
                                            <div class='alert alert-danger mt-2'>
                                                <?= $validation->getError('apellido'); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="email">
                                        <?php if ($validation->getError('email')): ?>
                                            <div class='alert alert-danger mt-2'>
                                                <?= $validation->getError('email'); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="usuario" class="form-label">Usuario</label>
                                        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="usuario">
                                        <?php if ($validation->getError('usuario')): ?>
                                            <div class='alert alert-danger mt-2'>
                                                <?= $validation->getError('usuario'); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="password">
                                        <?php if ($validation->getError('password')): ?>
                                            <div class='alert alert-danger mt-2'>
                                                <?= $validation->getError('password'); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <input type="submit" value="Guardar" class="btn btn-success">
                                    <input type="reset" value="Cancelar" class="btn btn-danger">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

