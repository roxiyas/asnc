<div class="sidebar-bg"></div>
<div id="content" class="content">


    <div class="row">
		<div class="col-lg-12">
			<div class="panel panel-inverse" data-sortable-id="form-validation-1">
				<div class="panel-heading">
					<h4 class="panel-title">Nueva Fuente de Fianciamiento</h4>
				</div>
				<div class="panel-body">
					<form action="" class="form-horizontal" data-parsley-validate="true" name="demo-form">
                        <div class="row">
                            
                                                
                           
                            <div class="form-group col-6">
                                <label>Codigo</label>
                                <input type="text" name="codigo" class="form-control <?php echo form_error('codigo') ? 'is-invalid':'' ; ?>" placeholder="Ingrese un Codigo" value="<?php echo set_value('codigo'); ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('codigo'); ?>
                                </div>
                            </div>
                            <div class="form-group col-6">
                                <label>Descripción</label>
                                <input type="text" name="desc_fuente" class="form-control "  placeholder="Ingrese una descripción" >
                                <div class="invalid-feedback">
                                    <?php //echo form_error('email'); ?>
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
