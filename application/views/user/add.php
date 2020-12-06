<div class="sidebar-bg"></div>
<div id="content" class="content">


    <div class="row">
		<div class="col-lg-12">
			<div class="panel panel-inverse" data-sortable-id="form-validation-1">
				<div class="panel-heading">
					<h4 class="panel-title">Nuevo Usuario</h4>
				</div>
				<div class="panel-body">
					<form action="<?=base_url()?>index.php/user/save" class="form-horizontal" data-parsley-validate="true" name="demo-form">
                        <div class="row">
                            <div class="form-group col-3">
                                <label>Perfil</label>
                                <select class="default-select2 form-control">
                                    <option>aca quiero una consulta a la bd </option>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label>Entes</label>
                                <select class="default-select2 form-control">
                                    <option>aca quiero una consulta a la bd </option>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label>Organismo</label>
                                <select class="default-select2 form-control">
                                    <option>aca quiero una consulta a la bd </option>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label>Unidad Ejecutora</label>
                                <select class="default-select2 form-control">
                                    <option>aca quiero una consulta a la bd </option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label>Nombre completo</label>
                                <input type="text" name="nombre" class="form-control <?php echo form_error('nombre') ? 'is-invalid':'' ; ?>" placeholder="Nombre completo" value="<?php echo set_value('nombre'); ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('nombre'); ?>
                                </div>
                            </div>
                            <div class="form-group col-6">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control <?php echo form_error('email') ? 'is-invalid':'' ; ?>" aria-describedby="emailHelp" placeholder="Correo eléctronico" value="<?php echo set_value('email'); ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('email'); ?>
                                </div>
                            </div>
                            <div class="form-group col-6">
                                    <label for="exampleInputPassword1">Contraseña</label>
                                    <input type="password" name="password" class="form-control <?php echo form_error('password') ? 'is-invalid':'' ; ?>"placeholder="Contraseña" value="<?php echo set_value('password'); ?>">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('password'); ?>
                                    </div>
                            </div>
                            <div class="form-group col-6">
                                <label for="exampleInputPassword1">Repite la contraseña</label>
                                <input type="password" name="repeatPassord" class="form-control <?php echo form_error('repeatPassord') ? 'is-invalid':'' ; ?>" placeholder="Contraseña" value="">
                                <div class="invalid-feedback">
                                    <?php echo form_error('repeatPassord'); ?>
                                </div>
                            </div>
                        </div>
						<div class="form-group col 12 text-center">
							<button type="submit" class="btn btn-primary">Guardar</button>
						</div>
					</form>
				</div>
            </div>
        </div>
    </div>
</div>
<?php if ($this->session->flashdata('sa-success2')) { ?>
    <div hidden id="sa-success2"> <?= $this->session->flashdata('sa-success2') ?> </div>
<?php } ?>
