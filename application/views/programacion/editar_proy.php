<div class="sidebar-bg"></div>
<div id="content" class="content">
    <div class="row">
    	<div class="col-lg-12">
            <form action="<?=base_url()?>index.php/Programacion/editar_programacion_proy" method="POST" class="form-horizontal">
    			<div class="panel panel-inverse" data-sortable-id="form-validation-1">
                    <div class="panel-body">
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
                                            <input type="hidden" id="id_programacion" name="id_programacion" value="<?=$id_programacion?>/<?=$id_p_proyecto?>">
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                             <?php foreach($inf_1 as $inf_1):?><?php endforeach;?>
                            <div class="col-9 mt-2 form-group">
                                <label>Nombre del Proyecto <b style="color:red">*</b></label>
                                <input id="nombre_proyecto_a" name="nombre_proyecto_a" value="<?=$inf_1['nombre_proyecto']?>" type="text" class="form-control" >
                            </div>
                            <div class="form-group mt-2  col-3">
                                <label>Objeto Comercial</label>
                                <select id="id_obj_comercial" name="id_obj_comercial" class="default-select2 form-control">
                                    <option value="<?=$inf_1['id_obj_comercial']?>"><?=$inf_1['desc_objeto_contrata']?></option>
                                    <?php foreach ($act_com as $data): ?>
                                        <option value="<?=$data['id_objeto_contrata']?>"><?=$data['desc_objeto_contrata']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group col-12">
                                <label>Partida Presupuestaria</label>
                                    <input type="hidden" name="par_presupuestaria_ff" id="par_presupuestaria_ff">
                                    <select id="par_presupuestaria" name="par_presupuestaria" onblur="evaluar();" class="default-select2 form-control">
                                        <option value="0">Seleccione</option>
                                        <?php foreach ($part_pres as $data): ?>
                                            <option value="<?=$data['id_partida_presupuestaria']?>/<?=$data['desc_partida_presupuestaria']?>/<?=$data['codigopartida_presupuestaria']?>"><?=$data['codigopartida_presupuestaria']?>/<?=$data['desc_partida_presupuestaria']?></option>
                                        <?php endforeach; ?>
                                    </select>
                            </div>
                            <hr style="border-top: 1px solid rgba(0, 0, 0, 0.17);">
                            <div class="form-group col-6">
                                <label>Estado</label>
                                <select id="id_estado" name="id_estado" class="default-select2 form-control" multiple="multiple">
                                    <option value="0">Seleccione</option>
                                    <?php foreach ($estados as $data): ?>
                                        <option value="<?=$data['descripcion']?>"><?=$data['descripcion']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label>Fuente de Financiamiento</label>
                                <select id="fuente_financiamiento" name="fuente_financiamiento" class="default-select2 form-control">
                                    <option value="0" selected="selected">Seleccione</option>
                                    <!-- <option selected="selected" value="0">Seleccione</option> -->
                                    <?php foreach ($fuente as $data): ?>
                                        <option value="<?=$data['id_fuente_financiamiento']?>/<?=$data['desc_fuente_financiamiento']?>"><?=$data['desc_fuente_financiamiento']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label>Porcentaje<b style="color:red">*</b></label>
                                    <input id="porcentaje" type="text" class="form-control">
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

                            <hr style="border-top: 1px solid rgba(0, 0, 0, 0.17);">
                            <div class="col-11" style="margin-left: 40px;">
                                <div class="table-responsive mt-3">
                                    <h5 class="text-center">Nota: si desea editar una fila, debe <b>Descartar</b> y volver <b>Agregar</b>.</h5>
                                    <table id="target_ff" class="table table-bordered table-hover">
                                        <thead style="background:#4caa9d;">
                                            <tr class="text-center">
                                                <th>Código Part. Presupuestaria</th>
                                                <th>Partida Presupuestaria</th>
                                                <th>Estado</th>
                                                <th>Fuente de Financiamiento</th>
                                                <th>%</th>
                                                <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody id="inf_ff">
                                        </tbody>
                                    </table>
                                </div>
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
                                <input id="fecha_desde" name="fecha_desde" type="date" class="form-control">
                            </div>
                            <div class="col-2 form-group">
                                <label>Fecha Hasta<b style="color:red">*</b></label>
                                <input id="fecha_hasta" name="fecha_hasta" type="date" class="form-control">
                            </div>
                            <div class="form-group col-6">
                                <label>Especificación <b style="color:red">*</b></label>
                                <input id="especificacion" type="text" class="form-control">
                            </div>
                            <div class="form-group col-6">
                                <label>Unidad de Medida <b style="color:red">*</b></label><br>
                                <select  id="id_unidad_medida" class="form-control default-select2">
                                    <option value="">SELECCIONE</option>
                                    <?php foreach ($unid as $data): ?>
                                        <option value="<?=$data['id_unidad_medida']?>/<?=$data['desc_unidad_medida']?>"><?=$data['desc_unidad_medida']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-2">
                                <label>I<b style="color:red">*</b></label>
                                <input id="I" name="I" type="text" onblur="calculo();" placeholder="0" class="form-control" onkeypress="return valideKey(event);">
                            </div>
                            <div class="form-group col-2">
                                <label>II<b style="color:red">*</b></label>
                                <input id="II" name="II" type="text" onblur="calculo();" placeholder="0" class="form-control"  onkeypress="return valideKey(event);">
                            </div>
                            <div class="form-group col-2">
                                <label>III<b style="color:red">*</b></label>
                                <input id="III" name="III" type="text" onblur="calculo();" placeholder="0" class="form-control"  onkeypress="return valideKey(event);">
                            </div>
                            <div class="form-group col-2">
                                <label>IV<b style="color:red">*</b></label>
                                <input id="IV" name="IV" type="text" onblur="calculo();" placeholder="0" class="form-control"  onkeypress="return valideKey(event);">
                            </div>
                            <div class="form-group col-4">
                                <label>Cantd. Total Distribuir <b style="color:red">*</b></label>
                                <input id="cant_total_distribuir" value="100" onblur="calculo();" name="cant_total_distribuir" type="number" class="form-control" disabled>
                            </div>

                            <div class="form-group col-4">
                                <label>Precio Total <b style="color:red">*</b></label>
                                <input id="precio_total"  name="precio_total" type="text" onblur="calculo();" class="form-control">
                            </div>
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
                            <div class="col-12 text-center">
                                <button type="button" onclick="agregar_ccnu(this);" style="background-color:#4caa9d;color:white;" class="btn btn-circle waves-effect btn-lg waves-circle waves-float">
                                    Agregar
                                </button>
                            </div>

                            <hr style="border-top: 1px solid rgba(0, 0, 0, 0.17);">
                            <div class="table-responsive mt-4">
                                <h5 class="text-center">Nota: si desea editar una fila, debe <b>Descartar</b> y volver <b>Agregar</b>.</h5>
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
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                        <!--////////////////////////////SEGUNDA PARTE DE LA CARGA -->
                        <div class="col-12 text-center mt-3">
                            <button class="btn btn-circle waves-effect btn-lg waves-circle waves-float btn-primary" type="submit" name="button">Guardarrrr</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="<?=base_url()?>/js/llenar_editar_proy.js"></script>
<script src="<?=base_url()?>/js/calculos.js"></script>
<script src="<?=base_url()?>/js/calculos2.js"></script>
<script src="<?=base_url()?>/js/calculos3.js"></script>
<script src="<?=base_url()?>/js/dependientes.js"></script>
<script src="<?=base_url()?>/js/agregar_proyecto.js"></script>
<script src="<?=base_url()?>/js/agregar_proyecto_ff.js"></script>

<script src="<?=base_url()?>/js/agregar_acc_centralizada_ff.js"></script>
<script src="<?=base_url()?>/js/agregar_acc_centralizada.js"></script>
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
