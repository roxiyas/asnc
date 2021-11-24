<div class="sidebar-bg"></div>
<div id="content" class="content">
    <h2>Registro de Bancos</h2>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                <div class="panel-heading">
				</div>
                <div class="panel-body">
                    <div class="row">
					<div class="form-group col-6">
						<label>Código de Banco <b title="Campo Obligatorio" style="color:red">*</b></label>
						<input class="form-control"  type="text" name="codigo_b" id="codigo_b" placeholder="XXXX">
						</select>
					</div>
					<div class="form-group col-6">
						<label>Nombre del Banco <b title="Campo Obligatorio" style="color:red">*</b></label>
						<input class="form-control"  type="text" name="nombre_b" id="nombre_b" placeholder="Nombre del Banco">
					</div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button class="btn btn-info">Guardar</button>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="panel panel-inverse">
                <div class="panel-heading"></div>
				<div class="table-responsive">
					<table id="records" class="table table-bordered table-hover">
						<thead style="background:#e4e7e8">
							<tr>
								<th>Código</th>
								<th>Banco</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>0001</th>
								<th>Mercantil</th>
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
