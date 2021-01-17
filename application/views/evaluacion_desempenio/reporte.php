<div class="sidebar-bg"></div>
<div id="content" class="content">
    <div class="row">
		<div class="col-lg-12">
            <div  class="panel panel-inverse">
                <div class="col-12">
                    <br>
                    <h3 class="text-center">Evaluaciones Registradas</h3>
                    <table id="data-table-default" class="table table-bordered table-hover">
                        <thead style="background:#e4e7e8">
                            <tr class="text-center">
                                <th>Rif contratista</th>
                                <th>Denominación Razón Social</th>
                                <th>Clasificación</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($reportes as $data):?>
                            <tr class="odd gradeX" style="text-align:center">
                                <td><?=$data['rif_contrat']?> </td>
                                <td><?=$data['nombre']?> </td>
                                <td><?=$data['calificacion']?> </td>
                                <td class="center">
                                    <a href="<?php echo base_url();?>index.php/Evaluacion_desempenio/ver_evaluacion?id=<?php echo $data['id'];?>"
                                        class="button">
                                        <i class="fas fa-lg fa-fw fa-eye" style="color: green;"></i>
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
