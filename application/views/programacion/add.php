<div class="sidebar-bg"></div>
<div id="content" class="content">
    <div class="row">
		<div class="col-lg-12">
			<div class="panel panel-inverse" data-sortable-id="form-validation-1">
                <div class="panel-body">
                    <ul class="nav nav-tabs" style="background: #080808;">
                        <li class="nav-items">
                            <a href="#proyecto" data-toggle="tab" class="nav-link active">
                                <span class="d-sm-none">Tab 1</span>
                                <span class="d-sm-block d-none">Proyecto</span>
                            </a>
                        </li>
                        <li class="nav-items">
                            <a href="#accion_centralizada" data-toggle="tab" class="nav-link">
                                <span class="d-sm-none">Tab 2</span>
                                <span class="d-sm-block d-none">Accion Centralizada</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="pproyecto">
                            <form action="<?=base_url()?>index.php/configuracion/save_ente_adscrito" method="POST" class="form-horizontal">
                                <div class="row">
                                    <div class="col-12">
                                        <h5>Toda la información del Ente</h5>
                                    </div>
                                    <div class="col-2">
                                        <label>fecha <b style="color:red">*</b></label>
                                        <input id="fecha" type="date" class="form-control">
                                    </div>
                                    <div class="form-group col-4">
                                        <label>Partida Presupuestaria</label>
                                            <select id="id_ente" name="id_ente" class="default-select2 form-control">
                                                <option>Seleccione</option>
                                            </select>
                                    </div>
                                    <div class="form-group col-4">
                                        <label>Fuente de Financiamiento</label>
                                            <select id="id_ente" name="id_ente" class="default-select2 form-control">
                                                <option>Seleccione</option>
                                            </select>
                                    </div>
                                    <div class="form-group col-4">
                                        <label>Actividad Comercial</label>
                                            <select id="id_ente" name="id_ente" class="default-select2 form-control">
                                                <option>Seleccione</option>
                                            </select>
                                    </div>
                                    <div class="form-group col-4">
                                        <label>Estado</label>
                                            <select id="id_ente" name="id_ente" class="default-select2 form-control">
                                                <option>Seleccione</option>
                                                <option value="1">caracas</option>
                                            </select>
                                    </div>

                                    <div class="col-1">

                                    </div>
                                    <div class="col-4">
                                        <label>CCNU <b style="color:red">*</b></label>
                                        <select  id="id_ccnu" class="form-control default-select2">
                                            <option value="">SELECCIONE</option>
                                            <option value="1">primero</option>
                                            <option value="1">Segundo</option>
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <label>Especificación <b style="color:red">*</b></label>
                                        <input id="especificación" type="text" class="form-control">
                                    </div>
                                    <div class="col-2">
                                        <label>Cantidad <b style="color:red">*</b></label>
                                        <input id="cantidad" type="number" class="form-control">
                                    </div>
                                    <div class="col-2">
                                        <label>Costo Unitario <b style="color:red">*</b></label>
                                        <input id="costo_unitario" type="number" class="form-control">
                                    </div>
                                    <div class="col-2">
                                        <label>Precio Total <b style="color:red">*</b></label>
                                        <input id="precio_total" type="number" class="form-control">
                                    </div>

                                    <div class="col-1 mt-4">
                                        <button type="button" onclick="agregar_ccnu(this);" style="background-color:#4caa9d;color:white;" class="btn btn-circle waves-effect waves-circle waves-float">
                                            <i class="fa fa-lg fa-plus"></i>
                                        </button>
                                    </div>

                                    <div class="table-responsive mt-3">
                                        <h5 class="text-center">Lista de Requerimiento</h5>
                                        <h5 class="text-center"><b style="color:red;">NOTA:</b> La tabla debe tener al menos un requerimiento agregado, para proceder con la solicitud.</h5>
                                        <table id="target_req" class="table table-bordered table-hover">
                                            <thead style="background:#4caa9d;">
                                                <tr class="text-center">
                                                    <th>CCNU</th>
                                                    <th>Especificación</th>
                                                    <th>Cantidad</th>
                                                    <th>Costo Unitario</th>
                                                    <th>Precio Total</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="accion_centralizada">
                            <div class="row">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?=base_url()?>/js/dependientes.js"></script>
<script src="<?=base_url()?>/js/agregar_proyecto.js"></script>
