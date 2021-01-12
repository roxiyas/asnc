<div class="sidebar-bg"></div>
<div id="content" class="content">
    <div class="row">
		<div class="col-lg-12">
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
                                        <input type="hidden" id="id_programacion" name="id_programacion" value="<?=$id_programacion?>">
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <?php foreach($proyectos as $proyecto):?>
                        <div class="col-9 mt-2 form-group">
                            <label>Proyecto <b style="color:red">*</b></label>
                            <input value="<?=$proyecto['nombre_proyecto']?>" type="text" class="form-control" disabled>
                            <input type="hidden" name="id_proyecto" id="id_proyecto" value="<?=$proyecto['id_p_proyecto']?>">
                        </div>
                        <div class="col-3 mt-2 form-group">
                            <label>Objeto Comercial <b style="color:red">*</b></label>
                            <input value="<?=$proyecto['id_obj_comercial']?>" type="text" class="form-control" disabled>
                        </div>
                        <div class="col-12 text-center">
                            <h4 style="color:red;">Información Items Fuente Financiamiento (IFF)</h4>
                        </div>
                        <table id="target_ff" class="table table-bordered table-hover">
                            <thead style="background:#e4e7e8;">
                                <tr class="text-center">
                                    <th>Código Part. Presupuestaria</th>
                                    <th>Partida Presupuestaria</th>
                                    <th>Estado</th>
                                    <th>Fuente de Financiamiento</th>
                                    <th>%</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <div class="col-12 mt-2 text-center">
                            <h4 style="color:red;">Información Items Productos (IP)</h4>
                        </div>
                        <table id="target_req" class="table table-bordered table-hover">
                            <thead style="background:#e4e7e8;">
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
                            </tbody>
                        </table>
                        <div class="col-12">
                            <hr style="border-top: 1px solid rgba(0, 0, 0, 0.39);">
                        </div>
                        <?php endforeach;?>
                    </div>
                    <div class="col-12 text-center mt-3">
                        <a class="btn btn-circle waves-effect btn-lg waves-circle waves-float btn-primary" href="javascript:history.back()"> Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
if ($('#id_proyecto').val().length != " "){//FUNCION EN DONDE SE CARGA LA TABLA DE IP
    var id_proyecto = $('#id_proyecto').val();
    console.log(id_proyecto);
}
</script>
