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
                                    <div class="col-6 form-group">
                                        <label>Nombre del Proyecto <b style="color:red">*</b></label>
                                        <input id="nombre_proyecto" type="text" class="form-control">
                                    </div>
                                    <div class="col-3 form-group">
                                        <label>Fecha Desde<b style="color:red">*</b></label>
                                        <input id="fecha_desde" type="date" class="form-control">
                                    </div>
                                    <div class="col-3 form-group">
                                        <label>Fecha Hasta<b style="color:red">*</b></label>
                                        <input id="fecha_hasta" type="date" class="form-control">
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Partida Presupuestaria</label>
                                            <select id="par_presupuestaria" name="par_presupuestaria" class="default-select2 form-control">
                                                <option>Seleccione</option>
                                                <?php foreach ($part_pres as $data): ?>
                                                    <option value="<?=$data['id_partida_presupuestaria']?>/<?=$data['desc_partida_presupuestaria']?>"><?=$data['codigopartida_presupuestaria']?>/<?=$data['desc_partida_presupuestaria']?></option>
                                                <?php endforeach; ?>
                                            </select>
                                    </div>
                                    <div class="form-group col-4">
                                        <label>Fuente de Financiamiento</label>
                                            <select id="fuente_financiamiento" name="fuente_financiamiento" class="default-select2 form-control">
                                                <option>Seleccione</option>
                                                <?php foreach ($fuente as $data): ?>
                                                    <option value="<?=$data['id_fuente_financiamiento']?>"><?=$data['desc_fuente_financiamiento']?></option>
                                                <?php endforeach; ?>
                                            </select>
                                    </div>
                                    <div class="form-group col-4">
                                        <label>Objeto Comercial</label>
                                            <select id="actividad_comercial" name="actividad_comercial" class="default-select2 form-control">
                                                <option>Seleccione</option>
                                                <?php foreach ($act_com as $data): ?>
                                                    <option value="<?=$data['id_objeto_contrata']?>"><?=$data['desc_objeto_contrata']?></option>
                                                <?php endforeach; ?>
                                            </select>
                                    </div>
                                    <div class="form-group col-4">
                                        <label>Estado</label>
                                            <select id="estado" name="estado" class="default-select2 form-control">
                                                <option>Seleccione</option>
                                                <?php foreach ($estados as $data): ?>
                                                    <option value="<?=$data['id_estado']?>"><?=$data['descripcion']?></option>
                                                <?php endforeach; ?>
                                            </select>
                                    </div>

                                    <div class="form-group col-8">
                                        <label>CCNU <b style="color:red">*</b></label>
                                        <select  id="id_ccnu" class="form-control default-select2">
                                            <option value="">SELECCIONE</option>
                                            <?php foreach ($ccnu as $data): ?>
                                                <option value="<?=$data['codigo_ccnu']?>/<?=$data['desc_ccnu']?>"><?=$data['desc_ccnu']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-3">
                                        <label>Especificación <b style="color:red">*</b></label>
                                        <input id="especificacion" type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-3">
                                        <label>Unidad de Medida <b style="color:red">*</b></label>
                                        <select  id="id_unidad_medida" class="form-control default-select2">
                                            <option value="">SELECCIONE</option>
                                            <?php foreach ($unid as $data): ?>
                                                <option value="<?=$data['id_unidad_medida']?>"><?=$data['desc_unidad_medida']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-3">
                                        <label>Cantidad <b style="color:red">*</b></label>
                                        <input id="cantidad" type="number" class="form-control">
                                    </div>
                                    <div class="form-group col-3">
                                        <label>Costo Unitario <b style="color:red">*</b></label>
                                        <input id="costo_unitario" type="number" class="form-control">
                                    </div>
                                    <div class="form-group col-3">
                                        <label>Precio Total <b style="color:red">*</b></label>
                                        <input id="precio_total" type="number" class="form-control">
                                    </div>
                                    <div class="form-group col-3">
                                        <label>Alícuota IVA Estimado<b style="color:red">*</b></label>
                                        <select  id="id_alicuota_iva" class="form-control default-select2">
                                            <option value="">SELECCIONE</option>
                                            <?php foreach ($iva as $data): ?>
                                                <option value="<?=$data['id_alicuota_iva']?>/<?=$data['desc_porcentaj']?>"><?=$data['desc_porcentaj']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-3">
                                        <label>Monto IVA Estimado<b style="color:red">*</b></label>
                                        <input id="iva_estimado" type="number" class="form-control">
                                    </div>
                                    <div class="form-group col-3">
                                        <label>Monto total Estimado<b style="color:red">*</b></label>
                                        <input id="monto_estimado" type="number" class="form-control">
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
                                                    <th>Per. Desde</th>
                                                    <th>Per. Hasta</th>
                                                    <th>Part. Presupuestaria</th>
                                                    <th>CCNU</th>
                                                    <th>Esp.</th>
                                                    <th>Cant.</th>
                                                    <th>Costo Unit.</th>
                                                    <th>Precio Total</th>
                                                    <th>Alic. IVA Estimado</th>
                                                    <th>Monto Iva Est.</th>
                                                    <th>Monto Total Est.</th>
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
