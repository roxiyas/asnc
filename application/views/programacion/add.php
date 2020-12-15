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
                                <span class="d-sm-block d-none">Obras / Servicios</span>
                            </a>
                        </li>
                        <li class="nav-items">
                            <a href="#accion_centralizada" data-toggle="tab" class="nav-link">
                                <span class="d-sm-none">Tab 2</span>
                                <span class="d-sm-block d-none">Bienes</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="proyecto">
                            <form action="<?=base_url()?>index.php/programacion/save_programacion" method="POST" class="form-horizontal">
                                <div class="row">
                                    <div class="col-12">
                                        <h4> <b>Órgano / Ente: Cod: <?=$unidad?> - Nombre: <?=$des_unidad?></b> </h4>
                                    </div>

                                    <div class="col-9 mt-3" >
                                        <label>Acción a Cargar</label>
                                        <select id="acc_cargar" name="acc_cargar" class="select2 form-control">
                                            <option value="0">Seleccione</option>
                                            <option value="1">Proyecto</option>
                                            <option value="2">Acción Centralizada</option>
                                        </select>
                                    </div>
                                    <div class="col-3"></div>

                                    <div class="col-6 mt-3 form-group" id="acc_s" style="display:none;">
                                        <label>Acción Centralizada<b style="color:red">*</b></label><br>
                                        <select style="width: 100%;"  name="id_accion_centralizada" id="id_accion_centralizada" class="default-select2 form-control">
                                            <option value="0">SELECCIONE</option>
                                            <?php foreach ($acc_cent as $data): ?>
                                            <option value="<?=$data['id_accion_centralizada']?>"><?=$data['desc_accion_centralizada']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="col-6 mt-3 form-group" id="proyecto_s" style="display:none;">
                                        <label>Nombre del Proyecto <b style="color:red">*</b></label>
                                        <input id="nombre_proyecto" name="nombre_proyecto" value="Nombre" type="text" class="form-control" required>
                                    </div>


                                    <div class="form-group mt-3 col-3">
                                        <label>Objeto Comercial</label>
                                        <select id="id_obj_comercial" name="id_obj_comercial" class="default-select2 form-control">
                                            <option value="0">Seleccione</option>
                                            <?php foreach ($act_com as $data): ?>
                                                <option value="<?=$data['id_objeto_contrata']?>"><?=$data['desc_objeto_contrata']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Partida Presupuestaria</label>
                                            <input type="hidden" name="par_presupuestaria_ff" id="par_presupuestaria_ff">
                                            <select id="par_presupuestaria" required name="par_presupuestaria" class="default-select2 form-control">
                                                <option value="0">Seleccione</option>
                                                <?php foreach ($part_pres as $data): ?>
                                                    <option value="<?=$data['id_partida_presupuestaria']?>/<?=$data['desc_partida_presupuestaria']?>/<?=$data['codigopartida_presupuestaria']?>"><?=$data['codigopartida_presupuestaria']?>/<?=$data['desc_partida_presupuestaria']?></option>
                                                <?php endforeach; ?>
                                            </select>
                                    </div>
                                    <hr style="border-top: 1px solid rgba(0, 0, 0, 0.17);">
                                    <div class="form-group col-6">
                                        <label>Estado</label>
                                        <select id="id_estado" name="id_estado" class="default-select2 form-control" multiple="multiple" required>
                                            <option value="0">Seleccione</option>
                                            <?php foreach ($estados as $data): ?>
                                                <option value="<?=$data['descripcion']?>"><?=$data['descripcion']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-3">
                                        <label>Fuente de Financiamiento</label>
                                        <select id="fuente_financiamiento" name="fuente_financiamiento" class="default-select2 form-control" required>
                                            <option value="0">Seleccione</option>
                                            <?php foreach ($fuente as $data): ?>
                                                <option value="<?=$data['id_fuente_financiamiento']?>/<?=$data['desc_fuente_financiamiento']?>"><?=$data['desc_fuente_financiamiento']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-3">
                                        <label>Porcentaje<b style="color:red">*</b></label>
                                        <input id="porcentaje" type="text" class="form-control" required    >
                                    </div>
                                    <div class="col-12">
                                        <h5 class="text-center"><b style="color:red;">NOTA:</b> Debe llenar todos lo items para llenar la tabla.</h5>
                                    </div>
                                    <div class="col-5"></div>
                                    <div class="col-7 mt-4">
                                        <button type="button" onclick="agregar_ff(this);" style="background-color:#4caa9d;color:white;" class="btn btn-circle waves-effect waves-circle waves-float">
                                            Agregar
                                        </button>
                                    </div>
                                    <div class="table-responsive mt-3">
                                        <h5 class="text-center"><b style="color:red;">NOTA:</b> La tabla debe tener al menos un registro agregado, para proceder con la solicitud.</h5>
                                        <table id="target_ff" class="table table-bordered table-hover">
                                            <thead style="background:#4caa9d;">
                                                <tr class="text-center">
                                                    <th>Partida Presupuestaria</th>
                                                    <th>Estado</th>
                                                    <th>Fuente de Financiamiento</th>
                                                    <th>%</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                    <div class="form-group col-8">
                                        <label>CCNU <b style="color:red">*</b></label><br>
                                        <select  id="id_ccnu" class="form-control default-select2">
                                            <option value="0">SELECCIONE</option>
                                            <?php foreach ($ccnu as $data): ?>
                                                <option value="<?=$data['codigo_ccnu']?>/<?=$data['desc_ccnu']?>"><?=$data['desc_ccnu']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-2 form-group">
                                        <label>Fecha Desde<b style="color:red">*</b></label>
                                        <input id="fecha_desde" name="fecha_desde" type="date" class="form-control" required>
                                    </div>
                                    <div class="col-2 form-group">
                                        <label>Fecha Hasta<b style="color:red">*</b></label>
                                        <input id="fecha_hasta" name="fecha_hasta" type="date" class="form-control" required>
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Especificación <b style="color:red">*</b></label>
                                        <input id="especificacion" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Unidad de Medida <b style="color:red">*</b></label><br>
                                        <select  id="id_unidad_medida" class="form-control default-select2">
                                            <option value="">SELECCIONE</option>
                                            <?php foreach ($unid as $data): ?>
                                                <option value="<?=$data['id_unidad_medida']?>"><?=$data['desc_unidad_medida']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-1">
                                        <label>I<b style="color:red">*</b></label>
                                        <input id="I" name="I" type="number" onblur="calculo();" min="0" max="100"  value="0" class="form-control" style="width: 140%;">
                                    </div>
                                    <div class="form-group col-1">
                                        <label>II<b style="color:red">*</b></label>
                                        <input id="II" name="II"  type="number" onblur="calculo();" min="0" max="100" value="0" class="form-control" style="width: 140%;">
                                    </div>
                                    <div class="form-group col-1">
                                        <label>III<b style="color:red">*</b></label>
                                        <input id="III" name="III"  type="number" onblur="calculo();" min="0" max="100" value="0" class="form-control" style="width: 140%;">
                                    </div>
                                    <div class="form-group col-1">
                                        <label>IV<b style="color:red">*</b></label>
                                        <input id="IV" name="IV"  type="number" onblur="calculo();" min="0" max="100" value="0" class="form-control" style="width: 140%;">
                                    </div>
                                    <div class="form-group col-2">
                                        <label>Cantd. Total Distribuir <b style="color:red">*</b></label>
                                        <input id="cant_total_distribuir" onblur="calculo();" value="100" min="0" max="100" name="cant_total_distribuir"  type="number" class="form-control" disabled>
                                    </div>

                                    <div class="form-group col-3">
                                        <label>Precio Total <b style="color:red">*</b></label>
                                        <input id="precio_total" name="precio_total" type="number" onblur="calculo();" class="form-control">
                                    </div>
                                    <div class="col-4"></div>
                                    <div class="form-group col-2">
                                        <label>Alícuota IVA Estimado<b style="color:red">*</b></label><br>
                                        <select name="id_alicuota_iva" id="id_alicuota_iva" onchange="calculo();" class="form-control default-select2">
                                            <option value="">SELECCIONE</option>
                                            <?php foreach ($iva as $data): ?>
                                                <option value="<?=$data['desc_alicuota_iva']?>/<?=$data['desc_porcentaj']?>"><?=$data['desc_porcentaj']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-3">
                                        <label>Monto IVA Estimado<b style="color:red">*</b></label>
                                        <input id="iva_estimado" name="iva_estimado" type="number" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-3">
                                        <label>Monto total Estimado<b style="color:red">*</b></label>
                                        <input id="monto_estimado" name="monto_estimado"  type="number" class="form-control" disabled>
                                    </div>
                                    <div class="col-12">
                                        <hr style="border-top: 1px solid rgba(0, 0, 0, 0.39);">
                                    </div>
                                    <div class="form-group col-2">
                                        <label>Estimado I Trimestre</b></label>
                                        <input id="estimado_i" name="estimado_i" type="number" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-2">
                                        <label>Estimado II Trimestre</label>
                                        <input id="estimado_ii" name="estimado_ii" type="number" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-2">
                                        <label>Estimado III Trimestre</label>
                                        <input id="estimado_iii" name="estimado_iii" type="number" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-2">
                                        <label>Estimado IV Trimestre</label>
                                        <input id="estimado_iV" name="estimado_iV" type="number" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-4">
                                        <label>Estimado Total Trimestres + Iva Estimado</label>
                                        <input id="estimado_total_t" name="estimado_total_t" type="number" class="form-control" disabled>
                                    </div>
                                    <div class="col-12">
                                        <hr style="border-top: 1px solid rgba(0, 0, 0, 0.39);">
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="button" onclick="agregar_ccnu(this);" style="background-color:#4caa9d;color:white;" class="btn btn-circle waves-effect btn-lg waves-circle waves-float">
                                            Agregar
                                        </button>
                                    </div>

                                    <div class="table-responsive mt-4">
                                        <h5 class="text-center">Lista de Requerimiento</h5>
                                        <h5 class="text-center"><b style="color:red;">NOTA:</b> La tabla debe tener al menos un requerimiento agregado, para proceder con la solicitud.</h5>
                                        <table id="target_req" class="table table-bordered table-hover">
                                            <thead style="background:#4caa9d;">
                                                <tr class="text-center">
                                                    <th>Partida Pres.</th>
                                                    <th>CCNU</th>
                                                    <th>Fecha Desde</th>
                                                    <th>Fecha Hasta</th>
                                                    <th>Esp.</th>
                                                    <th>Unid. Medida</th>
                                                    <th>I</th>
                                                    <th>II</th>
                                                    <th>III</th>
                                                    <th>IV</th>
                                                    <th>Precio Total</th>
                                                    <th>IVA Estimado</th>
                                                    <th>Monto Iva Est.</th>
                                                    <th>Monto Total Est.</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--////////////////////////////SEGUNDA PARTE DE LA CARGA -->
                                <div class="col-12 text-center mt-3">
                                    <button class="btn btn-circle waves-effect btn-lg waves-circle waves-float btn-primary" type="submit" name="button">Guardar</button>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="accion_centralizada">
                            <form action="<?=base_url()?>index.php/programacion/save_programacion_acc" method="POST" class="form-horizontal">
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <h4> <b>Órgano / Ente: Cod: <?=$unidad?> - Nombre: <?=$des_unidad?></b> </h4>
                                    </div>

                                    <div class="col-9 mt-3" >
                                        <label>Acción a Cargar</label>
                                        <select style="width: 100%;" name="cambiar" id="cambiar" onchange="control();" class="form-control default-select2">
                                            <option value="">SELECCIONE</option>
                                            <option value="1">Proyecto</option>
                                            <option value="2">Acción</option>
                                        </select>
                                    </div>

                                    <div class="col-3"></div>

                                    <div class="col-6 mt-3 form-group" id="acc_acc" style="display:none">
                                        <label>Acción Centralizada<b style="color:red">*</b></label><br>
                                        <select style="width: 100%;"  name="id_accion_centralizada_acc" id="id_accion_centralizada_acc" class="default-select2 form-control">
                                            <option value="0">SELECCIONE</option>
                                            <?php foreach ($acc_cent as $data): ?>
                                            <option value="<?=$data['id_accion_centralizada']?>"><?=$data['desc_accion_centralizada']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="col-6 mt-3 form-group" id="proyecto_acc" style="display:none;">
                                        <label>Nombre del Proyecto <b style="color:red">*</b></label>
                                        <input id="nombre_proyecto_acc" name="nombre_proyecto_acc" value="Nombre" type="text" class="form-control" required>
                                    </div>

                                    <div class="form-group mt-3 col-6">
                                        <label>Objeto Comercial</label><br>
                                        <select style="width: 100%;" id="id_obj_comercial_cc" name="id_obj_comercial_cc" class="default-select2 form-control">
                                            <option value="0">Seleccione</option>
                                            <?php foreach ($act_com2 as $data): ?>
                                                <option value="<?=$data['id_objeto_contrata']?>"><?=$data['desc_objeto_contrata']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Partida Presupuestaria</label><br>
                                            <input type="hidden" name="par_presupuestaria_acc_ff" id="par_presupuestaria_acc_ff">
                                            <select style="width: 100%;" id="par_presupuestaria_acc" required name="par_presupuestaria_acc" class="default-select2 form-control">
                                                <option value="0">Seleccione</option>
                                                <?php foreach ($part_pres as $data): ?>
                                                    <option value="<?=$data['id_partida_presupuestaria']?>/<?=$data['desc_partida_presupuestaria']?>/<?=$data['codigopartida_presupuestaria']?>"><?=$data['codigopartida_presupuestaria']?>/<?=$data['desc_partida_presupuestaria']?></option>
                                                <?php endforeach; ?>
                                            </select>
                                    </div>
                                    <hr style="border-top: 1px solid rgba(0, 0, 0, 0.17);">
                                    <div class="form-group col-6">
                                        <label>Estado</label><br>
                                        <select style="width: 100%;" id="id_estado_acc" name="id_estado_acc" class="default-select2 form-control" multiple="multiple" required>
                                            <option value="0">Seleccione</option>
                                            <?php foreach ($estados as $data): ?>
                                                <option value="<?=$data['descripcion']?>"><?=$data['descripcion']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-3">
                                        <label>Fuente de Financiamiento</label>
                                        <select style="width: 100%;" id="fuente_financiamiento_acc" name="fuente_financiamiento_acc" class="default-select2 form-control" required>
                                            <option value="0">Seleccione</option>
                                            <?php foreach ($fuente as $data): ?>
                                                <option value="<?=$data['id_fuente_financiamiento']?>/<?=$data['desc_fuente_financiamiento']?>"><?=$data['desc_fuente_financiamiento']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-3">
                                        <label>Porcentaje<b style="color:red">*</b></label>
                                        <input id="porcentaje_acc" type="text" class="form-control" required>
                                    </div>

                                    <div class="col-12">
                                        <h5 class="text-center"><b style="color:red;">NOTA:</b> Debe llenar todos lo items para llenar la tabla.</h5>
                                    </div>
                                    <div class="col-5"></div>
                                    <div class="col-7 mt-4">
                                        <button type="button" onclick="agregar_acc_ff(this);" style="background-color:#4caa9d;color:white;" class="btn btn-circle waves-effect waves-circle waves-float">
                                            Agregar
                                        </button>
                                    </div>
                                    <div class="table-responsive mt-3">
                                        <h5 class="text-center"><b style="color:red;">NOTA:</b> La tabla debe tener al menos un registro agregado, para proceder con la solicitud.</h5>
                                        <table id="target_acc_ff" class="table table-bordered table-hover">
                                            <thead style="background:#4caa9d;">
                                                <tr class="text-center">
                                                    <th>Partida Presupuestaria</th>
                                                    <th>Estado</th>
                                                    <th>Fuente de Financiamiento</th>
                                                    <th>%</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>

                                    <div class="form-group col-6">
                                        <label>CCNU <b style="color:red">*</b></label><br>
                                        <select  style="width: 100%;" id="id_ccnu_acc" class="form-control default-select2">
                                            <option value="0">SELECCIONE</option>
                                            <?php foreach ($ccnu as $data): ?>
                                                <option value="<?=$data['codigo_ccnu']?>/<?=$data['desc_ccnu']?>"><?=$data['desc_ccnu']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-6"></div>
                                    <div class="form-group col-6">
                                        <label>Especificación <b style="color:red">*</b></label>
                                        <input id="especificacion_acc" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Unidad de Medida <b style="color:red">*</b></label><br>
                                        <select  style="width: 100%;" id="id_unidad_medida_acc" class="form-control default-select2">
                                            <option value="">SELECCIONE</option>
                                            <?php foreach ($unid as $data): ?>
                                                <option value="<?=$data['id_unidad_medida']?>"><?=$data['desc_unidad_medida']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-2">
                                        <label>Cantidad a Distribuir <b style="color:red">*</b></label>
                                        <input id="cant_a_distribuir_acc" name="cant_a_distribuir_acc" onblur="calcular_bienes();"  type="number" class="form-control">
                                    </div>
                                    <div class="form-group col-1">
                                        <label>I<b style="color:red">*</b></label>
                                        <input id="I_acc" name="I_acc" type="number" onblur="calcular_bienes();"  value="0" class="form-control" style="width: 140%;">
                                    </div>
                                    <div class="form-group col-1">
                                        <label>II<b style="color:red">*</b></label>
                                        <input id="II_acc" name="II_acc"  type="number" onblur="calcular_bienes();" value="0" class="form-control" style="width: 140%;">
                                    </div>
                                    <div class="form-group col-1">
                                        <label>III<b style="color:red">*</b></label>
                                        <input id="III_acc" name="III_acc"  type="number" onblur="calcular_bienes();" value="0" class="form-control" style="width: 140%;">
                                    </div>
                                    <div class="form-group col-1">
                                        <label>IV<b style="color:red">*</b></label>
                                        <input id="IV_acc" name="IV_acc"  type="number" onblur="calcular_bienes();" value="0" class="form-control" style="width: 140%;">
                                    </div>
                                    <div class="form-group col-2">
                                        <label>Cantd. Total Distribuir <b style="color:red">*</b></label>
                                        <input id="cant_total_distribuir_acc" name="cant_total_distribuir_acc"  type="number" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-4">
                                        <label>Costo Unitario <b style="color:red">*</b></label>
                                        <input id="costo_unitario_acc" name="costo_unitario_acc" onblur="calcular_bienes();"  type="number" class="form-control">
                                    </div>
                                    <div class="col-2"></div>
                                    <div class="form-group col-3">
                                        <label>Precio Total Estimado<b style="color:red">*</b></label>
                                        <input id="precio_total_acc" name="precio_total_acc" type="number" class="form-control" disabled>
                                    </div>

                                    <div class="form-group col-2">
                                        <label>Alícuota IVA Estimado<b style="color:red">*</b></label><br>
                                        <select style="width: 100%;" name="id_alicuota_iva_acc" id="id_alicuota_iva_acc" onchange="calcular_bienes();" class="form-control default-select2">
                                            <option value="">SELECCIONE</option>
                                            <?php foreach ($iva as $data): ?>
                                                <option value="<?=$data['desc_alicuota_iva']?>/<?=$data['desc_porcentaj']?>"><?=$data['desc_porcentaj']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-2">
                                        <label>Monto IVA Estimado<b style="color:red">*</b></label>
                                        <input id="iva_estimado_acc" name="iva_estimado_acc" type="number" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-3">
                                        <label>Monto total Estimado<b style="color:red">*</b></label>
                                        <input id="monto_estimado_acc" name="monto_estimado_acc" type="number" class="form-control" disabled>
                                    </div>
                                    <div class="col-12">
                                        <hr style="border-top: 1px solid rgba(0, 0, 0, 0.39);">
                                    </div>
                                    <div class="form-group col-2">
                                        <label>Estimado I Trimestre</b></label>
                                        <input id="estimado_i_acc" name="estimado_i_acc" type="number" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-2">
                                        <label>Estimado II Trimestre</label>
                                        <input id="estimado_ii_acc" name="estimado_ii_acc" type="number" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-2">
                                        <label>Estimado III Trimestre</label>
                                        <input id="estimado_iii_acc" name="estimado_iii_acc" type="number" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-2">
                                        <label>Estimado IV Trimestre</label>
                                        <input id="estimado_iV_acc" name="estimado_iV_acc" type="number" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-4">
                                        <label>Estimado Total Trimestres + Iva Estimado</label>
                                        <input id="estimado_total_t_acc" name="estimado_total_t_acc" type="number" class="form-control" disabled>
                                    </div>
                                    <div class="col-12">
                                        <hr style="border-top: 1px solid rgba(0, 0, 0, 0.39);">
                                    </div>

                                    <div class="col-12 text-center">
                                        <button type="button" onclick="agregar_ccnu_acc(this);" style="background-color:#4caa9d;color:white;" class="btn btn-circle waves-effect btn-lg waves-circle waves-float">
                                            Agregar
                                        </button>
                                    </div>

                                    <div class="table-responsive mt-4">
                                        <h5 class="text-center">Lista de Requerimiento</h5>
                                        <h5 class="text-center"><b style="color:red;">NOTA:</b> La tabla debe tener al menos un requerimiento agregado, para proceder con la solicitud.</h5>
                                        <table id="target_req_acc" class="table table-bordered table-hover">
                                            <thead style="background:#4caa9d;">
                                                <tr class="text-center">
                                                    <th>Partida Pres.</th>
                                                    <th>CCNU</th>
                                                    <th>Esp.</th>
                                                    <th>Unid. Medida</th>
                                                    <th>I</th>
                                                    <th>II</th>
                                                    <th>III</th>
                                                    <th>IV</th>
                                                    <th>Costo Unit.</th>
                                                    <th>Precio Total</th>
                                                    <th>IVA Estimado</th>
                                                    <th>Monto Iva Est.</th>
                                                    <th>Monto Total Est.</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-3">
                                    <button class="btn btn-circle waves-effect btn-lg waves-circle waves-float btn-primary" type="submit" name="button">Guardar</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if ($this->session->flashdata('sa-success2')) { ?>
    <div hidden id="sa-success2"> <?= $this->session->flashdata('sa-success2') ?> </div>
<?php } ?>
<script src="<?=base_url()?>/js/calculos.js"></script>
<script src="<?=base_url()?>/js/calculos2.js"></script>
<script src="<?=base_url()?>/js/calculos3.js"></script>
<script src="<?=base_url()?>/js/dependientes.js"></script>
<script src="<?=base_url()?>/js/agregar_proyecto.js"></script>
<script src="<?=base_url()?>/js/agregar_proyecto_ff.js"></script>

<script src="<?=base_url()?>/js/agregar_acc_centralizada_ff.js"></script>
<script src="<?=base_url()?>/js/agregar_acc_centralizada.js"></script>
