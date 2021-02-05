<div class="sidebar-bg"></div>
<div id="content" class="content">
	<div class="col-lg-12">
        <div class="row">
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <form id="reg_servicio" method="POST" class="form-horizontal">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10 mt-4">
                                <div class="card card-outline-danger text-center bg-white">
                                    <div class="card-block">
                                        <blockquote class="card-blockquote" style="margin-bottom: -19px;">
                                            <p class="f-s-18 text-inverse f-w-600">Nombre Órgano / Ente: <?=$des_unidad?>.</p>
                                            <p class="f-s-16">RIF.: <?=$rif?> <br>
                                            Código ONAPRE: <?=$codigo_onapre?> <br>
                                            Año: <b><?=$anio?></b></p>
                                            <input type="hidden" id="id_programacion" name="id_programacion" value="<?=$id_programacion?>">
                                            <input type="hidden" name="fecha_est" id="fecha_est" value="<?=$anio?>">
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 mt-3" >
                                <label>Acción a Cargar</label>
                                <select id="acc_cargar" name="acc_cargar" class="select2 form-control">
                                    <option value="0">Seleccione</option>
                                    <option value="1">Proyecto</option>
                                    <option value="2">Acción Centralizada</option>
                                </select>
                            </div>
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
                                <input id="nombre_proyecto" name="nombre_proyecto" type="text" class="form-control">
                            </div>

                            <div class="form-group mt-3 col-3">
                                <label>Objeto de Contratación</label>
                                <input type="text" class="form-control" id="id_obj_comercial" name="id_obj_comercial" value="Servicio" readonly>
                            </div>
                            <!-- Carga de Informacion de IFF -->
                            <div class="col-12">
                                <hr style="border-top: 1px solid rgba(0, 0, 0, 0.39);">
                            </div>
                            <div class="col-12 text-center">
                                <h4 style="color:red;">Información Items Fuente Financiamiento (IFF)</h4>
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
                            <div class="form-group col-3">
                                <label>Estado</label>
                                <select id="id_estado" name="id_estado" class="form-control estado" multiple="multiple">
                                    <option value="0">Seleccione</option>
                                    <?php foreach ($estados as $data): ?>
                                        <option value="<?=$data['descedo']?>"><?=$data['descedo']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label>Fuente de Financiamiento</label>
                                <select id="fuente_financiamiento" name="fuente_financiamiento" class="form-control ff">
                                    <option value="0" selected="selected">Seleccione</option>
                                    <?php foreach ($fuente as $data): ?>
                                        <option value="<?=$data['id_fuente_financiamiento']?>/<?=$data['desc_fuente_financiamiento']?>"><?=$data['desc_fuente_financiamiento']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
							<div id="desc_ff" class="form-group col-3" style="display:none">
                                <label>Descripcion<b style="color:red">*</b></label>
                                <input id="descripcion_ff" name="descripcion_ff" type="text" class="form-control">
                            </div>
                            <div class="form-group col-3">
                                <label>Porcentaje<b style="color:red">*</b></label>
                                    <input id="porcentaje" onblur="porc();" id="porcentaje" type="text" class="form-control">
                            </div>
                            <div class="col-12">
                                <h5 class="text-center"><b style="color:red;">NOTA:</b> Debe llenar todos lo items para llenar la tabla.</h5>
                            </div>
                            <div class="col-5"></div>
                            <div class="col-7 mt-4">
                                <button type="button" onclick="agregar_ff(this);" class="btn btn-lg btn-default" id="ueba">
                                    Agregar <b>IFF</b>
                                </button>
                            </div>
                            <div class="table-responsive mt-3">
                                <h5 class="text-center"><b style="color:red;">NOTA:</b> La tabla debe tener al menos un registro agregado, para proceder con la solicitud.</h5>
                                <table id="target_ff" class="table table-bordered table-hover">
                                    <thead style="background:#e4e7e8">
                                        <tr class="text-center">
                                            <th>Codigo Part. Presupuestaria</th>
                                            <th>Partida Presupuestaria</th>
                                            <th>Estado</th>
                                            <th>Fuente de Financiamiento</th>
											<th></th>
                                            <th>%</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                            <!-- Cargar Informacion de IP -->
                            <div class="col-12">
                                <hr style="border-top: 1px solid rgba(0, 0, 0, 0.39);">
                            </div>
                            <div class="col-12 mt-2 text-center">
                                <h4 style="color:red;">Información Items Productos (IP)</h4>
                            </div>
                            <div class="form-group col-12">

                                <div class="row">
                                    <div class="col-4">
                                        <label>Busqueda para CCNU <i style="color: red;" title="Para llenar el campo de CCNU debe ingresar una palabra clave, esto le ayudara con la busqueda" class="fas fa-question-circle"></i></label>
                                        <input title="Debe ingresar una palabra para realizar la busqueda" type="text" class="form-control" name="ccnu" id="ccnu" onKeyUp="this.value=this.value.toUpperCase();" onblur="buscar_ccnnu();">
                                    </div>
                                    <div class="col-8">
                                        <label>CCNU</label>
                                        <select  name="id_ccnu" id="id_ccnu" title="Depende de la palabra ingresada en el campo anterior, se listaran las opciones." class="form-control">
                                            <option value="0">Seleccione</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-4">
                                <label>Rango de Fecha</label>
                                    <div class="input-group input-daterange">
                                        <input type="text" class="form-control" id="fecha_desde" onchange="verif_d();" onblur="habilitar_trim();" name="start" placeholder="Desde" />
                                        <span class="input-group-addon">-</span>
                                        <input type="text" class="form-control"  id="fecha_hasta" onchange="verif_h();" onblur="habilitar_trim();" name="end" placeholder="Hasta" />
                                    </div>
                            </div>
                            <div class="form-group col-6">
                                <label>Especificación <b style="color:red">*</b></label>
                                <input id="especificacion" type="text" class="form-control">
                            </div>
                            <div class="form-group col-2">
                                <label>Unidad de Medida <b style="color:red">*</b></label><br>
                                <select  id="id_unidad_medida" name="id_unidad_medida" class="form-control">
                                    <option value="">SELECCIONE</option>
                                    <?php foreach ($unid as $data): ?>
                                        <option value="<?=$data['id_unidad_medida']?>/<?=$data['desc_unidad_medida']?>"><?=$data['desc_unidad_medida']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="card card-outline-danger">
                                    <h5 class="mt-3 text-center"><b>Distribución Porcentual de la Ejecución Trimestral</b> <i style="color: red;" title="Para ingresar los datos correspondientes a cada trimestre, debe ingresar un Rango de Fecha." class="fas fa-question-circle"></i></h5>
                                    <div class="row mt-3">
                                        <div class="form-group col-2">
                                            <label>I<b style="color:red">*</b></label>
                                            <input id="I" name="I" type="text" onblur="calculo();" value="0" class="form-control" onkeypress="return valideKey(event);" disabled>
                                        </div>
                                        <div class="form-group col-2">
                                            <label>II<b style="color:red">*</b></label>
                                            <input id="II" name="II" type="text" onblur="calculo();" value="0" class="form-control"  onkeypress="return valideKey(event);" disabled>
                                        </div>
                                        <div class="form-group col-2">
                                            <label>III<b style="color:red">*</b></label>
                                            <input id="III" name="III" type="text" onblur="calculo();" value="0" class="form-control"  onkeypress="return valideKey(event);" disabled>
                                        </div>
                                        <div class="form-group col-2">
                                            <label>IV<b style="color:red">*</b></label>
                                            <input id="IV" name="IV" type="text" onblur="calculo();" value="0" class="form-control"  onkeypress="return valideKey(event);" disabled>
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Cantd. Total Distribuir <b style="color:red">*</b></label>
                                            <input id="cant_total_distribuir" value="100" onblur="calculo();" name="cant_total_distribuir" type="number" class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-4">
                                <label>Precio Total <b style="color:red">*</b></label>
                                <input id="precio_total"  name="precio_total" type="text" onclick="cant_total();" onblur="calculo();" class="form-control">
                            </div>
                            <div class="form-group col-2">
                                <label>Alícuota IVA Estimado<b style="color:red">*</b></label><br>
                                <select name="id_alicuota_iva" id="id_alicuota_iva" onchange="calculo();" class="form-control">
                                    <option value="">SELECCIONE</option>
                                    <?php foreach ($iva as $data): ?>
                                        <option value="<?=$data['desc_alicuota_iva']?>/<?=$data['desc_porcentaj']?>"><?=$data['desc_porcentaj']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label>Monto IVA Estimado<b style="color:red">*</b></label>
                                <input id="iva_estimado" name="iva_estimado" type="text" class="form-control" disabled>
                            </div>
                            <div class="form-group col-3">
                                <label>Monto total Estimado<b style="color:red">*</b></label>
                                <input id="monto_estimado" name="monto_estimado"  type="text" class="form-control" disabled>
                            </div>
                            <div class="col-12">
                                <hr style="border-top: 1px solid rgba(0, 0, 0, 0.39);">
                            </div>
                            <div class="form-group col-2">
                                <label>Estimado I Trimestre</b></label>
                                <input id="estimado_i" name="estimado_i" type="text" class="form-control" disabled>
                            </div>
                            <div class="form-group col-2">
                                <label>Estimado II Trimestre</label>
                                <input id="estimado_ii" name="estimado_ii" type="text" class="form-control" disabled>
                            </div>
                            <div class="form-group col-2">
                                <label>Estimado III Trimestre</label>
                                <input id="estimado_iii" name="estimado_iii" type="text" class="form-control" disabled>
                            </div>
                            <div class="form-group col-2">
                                <label>Estimado IV Trimestre</label>
                                <input id="estimado_iV" name="estimado_iV" type="text" class="form-control" disabled>
                            </div>
                            <div class="form-group col-4">
                                <label>Estimado Total Trimestres</label>
                                <input id="estimado_total_t" name="estimado_total_t" type="text" class="form-control" disabled>
                            </div>
                            <div class="col-12">
                                <hr style="border-top: 1px solid rgba(0, 0, 0, 0.39);">
                            </div>
                            <div class="col-12">
                                <h5 class="text-center"><b style="color:red;">NOTA:</b> Debe llenar todos lo items para llenar la tabla.</h5>
                            </div>
                            <div class="col-12 text-center">
                                <button type="button" onclick="agregar_ccnu(this);" class="btn btn-lg btn-default">
                                    Agregar <b>IP</b>
                                </button>
                            </div>
                            <div class="col-12">
                                <div class="table-responsive mt-4">
                                    <h5 class="text-center">Lista de Requerimiento</h5>
                                    <h5 class="text-center"><b style="color:red;">NOTA:</b> La tabla debe tener al menos un requerimiento agregado, para proceder con la solicitud.</h5>
                                    <table id="target_req" class="table table-bordered table-hover">
                                        <thead style="background:#e4e7e8;">
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
                                <button class="btn btn-circle waves-effect btn-lg waves-circle waves-float btn-primary" type="button" id="btn_guar_1" onclick="reg_servicio();" disabled>Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?=base_url()?>/js/programacion.js"></script>
<script src="<?=base_url()?>/js/calculos.js"></script>
<script src="<?=base_url()?>/js/servicio/agregar_ff.js"></script>
<script src="<?=base_url()?>/js/servicio/agregar_ip.js"></script>
<script src="<?=base_url()?>/js/servicio/registro.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.estado').select2();
    });
</script>
<script type="text/javascript">
function valideKey(evt){
   var code = (evt.which) ? evt.which : evt.keyCode;
    if(code==8) { // backspace.
        return true;
    }else if(code>=48 && code<=57) { // is a number.
        return true;
    }else{ // other keys.
        return false;
    }
}
</script>
