
<div class="sidebar-bg"></div>
<div id="content" class="content">
    <div class="row">
		<div class="col-lg-12">
            <div  class="panel panel-inverse" >
                <button onclick="location.href='<?php echo base_url()?>index.php/Programacion/add'" type="button" class="btn btn-lg btn-primary mt-2 mb-2" name="button">Agregar Programación</button>
                <div class="col-12">
                    <h4> <b>Nombre Órgano / Ente: <?=$des_unidad?></b></h4>
                    <h4><b>RIF.: <?=$rif?> <br> Código ONAPRE: <?=$codigo_onapre?></b></h4>
                    <h4> <b>Progamación del año: <?=$fecha?></b></h4>
                </div>

                <div class="col-12">
                    <h3 class="text-center">Proyectos Registrado</h3>
                    <table class="table table-hover">
                        <thead style="background:#4caa9d;">
                            <tr class="text-center">
                                <th>Id Programacion</th>
                                <th>Nombre Programación</th>
                                <th>Fecha</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($ver_proyectos as $lista):?>
                            <tr class="odd gradeX" style="text-align:center">
                                <td><?=$lista['id_programacion']?> </td>
                                <td><?=$lista['nombre_programacion']?> </td>
                                <td><?=$lista['fecha']?> </td>
                                <td class="center">
                                    <a href="<?php echo base_url();?>index.php/programacion/ver_programacion_proy?id=<?php echo $lista['id_programacion'];?>"
                                        class="button">
                                        <i class="fas fa-lg fa-fw fa-eye" style="color: green;"></i>
                                    <a/>
                                    <a href="<?php echo base_url();?>index.php/cms/listar_datos_present_edit?id=<?php echo $lista['id_programacion'];?>"
                                        class="button" id="editar" onclick="editar_presentacion"><i class="fas fa-lg fa-fw  fa-edit"></i><a />

                                    <a href="<?php echo base_url();?>index.php/cms/eliminar_presentacion?id=<?php echo $lista['id_programacion'];?>"
                                        class="button"><i class="fas fa-lg fa-fw  fa-trash-alt" style="color:red"></i><a />
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
                <hr style=" border-top: 1px solid rgba(0, 0, 0, 0.17);">
                <div class="col-12 mt-4">
                    <h3 class="text-center">Acción Centralizada Registradas</h3>
                    <table class="table table-hover">
                        <thead style="background:#4caa9d;">
                            <tr class="text-center">
                                <th>Id Programacion</th>
                                <th>Acción Centralizada</th>
                                <th>Fecha</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($ver_acc_centralizada as $lista):?>
                            <tr class="odd gradeX" style="text-align:center">
                                <td><?=$lista['id_programacion']?> </td>
                                <td><?=$lista['desc_accion_centralizada']?> </td>
                                <td><?=$lista['fecha']?> </td>
                                <td class="center">
                                    <a href="<?php echo base_url();?>index.php/programacion/ver_programacion_acc?id=<?php echo $lista['id_programacion'];?>"
                                        class="button" id="editar" onclick="editar_presentacion">
                                        <i class="fas fa-lg fa-fw fa-eye" style="color: green;"></i>
                                    <a/>
                                    <a class="button"><i class="fas fa-lg fa-fw fa-edit" style="color:blue"></i><a />
                                    <a class="button"><i class="fas fa-lg fa-fw fa-trash-alt" style="color:red"></i><a />
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
<?php if ($this->session->flashdata('sa-success2')) { ?>
    <div hidden id="sa-success2"> <?= $this->session->flashdata('sa-success2') ?> </div>
<?php } ?>
