<div class="sidebar-bg"></div>
<div id="content" class="content">
    <div class="row">
    	<div class="col-lg-12">
            <form action="<?=base_url()?>index.php/programacion/editar_programacion_acc_b" method="POST" class="form-horizontal">
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
                                    <input type="hidden" id="id_programacion_acc_b" name="id_programacion_acc_b" value="<?=$id_programacion?>/<?=$id_p_acc_centralizada?>">
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <?php foreach($inf_1_acc as $inf_1_acc):?><?php endforeach;?>
                    <div class="col-6 mt-3 form-group" id="acc_acc">
                        <label>Acción Centralizada<b style="color:red">*</b></label><br>
                        <select style="width: 100%;"  name="id_accion_centralizada_acc" id="id_accion_centralizada_acc" class="default-select2 form-control">
                            <option value="<?=$inf_1_acc['id_accion_centralizada']?>"><?=$inf_1_acc['desc_accion_centralizada']?></option>
                            <?php foreach ($acc_cent as $data): ?>
                            <option value="<?=$data['id_accion_centralizada']?>"><?=$data['desc_accion_centralizada']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group mt-3 col-6">
                        <label>Objeto Comercial</label><br>
                        <input type="hidden" id="id_obj_comercial_acc" name="id_obj_comercial_acc" value="<?=$inf_1_acc['id_obj_comercial']?>">
                        <input type="text" id="desc_objeto_contrata" name="desc_objeto_contrata" value="<?=$inf_1_acc['desc_objeto_contrata']?>" class="form-control">
                    </div>
                    <div class="form-group col-12">
                        <label>Partida Presupuestaria</label><br>
                            <input type="hidden" name="par_presupuestaria_acc_ff" id="par_presupuestaria_acc_ff">
                            <select style="width: 100%;" id="par_presupuestaria_acc"  name="par_presupuestaria_acc" class="default-select2 form-control">
                                <option value="0">Seleccione</option>
                                <?php foreach ($part_pres as $data): ?>
                                    <option value="<?=$data['id_partida_presupuestaria']?>/<?=$data['desc_partida_presupuestaria']?>/<?=$data['codigopartida_presupuestaria']?>"><?=$data['codigopartida_presupuestaria']?>/<?=$data['desc_partida_presupuestaria']?></option>
                                <?php endforeach; ?>
                            </select>
                    </div>
                    <hr style="border-top: 1px solid rgba(0, 0, 0, 0.17);">
                    <div class="form-group col-6">
                        <label>Estado</label><br>
                        <select style="width: 100%;" id="id_estado_acc" name="id_estado_acc" class="default-select2 form-control" multiple="multiple" >
                            <option value="0">Seleccione</option>
                            <?php foreach ($estados as $data): ?>
                                <option value="<?=$data['descripcion']?>"><?=$data['descripcion']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group col-3">
                        <label>Fuente de Financiamiento</label>
                        <select style="width: 100%;" id="fuente_financiamiento_acc" name="fuente_financiamiento_acc" class="default-select2 form-control" >
                            <option value="0">Seleccione</option>
                            <?php foreach ($fuente as $data): ?>
                                <option value="<?=$data['id_fuente_financiamiento']?>/<?=$data['desc_fuente_financiamiento']?>"><?=$data['desc_fuente_financiamiento']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group col-3">
                        <label>Porcentaje<b style="color:red">*</b></label>
                        <input id="porcentaje_acc" type="text" class="form-control" >
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
                    <div class="col-11" style="margin-left: 40px;">
                        <div class="table-responsive mt-3">
                            <h5 class="text-center"><b style="color:red;">NOTA:</b> La tabla debe tener al menos un registro agregado, para proceder con la solicitud.</h5>
                            <table id="target_acc_ff" class="table table-bordered table-hover">
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
                                <tbody></tbody>
                            </table>
                        </div>
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
                        <input id="especificacion_acc" type="text" class="form-control" >
                    </div>
                    <div class="form-group col-6">
                        <label>Unidad de Medida <b style="color:red">*</b></label><br>
                        <select  style="width: 100%;" id="id_unidad_medida_acc" class="form-control default-select2">
                            <option value="">SELECCIONE</option>
                            <?php foreach ($unid as $data): ?>
                                <option value="<?=$data['id_unidad_medida']?>/<?=$data['desc_unidad_medida']?>"><?=$data['desc_unidad_medida']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group col-2">
                        <label>Cantidad<b style="color:red">*</b></label>
                        <input id="cantidad_acc" name="cantidad_acc" onblur="calcular_bienes();"  type="number" class="form-control">
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
                                    <th>Cantidad</th>
                                    <th>I</th>
                                    <th>II</th>
                                    <th>III</th>
                                    <th>IV</th>
                                    <th>Total a Distrib.</th>
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
<script src="<?=base_url()?>/js/llenar_editar_acc_b.js"></script>
<script src="<?=base_url()?>/js/agregar_acc_centralizada.js"></script>
<script src="<?=base_url()?>/js/agregar_acc_centralizada_ff.js"></script>

<script src="<?=base_url()?>/js/calculos.js"></script>
<script src="<?=base_url()?>/js/calculos2.js"></script>
<script src="<?=base_url()?>/js/calculos3.js"></script>
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
