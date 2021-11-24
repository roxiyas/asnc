<div class="sidebar-bg"></div>
<div id="content" class="content">
    <h2>Actividad</h2>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                <div class="panel-heading">
				</div>
                <div class="panel-body">
                    <div class="row">
						<div class="form-group col-6">
							<label>Mecanismo <b title="Campo Obligatorio" style="color:red">*</b></label>
							<input class="form-control"  type="text" name="n_cuenta" id="n_cuenta" placeholder="Número de cuenta">
						</div>
						<div class="form-group col-3">
							<label>Descripción <b title="Campo Obligatorio" style="color:red">*</b></label>
							<select class="form-control" name="t_cuenta" id="t_cuenta">
								<option value="0">Seleccione</option>
								<option value="1">Bienes</option>
								<option value="2">Obras</option>
								<option value="2">Servicios</option>
							</select>
						</div>
						<div class="form-group col-3">
							<label>Días <b title="Campo Obligatorio" style="color:red">*</b></label>
							<input class="form-control"  type="text" name="beneficiaio" id="beneficiaio" placeholder="Beneficiario">
						</div>
                    </div>
                </div>

				<div class="col-lg-12">
            <div class="panel panel-inverse">
                <div class="panel-heading"></div>
				<div class="table-responsive">
					<table id="records" class="table table-bordered table-hover">
						<thead style="background:#e4e7e8">
							<tr>
								<th>ID</th>
								<th>Mécanisco</th>
								<th>Descripción</th>
								<th>Días</th>	
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>1</th>
								<th>Acto Único</th>
								<th>Bienes</th>
								<th>30</th>
								<th><a class="button"><i class="fas fa-lg fa-fw fa-trash-alt" style="color:red"></i><a/>
								<a class="button"><i class="fas fa-lg fa-fw fa-edit" style="color:green"></i><a/></th>
								</tr>
						</tbody>
					</table>
				</div>
            </div>
            </div>
        </div>
	</div>
</div>
