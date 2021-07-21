<style media="screen">
@media print {
        .non-printable, .fancybox-outer { display: none; }
        .printable, #printDiv {
          display: block;
          font-size: 26pt;
        }
        }
</style>
<div class="sidebar-bg"></div>
<div id="content" class="content">
    <div class="row">
        <div class="col-3"></div>
      <div class="col-3 mb-3">
        <a class="btn btn-circle waves-effect btn-lg waves-circle waves-float btn-primary" href="javascript:history.back()"> Volver</a>
      </div>
        <div class="col-3 text-center">
            <!-- <button class="btn btn-default mt-1 mb-1" type="button" onclick="printDiv();">Descargar Registro</button> -->
            <button class="btn btn-circle waves-effect btn-lg waves-circle waves-float btn-primary" onclick="printContents('imp1');" >Imprimir</button>
        </div>
		  <div class="col-lg-12" id="imp1">
              <div class="col-12 text-center">
                  <img class="mb-2" src="<?php echo base_url('Plantilla/img/membretesnc.png'); ?>" height="90"  />
              </div>

            <div class="panel panel-inverse">
                <br>
                <div class="col-6">
                    <h4>Identificador de Evaluación de Desempeño: <?=$eval_ind['id']?></h4>
                </div>
                <?php if ($eval_ind['id_estatus'] == 3): ?>
                    <div class="col-6">
                        <h4>Estatus de Evaluación de Desempeño: <b style="color:red;"><?=$eval_ind['descripcion']?></b> </h4>
                    </div>
                <?php endif; ?>
                <?php if ($eval_ind['id_estatus'] != 3): ?>
                    <div class="col-6">
                        <h4>Estatus de Evaluación de Desempeño: <b><?=$eval_ind['descripcion']?></b> </h4>
                    </div>
                <?php endif; ?>
                <div class="col-12">
                    <h4>Fecha de Registro de la Evaluación de Desempeño: <?=$fecha_reg_eval?></h4>
                </div>
                <div class="panel-heading">
                    <h2 style="font-size: 16px;" class="panel-title text-center"><b>Datos del Contratante</b></h2>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="form-group col-2">
                            <h5><b>Rif de Contratante:</b></h5>
                            <h5><?=$eval_ind['rif_organo']?></h5>
                        </div>
                        <div class="form-group col-10">
                            <h5><b>Nombre Completo:</b></h5>
                            <h5><?=$eval_ind['organo']?></h5>
                        </div>
                    </div>
                </div>
                <div class="panel-heading">
                    <h2 style="font-size: 16px;" class="panel-title text-center"><b>Datos del Contratista Adjudicado</b></h2>
                </div>
			    <div class="panel-body">
                    <div class="row">
                        <div class="form-group col-2">
                            <h5><b>Rif del Contratista:</b></h5>
                            <h5><?=$eval_ind['rif_contrat']?></h5>
                        </div>
                        <div class="form-group col-4">
                            <h5><b>Nombre completo:</b></h5>
                            <h5><?=$eval_ind['nom_comer']?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Estado:</b></h5>
                            <h5><?=$eval_ind['est_contratista']?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Municipio:</b></h5>
                            <h5><?=$eval_ind['mun_contratista']?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Ciudad:</b></h5>
                            <h5><?=$eval_ind['ciudad']?></h5>
                        </div>
                    </div>
			    </div>
				<div class="panel-heading">
					<h5 style="font-size: 16px;" class="panel-title text-center"><b>Modalidad de la Contratación</b></h5>
				</div>
				<div class="panel-body">
                    <div class="row">
                        <div class="form-group col-7">
                            <h5><b>Procedimiento de Selección del Contratista:</b></h5>
                            <h5><?=$eval_ind['modalidad']?></h5>
                        </div>
                        <div class="form-group col-5">
                            <h5><b>Rango de Fecha - Inicio a Culminacion del Contrato:</b></h5>
                            <h5>Desde: <?=$fec_inicio_cont?> <b>/</b> Hasta: <?=$fec_fin_cont?></h5>
                        </div>
                        <div class="form-group col-12">
                            <h5><b>Supuestos del Procedimiento de la Selección del Contratista:</b></h5>
                            <h5><?=$eval_ind['sub_modalidad']?></h5>
                        </div>
                    </div>
                </div>
                <div class="panel-heading">
					<h5 style="font-size: 16px;" class="panel-title text-center"><b>Datos del Contrato</b></h5>
				</div>
				<div class="panel-body">
                    <div class="row">
                        <div class="form-group col-3">
                            <h5><b>Nro. del Procedimiento:</b></h5>
                            <h5><?=$eval_ind['nro_procedimiento']?></h5>
                        </div>
                        <div class="form-group col-5">
                            <h5><b>Nro. de contrato / Orden de Compra / Orden de Servicio:</b></h5>
                            <h5><?=$eval_ind['nro_contrato']?></h5>
                        </div>
                        <div class="form-group col-4">
                            <h5><b>Edo. donde se ejecuto el Contrato:</b></h5>
                            <h5><?=$eval_ind['estado_contrato']?></h5>
                        </div>
                        <div class="form-group col-3">
                            <h5><b>Obj. de la Contratación</b></h5>
                            <div class="col-md-12">
                                <?php if ($eval_ind['bienes'] != null): ?>
                                    <div  class="checkbox checkbox-css">
                                        <input type="checkbox" value="bienes" name="bienes" id="cssCheckbox1" checked disabled/>
                                        <label for="cssCheckbox1">Bienes</label>
                                    </div>
                                <?php endif; ?>
                                <?php if ($eval_ind['servicios'] != null): ?>
                                    <div  class="checkbox checkbox-css">
                                        <input type="checkbox" value="servicios" name="servicios" id="cssCheckbox1" checked disabled/>
                                        <label for="cssCheckbox1">Servicios</label>
                                    </div>
                                <?php endif; ?>
                                <?php if ($eval_ind['obras'] != null): ?>
                                    <div  class="checkbox checkbox-css">
                                        <input type="checkbox" value="obras" name="obras" id="cssCheckbox1" checked disabled/>
                                        <label for="cssCheckbox1">Obras</label>
                                    </div>
                                <?php endif; ?>
							</div>
                        </div>
                        <div class="form-group col-4">
                            <h5><b>Descripción de la Contratación:</b></h5>
                            <h5><?=$eval_ind['descr_contrato']?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Monto:</b></h5>
                            <h5><?=$eval_ind['monto']?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Moneda</b></h5>
                            <div class="col-md-12 col-2">
                                <?php if ($eval_ind['dolar'] != null): ?>
                                    <div  class="checkbox checkbox-css">
                                        <input type="checkbox" value="dolar" name="dolar" id="cssCheckbox1" checked disabled/>
                                        <label for="cssCheckbox1">dolar</label>
                                    </div  class="checkbox checkbox-css">
                                <?php endif; ?>
                                <?php if ($eval_ind['euro'] != null): ?>
                                    <div  class="checkbox checkbox-css">
                                        <input type="checkbox" value="bienes" name="euro" id="cssCheckbox1" checked disabled/>
                                        <label for="cssCheckbox1">Euro</label>
                                    </div>
                                <?php endif; ?>
                                <?php if ($eval_ind['petros'] != null): ?>
                                    <div  class="checkbox checkbox-css">
                                        <input type="checkbox" value="petros" name="petros" id="cssCheckbox1" checked disabled/>
                                        <label for="cssCheckbox1">Petros</label>
                                    </div>
                                <?php endif; ?>
                                <?php if ($eval_ind['bolivares'] != null): ?>
                                    <div  class="checkbox checkbox-css">
                                        <input type="checkbox" value="bolivares" name="bolivares" id="cssCheckbox1" checked disabled/>
                                        <label for="cssCheckbox1">Bolivares</label>
                                    </div>
                                <?php endif; ?>
                                <?php if ($eval_ind['otro'] != null): ?>
                                    <div  class="checkbox checkbox-css">
                                        <input type="checkbox" value="bolivares" name="bolivares" id="cssCheckbox1" checked disabled/>
                                        <label for="cssCheckbox1">Otro</label>

                                        <h5 class="mt-3"><b>Especifique:</b></h5>
                                        <h5><?=$eval_ind['mod_otro']?></h5>
                                    </div>
                                <?php endif; ?>
							</div>
                        </div>
                    </div>
                </div>
                <div class="panel-heading">
					<h5 style="font-size: 16px;" class="panel-title text-center"><b>Tabla de Evaluación del Contratista</b></h5>
				</div>
				<div class="panel-body">
                    <div class="row">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Criterio</th>
                                    <th>Descripción</th>
                                    <th>Peso</th>
                                    <th>Clasificación</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Calidad</td>
                                    <td>Mide el cumplimiento de los parámetros técnicos y de calidad exigidos: disposición del personal capacitado/calificado, disponibilidad oportuna y confiable de equipos, instrumentos e infraestructura adecuados, procura (compra, manejo y almacenaje), respuesta eficiente a reclamos técnicos/calidad, organización e implantación de mejoras</td>
                                    <td><h5 class="text-center mt-3">25</h5></td>
                                    <td>
                                        <?php if ($eval_ind['calidad'] == 1): ?>
                                            <h5 class="text-center mt-3">Si</h5>
                                        <?php endif; ?>
                                        <?php if ($eval_ind['calidad'] == 0): ?>
                                            <h5 class="text-center mt-3">No</h5>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <h5 class="text-center mt-3"><?=$calc_cald?></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Responsabilidad</td>
                                    <td>Cumplimiento de leyes, decretos y clausulas relativos al contrato, respuestas a demandas o reclamos de proveedores/subcontratistas, cumplimiento y respuesta de requisitos como solvencia laboral, administración de vacaciones, reclamos laborales, paros, demñas obligraciones legales y contractuales</td>
                                    <td><h5 class="text-center mt-3">25</h5></td>
                                    <td>
                                        <?php if ($eval_ind['responsabilidad'] == 1): ?>
                                            <h5 class="text-center mt-3">Si</h5>
                                        <?php endif; ?>
                                        <?php if ($eval_ind['responsabilidad'] == 0): ?>
                                            <h5 class="text-center mt-3">No</h5>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <h5 class="text-center mt-3"><?=$calc_responsabilidad?></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Conocimiento del trabajo</td>
                                    <td>Cumplimiento de practicas de trabajo seguro, programas de inspección SHA, herramientas y equipos, condiciones del area de trabajo adecuadas, adiestramiento y motivación al personal, SHA de contratistas, respuesta y control de emergencias entre otras, aplicacion de las normativas técnicas.</td>
                                    <td><h5 class="text-center mt-3">25</h5></td>
                                    <td>
                                        <?php if ($eval_ind['conocimiento'] == 1): ?>
                                            <h5 class="text-center mt-3">Si</h5>
                                        <?php endif; ?>
                                        <?php if ($eval_ind['conocimiento'] == 0): ?>
                                            <h5 class="text-center mt-3">No</h5>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <h5 class="text-center mt-3"><?=$calc_conocimiento?></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Oportunidad (Plazos Establecidos)</td>
                                    <td>Corresponde al periodo establecido en el contrato para la ejecución de la obra, prestación del servicio o suministro de bienes.</td>
                                    <td><h5 class="text-center mt-3">25</h5></td>
                                    <td>
                                        <?php if ($eval_ind['oportunidad'] == 1): ?>
                                            <h5 class="text-center mt-3">Si</h5>
                                        <?php endif; ?>
                                        <?php if ($eval_ind['oportunidad'] == 0): ?>
                                            <h5 class="text-center mt-3">No</h5>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <h5 class="text-center mt-3"><?=$calc_oportunidad?></h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="col-5"></div>
                        <div class="col-4" class="form-control">
                            <h5><b>Puntuaje Total de la Clasificación:</b> <?=$eval_ind['total_calif']?></h5>
                        </div>
                        <div class="col-3" class="form-control">
                            <h5><b>Calificacion:</b> <?=$eval_ind['calificacion']?></h4>
                        </div>
                    </div>
                </div>
                <div class="panel-heading">
					<h5 style="font-size: 16px;" class="panel-title text-center"><b>Información de Notificación al Contratista</b></h5>
				</div>
                <div class="panel-body">
                    <div class="row">
                        <!-- <div class="form-group col-4">
                            <h5><b>¿Fue notificado al contratista?:</b></h5>
                            <?php if ($eval_ind['notf_cont'] == 1): ?>
                                <div>
                                    <h5>Sí, fué notificado al contratista</h5>
                                </div>
                            <?php endif; ?>
                            <?php if ($eval_ind['notf_cont'] == 2): ?>
                                <div>
                                    <h5>No, no fué notificado al contratista</h5>
                                </div>
                            <?php endif; ?>
                        </div> -->
                        <div class="form-group col-6">
                            <h5><b>Fecha de la Notificación:</b></h5>
                            <h5><?=$eval_ind['fecha_not']?></h5>
                        </div>
                        <div class="form-group col-6">
                            <h5><b>Medio de envio de la Notificación:</b></h5>
                            <?php if ($eval_ind['medio'] == 1): ?>
                                <div>
                                    <h5>FAX</h5>
                                </div>
                            <?php endif; ?>
                            <?php if ($eval_ind['medio'] == 2): ?>
                                <div>
                                    <h5>Correo Electronico</h5>
                                </div>
                            <?php endif; ?>
                            <?php if ($eval_ind['medio'] == 3): ?>
                                <div>
                                    <h5>Oficio / Memo / Notificación</h5>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group col-6">
                            <h5><b>Nro. de Oficio / Fax / Correo Electronico / Otro:</b></h5>
                            <h5><?=$eval_ind['nro_oc_os']?></h5>
                        </div>
                        <div class="form-group col-6">
                            <h5><b>Acuse de Recibido</b></h5>
                            <?php if ($tipo_img == 'pdf'): ?>
                            <div class="image-inner">
                                <embed type="application/pdf" style="width: 100%; height: 300px;" src="<?=base_url()?>imagenes/<?=$eval_ind['fileimagen'] ?>">
                            </div>
                            <?php endif; ?>
                            <?php if ($tipo_img != 'pdf'): ?>
                            <div class="image-inner">
        						<a href="<?=base_url()?>imagenes/<?=$eval_ind['fileimagen'] ?>" data-lightbox="gallery-group-1">
        							<img style="width: 500px;" src="<?=base_url()?>imagenes/<?=$eval_ind['fileimagen'] ?>" alt="" />
        						</a>
        					</div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function printContents(imp1) {
    let printElement = document.getElementById(imp1);
      var printWindow = window.open('', 'PRINT');
      printWindow.document.write(document.documentElement.innerHTML);
      setTimeout(() => { // Needed for large documents
        printWindow.document.body.style.margin = '0 0';
        printWindow.document.body.innerHTML = printElement.outerHTML;
        printWindow.document.close(); // necessary for IE >= 10
        printWindow.focus(); // necessary for IE >= 10*/
        printWindow.print();
        printWindow.close();
      }, 1000)
}
</script>
