<div class="sidebar-bg"></div>
<div id="content" class="content">
    <div class="row">
		<div class="col-lg-12">
            <div class="panel panel-inverse">
                <div class="col-12"><br>
                    <h3 class="text-center">Evaluaciones Registradas Para Anulación</h3>
                    <table id="data-table-default" class="table table-bordered table-hover">
                        <thead style="background:#e4e7e8">
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Rif contratista</th>
                                <th>Denominación Razón Social</th>
                                <th>Clasificación</th>
                                <th>Estatus de Notificación</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($evaluaciones as $data):?>
                            <tr class="odd gradeX" style="text-align:center">
                                <td><?=$data['id']?> </td>
                                <td><?=$data['rif_contrat']?> </td>
                                <td><?=$data['nombre']?> </td>
                                <td><?=$data['calificacion']?></td>
                                <td><?=$data['descripcion']?></td>
                                <td class="center">
                                    <a title="Visualizar e Imprimir la Evaluación de Desempeño" href="<?php echo base_url();?>index.php/Evaluacion_desempenio/ver_evaluacion?id=<?php echo $data['id'];?>"
                                        class="button">
                                        <i class="fas fa-lg fa-fw fa-eye" style="color: green;"></i>
                                    <a/>
                                    <a class="button">
                                        <i title="Anulación de Desempeño" onclick="modal(<?php echo $data['id']?>);" data-toggle="modal" data-target="#exampleModal" class="fas fa-lg fa-fw fa-envelope" style="color: red;"></i>
                                    <a/>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="resgistrar_not_2" data-parsley-validate="true" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div id="resp_medi" class="form-group col-2">
                            <label>ID de Evaluación</label>
                            <input class="form-control" type="text" name="id" id="id" readonly>
                        </div>
                        <div id="resp_medi" class="form-group col-3">
                            <label>Nro. de Oficio de la Solicitud</label>
                            <input class="form-control" type="text" name="nro_expediente" id="nro_expediente">
                        </div>
                        <div id="resp_medi" class="form-group col-3">
                            <label>Fecha de Notificación</label>
                            <input type="text" class="form-control" id="datepicker-default" name="fec_solicitud" placeholder="Seleccionar Fecha"/>
                        </div>
                        <div id="resp_medi" class="form-group col-4">
                            <label>Nro. del Expediente</label>
                            <input class="form-control" type="text" name="nro_expediente" id="nro_expediente">
                        </div>
                        <div id="resp_medi" class="form-group col-8">
                            <label>Nombre y Apellido del Solicitante</label>
                            <input class="form-control" type="text" name="nom_ape_solc" id="nom_ape_solc">
                        </div>
                        <div id="resp_medi" class="form-group col-4">
                            <label>Cargo</label>
                            <input class="form-control" type="text" name="cargo" id="cargo">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>
<script src="<?=base_url()?>/js/eval_desempenio/anulacion.js"></script>
