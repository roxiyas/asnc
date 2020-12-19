<div class="sidebar-bg"></div>
<div id="content" class="content">
    <div class="row">
		<div class="col-lg-12">
			<div class="panel panel-inverse" data-sortable-id="form-validation-1">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-12">
                            <h4> <b>Nombre Órgano / Ente: <?=$des_unidad?></b></h4>
                            <h4><b>RIF.: <?=$rif?> <br> Código ONAPRE: <?=$codigo_onapre?></b></h4>
                        </div>
                         <?php foreach($inf_1_acc as $inf_1):?><?php endforeach;?>
                        <div class="col-9 mt-2 form-group">
                            <label>Acción Centralizada <b style="color:red">*</b></label>
                            <input value="<?=$inf_1['desc_accion_centralizada']?>" type="text" class="form-control" disabled>
                        </div>
                        <div class="form-group mt-2  col-3">
                            <label>Objeto Comercial</label>
                            <input value="<?=$inf_1['desc_objeto_contrata']?>" type="text" class="form-control" disabled>
                        </div>
                        <hr style="border-top: 1px solid rgba(0, 0, 0, 0.17);">
                        <div class="table-responsive mt-3">
                            <h5 class="text-center">Programación Anual.</h5>
                            <table id="target_ff" class="table table-bordered table-hover">
                                <thead style="background:#4caa9d;">
                                    <tr class="text-center">
                                        <th>Código Part. Presupuestaria</th>
                                        <th>Partida Presupuestaria</th>
                                        <th>Estado</th>
                                        <th>Fuente de Financiamiento</th>
                                        <th>%</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($inf_2_acc as $inf_2):?>
                                        <tr class="odd gradeX" style="text-align:center">
                                            <td ><?=$inf_2['codigopartida_presupuestaria']?></td>
                                            <td><?=$inf_2['desc_partida_presupuestaria']?></td>
                                            <td><?=$inf_2['id_estado']?></td>
                                            <td><?=$inf_2['desc_fuente_financiamiento']?></td>
                                            <td><?=$inf_2['porcentaje']?></td>
                                        </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                        <hr style="border-top: 1px solid rgba(0, 0, 0, 0.17);">
                        <div class="table-responsive mt-4">
                            <h5 class="text-center">Items de la Programación.</h5>
                            <table id="target_req" class="table table-bordered table-hover">
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
                                        <th>Costo Unitario</th>
                                        <th>Precio Total Est.</th>
                                        <th>IVA Estimado</th>
                                        <th>Monto Iva Est.</th>
                                        <th>Monto Total Est.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($inf_3_acc as $inf_3):?>
                                        <tr class="odd gradeX" style="text-align:center">
                                            <td><?=$inf_3['codigopartida_presupuestaria']?></td>
                                            <td><?=$inf_3['desc_ccnu']?></td>
                                            <td><?=$inf_3['especificacion']?></td>
                                            <td><?=$inf_3['desc_unidad_medida']?></td>
                                            <td><?=$inf_3['i']?></td>
                                            <td><?=$inf_3['ii']?></td>
                                            <td><?=$inf_3['iii']?></td>
                                            <td><?=$inf_3['iv']?></td>
                                            <td><?=$inf_3['costo_unitario']?></td>
                                            <td><?=$inf_3['precio_total']?></td>
                                            <td><?=$inf_3['alicuota_iva']?></td>
                                            <td><?=$inf_3['iva_estimado']?></td>
                                            <td><?=$inf_3['monto_estimado']?></td>
                                        </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-3">
                        <button class="btn btn-circle waves-effect btn-lg waves-circle waves-float btn-primary" type="submit" onclick="location.href='<?=base_url()?>index.php/Programacion'" name="button">Volver</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
