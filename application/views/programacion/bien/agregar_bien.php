<div class="sidebar-bg"></div>
<div id="content" class="content">
	<div class="col-lg-12">
        <div class="row">
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <form id="reg_bien" method="POST" class="form-horizontal">
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
                                <input type="text" class="form-control" id="id_obj_comercial" name="id_obj_comercial" value="Bienes" readonly>
                            </div>
                            <div class="col-12">
                                <hr style="border-top: 1px solid rgba(0, 0, 0, 0.39);">
                            </div>
                            <div class="col-12 text-center">
                                <h4 style="color:red;">Información Items Fuente Financiamiento (IFF)</h4>
                            </div>
                            <div class="form-group col-12">
                                <label>Partida Presupuestaria</label><br>
                                    <!-- <input type="hidden" name="par_presupuestaria" id="par_presupuestaria"> -->
                                    <select style="width: 100%;" id="par_presupuestaria" required name="par_presupuestaria" class="default-select2 form-control">
                                        <option value="0">Seleccione</option>
                                        <?php foreach ($part_pres as $data): ?>
                                            <option value="<?=$data['id_partida_presupuestaria']?>/<?=$data['desc_partida_presupuestaria']?>/<?=$data['codigopartida_presupuestaria']?>"><?=$data['codigopartida_presupuestaria']?>/<?=$data['desc_partida_presupuestaria']?></option>
                                        <?php endforeach; ?>
                                    </select>
                            </div>
                            <hr style="border-top: 1px solid rgba(0, 0, 0, 0.17);">
                            <div class="form-group col-6">
                                <label>Estado</label><br>
                                <select style="width: 100%;" id="id_estado" name="id_estado" class="default-select2 form-control" multiple="multiple">
                                    <option value="0">Seleccione</option>
                                    <?php foreach ($estados as $data): ?>
                                        <option value="<?=$data['descedo']?>"><?=$data['descedo']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label>Fuente de Financiamiento</label>
                                <select style="width: 100%;" id="fuente_financiamiento" name="fuente_financiamiento" class="form-control">
                                    <option value="0">Seleccione</option>
                                    <?php foreach ($fuente as $data): ?>
                                        <option value="<?=$data['id_fuente_financiamiento']?>/<?=$data['desc_fuente_financiamiento']?>"><?=$data['desc_fuente_financiamiento']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label>Porcentaje<b style="color:red">*</b></label>
                                <input id="porcentaje" name="porcentaje" onblur="porc();" type="text" class="form-control">
                            </div>

                            <div class="col-12">
                                <h5 class="text-center"><b style="color:red;">NOTA:</b> Debe llenar todos lo items para llenar la tabla.</h5>
                            </div>
                            <div class="col-5"></div>
                            <div class="col-7 mt-4">
                                <button type="button" onclick="agregar_ff(this);" class="btn btn-lg btn-default" id="prueba2">
                                    Agregar <b>IFF</b>
                                </button>
                            </div>
                            <div class="table-responsive mt-3">
                                <h5 class="text-center"><b style="color:red;">NOTA:</b> La tabla debe tener al menos un registro agregado, para proceder con la solicitud.</h5>
                                <table id="target_acc_ff" class="table table-bordered table-hover">
                                    <thead style="background:#e4e7e8;">
                                        <tr class="text-center">
                                            <th>Codigo Part. Presupuestaria</th>
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?=base_url()?>/js/programacion.js"></script>
<script src="<?=base_url()?>/js/calculos.js"></script>
<script src="<?=base_url()?>/js/bien/agregar_ff.js"></script>
