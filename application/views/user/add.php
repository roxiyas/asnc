<div class="sidebar-bg"></div>
<div id="content" class="content">
    <h1 class="mt-5">Nuevo usuario</h1>
        <form action="<?=base_url()?>index.php/user/save" method="POST">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre completo</label>
                    <input type="text" name="nombre" class="form-control <?php echo form_error('nombre') ? 'is-invalid':'' ; ?>" placeholder="Nombre completo" value="<?php echo set_value('nombre'); ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('nombre'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email" class="form-control <?php echo form_error('email') ? 'is-invalid':'' ; ?>" aria-describedby="emailHelp" placeholder="Correo eléctronico" value="<?php echo set_value('email'); ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('email'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Perfil</label>
                            <select>
                                <option>aca quiero una consulta a la bd </option>
                            </select>

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Entes u Organismos</label>
                            <select>
                                <option>aca quiero una consulta a la bd </option>
                            </select>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" name="password" class="form-control <?php echo form_error('password') ? 'is-invalid':'' ; ?>"placeholder="Contraseña" value="<?php echo set_value('password'); ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('password'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Repite la contraseña</label>
                    <input type="password" name="repeatPassord" class="form-control <?php echo form_error('repeatPassord') ? 'is-invalid':'' ; ?>" placeholder="Contraseña" value="">
                    <div class="invalid-feedback">
                        <?php echo form_error('repeatPassord'); ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
</div>
