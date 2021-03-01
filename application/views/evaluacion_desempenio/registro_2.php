<div class="sidebar-bg"></div>
<div id="content" class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                <div class="panel-heading">
				</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-4">
                            <label>Rif del Contratista a Evaluar</label>
                            <input class="form-control" type="text" name="rif_b" id="rif_b" onkeypress="may(this);" placeholder="J123456789">
                        </div>
                        <div class="col- mt-4">
                            <button type="button" class="btn btn-default" onclick="consultar_rif();" name="button"> <i class="fas fa-search"></i> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="col-lg-12" style="display: none" id="items">
            <form class="form-horizontal" id="resgistrar_eva" data-parsley-validate="true" method="POST" enctype="multipart/form-data">
    			<div class="panel panel-inverse">
    				<div class="panel-heading">
    					<h4 class="panel-title"><b>Datos del Contratista Adjudicado</b></h4>
    				</div>
    				<div class="panel-body" id="existe">
                        <div class="row">
                            <div class="form-group col-3">
                                <label>Rif del Contratista</label>
                                <input class="form-control"  type="text" name="rif_cont" id="rif_cont" readonly>
                            </div>
                            <div class="form-group col-6">
                                <label>Denominación o Razón Social</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" readonly>
                            </div>
                            <div class="form-group col-3">
                                <label>Estado</label>
                                <input type="text" name="estado" id="estado" class="form-control" readonly>
                            </div>
                            <div class="form-group col-3">
                                <label>Municipio</label>
                                <input type="text" name="municipio" id="municipio" class="form-control" readonly>
                            </div>
                            <div class="form-group col-3">
                                <label>Ciudad</label>
                                <input type="text" name="ciudad" id="ciudad" class="form-control" readonly>
                            </div>
                            <br>
                            <div class="col-11"></div>
                            <div class="col-3"></div>
                            <div id="tabla_rep" class="col-6">
                                <table class="table table-bordered table-hover">
                                    <thead style="background:#e4e7e8">
                                        <tr class="text-center">
                                            <th>Cédula</th>
                                            <th>Representante Legal</th>
                                            <th>Cargo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    </tbody>
                                </table>
                            </div>
                        </div>
				    </div>
                    <div class="panel-body" id="no_existe">
                        <div class="row">
                            <div class="form-group col-3">
                                <label>Rif del Contratista</label>
                                <input class="form-control"  type="text" name="rif_cont_n" id="rif_cont_n" placeholder="Rif">
                            </div>
                            <div class="form-group col-9">
                                <label>Nombre completo</label>
                                <input type="text" name="nombre_n" id="nombre_n" class="form-control" placeholder="Nombre completo">
                            </div>
                            <div class="form-group col-3">
                                <label>Estado</label>
                                <select class="form-control" name="id_estado_n" id="id_estado_n" onclick="llenar_municipio();listar_ciudades();">
                                    <option value="0">Seleccione</option>
                                    <?php foreach ($estados as $data): ?>
                                        <option value="<?=$data['id']?>"><?=$data['descedo']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label>Municipio</label>
                                <select class="form-control" name="id_municipio_n" id="id_municipio_n" onclick="llenar_parroquia();">
                                    <option value="0">Seleccione</option>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label>Parroquia</label>
                                <select class="form-control" name="id_parroquia_n" id="id_parroquia_n" >
                                    <option value="0">Seleccione</option>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label>Ciudad</label>
                                <select class="selected form-control" name="ciudad_n" id="ciudad_n">
                                    <option value="0">Seleccione</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <h4 class="text-center mb-3 mt-3">Datos Representante Legal</h4>
                            </div>
                            <div class="form-group col-3">
                                <label>País de Prosedencia</label>
                                <select class="form-control" name="id_pais_n" id="id_pais_n">
                                    <option value="0">Seleccione</option>
                                    <?php foreach ($pais as $data): ?>
                                        <option value="<?=$data['id']?>"><?=$data['nompais']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label>Cédula</label>
                                <input type="text" name="ced_rep_leg_n" id="ced_rep_leg_n" class="form-control"  placeholder="Cédula">
                            </div>
                            <div class="form-group col-3">
                                <label>Nombres</label>
                                <input type="text" name="nom_rep_leg_n" id="nom_rep_leg_n" class="form-control"  placeholder="Nombres">
                            </div>
                            <div class="form-group col-3">
                                <label>Apellidos</label>
                                <input type="text" name="ape_rep_leg_n" id="ape_rep_leg_n" class="form-control"  placeholder="Apellidos">
                            </div>
                            <div class="form-group col-3">
                                <label>Estado Civil</label>
                                <select class="form-control" name="edo_civil_n" id="edo_civil_n">
                                    <option value="0">Seleccione</option>
                                    <?php foreach ($edo_civil as $data): ?>
                                        <option value="<?=$data['id_edo_civil']?>"><?=$data['desc_rif']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label>Cargo</label>
                                <input type="text" name="cargo_rep_leg_n" id="cargo_rep_leg_n" class="form-control"  placeholder="Cargo">
                            </div>
                            <div class="form-group col-3">
                                <label>Télefono de Contacto</label>
                                <div class="row">
                                    <div class="col-5">
                                        <select class="form-control" name="operadora_n" id="operadora_n">
                                            <option value="0">Sel.</option>
                                            <?php foreach ($operadora as $data): ?>
                                                <option value="<?=$data['id_operadora']?>"><?=$data['desc_operadora']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-7">
                                        <input type="text" id="numero_n" name="numero_n" class="form-control" onkeypress="return valideKey(event);"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-3">
                                <label>Correo</label>
                                <input type="text" name="correo_rep_leg_n" id="correo_rep_leg_n" class="form-control"  placeholder="Correo">
                            </div>
                        </div>
				    </div>
                    <input type="hidden" name="exitte" id="exitte">
    				<div class="panel-heading">
    					<h4 class="panel-title"><b>Modalidad de la Contratación</b></h4>
    				</div>
    				<div class="panel-body">
                        <div class="row">
                            <div class="form-group col-7">
                                <label>Modalidad de la Contratación</label>
                                <select class="form-control" name="id_modalidad" id="id_modalidad" onclick="llenar_sub_mod();">
                                    <option value="0">Seleccione</option>
                                    <?php foreach ($modalidades as $data): ?>
                                        <option value="<?=$data['id']?>"><?=$data['descripcion']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <label>Sub-Modalidad de la Contratación</label>
                                <select class="form-control" name="id_sub_modalidad" id="id_sub_modalidad">
                                    <option value="0">Seleccione</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label>Rango de Fecha - Inicio a Culminacion del Contrato</label>
                                    <div class="input-group input-daterange">
                                        <input type="text" class="form-control" id="fecha_desde" name="start" placeholder="Desde" />
                                        <span class="input-group-addon">-</span>
                                        <input type="text" class="form-control"  id="fecha_hasta" name="end" placeholder="Hasta" />
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-heading">
    					<h4 class="panel-title"><b>Datos del Contrato</b></h4>
    				</div>
    				<div class="panel-body">
                        <div class="row">
                            <div class="form-group col-4">
                                <label>Nro. del Procedimiento</label>
                                <input class="form-control"  type="text" name="nro_procedimiento" id="nro_procedimiento" placeholder="Nro. del Procedimiento">
                            </div>
                            <div class="form-group col-4">
                                <label>Nro. de contrato / Orden de Compra / Orden de Servicio</label>
                                <input class="form-control" name="nro_cont_oc_os" id="nro_cont_oc_os" rows="3" cols="70"></input>
                            </div>
                            <div class="form-group col-4">
                                <label>Estado donde se ejecuto el Contrato</label>
                                <select class="form-control" name="id_estado_dc" id="id_estado_dc">
                                    <option value="0">Seleccione</option>
                                    <?php foreach ($estados as $data): ?>
                                        <option value="<?=$data['id']?>"><?=$data['descedo']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-2">
                                <label>Objeto de la Contratación</label>
								<div class="col-md-12">
									<div class="checkbox checkbox-css">
										<input type="checkbox" id="cssCheckbox1" name="cssCheckbox1" onclick="evaluar();"/>
										<label for="cssCheckbox1">Bienes</label>
									</div>
									<div class="checkbox checkbox-css">
										<input type="checkbox" id="cssCheckbox2" name="cssCheckbox2" onclick="evaluar();"/>
										<label for="cssCheckbox2">Servicios</label>
									</div>
									<div class="checkbox checkbox-css">
										<input type="checkbox" id="cssCheckbox3" name="cssCheckbox3" onclick="evaluar();"/>
										<label for="cssCheckbox3">Obras</label>
									</div>
								</div>
                            </div>
                            <div class="form-group col-5">
                                <label>Descripción de la Contratación</label>
                                <textarea class="form-control" name="desc_contratacion" id="desc_contratacion" rows="3" cols="70"></textarea>
                            </div>
                            <div class="form-group col-3">
                                <label>Monto</label>
                                <input class="form-control"  type="text" name="monto" id="monto" onkeypress="return valideKey(event);">
                            </div>
                            <div class="form-group row m-b-10">
                                <label>Moneda</label>
								<div class="col-md-12">
									<div class="radio radio-css">
										<input type="radio" id="cssRadio1" name="radio_css1"/>
										<label for="cssRadio1">$</label>
									</div>
									<div class="radio radio-css">
										<input type="radio" id="cssRadio2" name="radio_css2"/>
										<label for="cssRadio2">Euros</label>
									</div>
									<div class="radio radio-css">
										<input type="radio" id="cssRadio3" name="radio_css3"/>
										<label for="cssRadio3">Petros</label>
									</div>
                                    <div class="radio radio-css">
										<input type="radio" id="cssRadio4" name="radio_css4"/>
										<label for="cssRadio4">Bolivares</label>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-heading">
    					<h4 class="panel-title"><b>Tabla de Evaluación del Contratista</b></h4>
    				</div>
    				<div class="panel-body">
                        <div class="row">
                            <table class="table table-bordered">
                                <thead>
									<tr>
										<th>Criterio</th>
										<th>Descripción</th>
										<th>Clasificación</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Calidad</td>
										<td>Mide el cumplimiento de los parámetros técnicos y de calidad exigidos: disposición del personal capacitado/calificado, disponibilidad oportuna y confiable de equipos, instrumentos e infraestructura adecuados, procura (compra, manejo y almacenaje), respuesta eficiente a reclamos técnicos/calidad, organización e implantación de mejoras</td>
										<td>
                                            <select class="selected form-control" name="calidad" id="calidad" onclick="evaluar();">
                                                <option value="">Sel</option>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </td>
									</tr>
									<tr>
										<td>Responsabilidad</td>
										<td>Cumplimiento de leyes, decretos y clausulas relativos al contrato, respuestas a demandas o reclamos de proveedores/subcontratistas, cumplimiento y respuesta de requisitos como solvencia laboral, administración de vacaciones, reclamos laborales, paros, demñas obligraciones legales y contractuales</td>
										<td>
                                            <select class="selected form-control" name="responsabilidad" id="responsabilidad" onclick="evaluar();">
                                                <option value="">Sel</option>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </td>
									</tr>
									<tr>
                                        <td>Conocimiento del trabajo</td>
										<td>Cumplimiento de practicas de trabajo seguro, programas de inspección SHA, herramientas y equipos, condiciones del area de trabajo adecuadas, adiestramiento y motivación al personal, SHA de contratistas, respuesta y control de emergencias entre otras, aplicacion de las normativas técnicas.</td>
                                        <td>
                                            <select class="selected form-control" name="conocimiento" id="conocimiento" onclick="evaluar();">
                                                <option value="">Sel</option>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </td>
									</tr>
                                    <tr>
										<td>Opotunidad (Plazos Establecidos)</td>
										<td>Corresponde al periodo establecido en el contrato para la ejecución de la obra, prestación del servicio o suministro de bienes.</td>
                                        <td>
                                            <select class="selected form-control" name="oportunidad" id="oportunidad" onclick="evaluar();">
                                                <option value="">Sel</option>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </td>
									</tr>
								</tbody>
                            </table>
                            <div class="col-7"></div>
                            <div class="col-2" class="form-control">
                                <label>Total:</label>
                                <input class="form-control" type="text" name="total_claf" id="total_claf" readonly>
                            </div>
                            <div class="col-3" class="form-control">
                                <label>Calificacion:</label>
                                <input class="form-control" type="text" name="calificacion" id="calificacion" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="panel-heading">
    					<h4 class="panel-title"><b>Información de Notificación al Contratista</b></h4>
    				</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-6">
                                <label>¿Fue Notificado el contratista?</label>
                                <input class="form-control"  type="text" name="nro_procedimiento" id="nro_procedimiento" placeholder="Nro. del Procedimiento">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col 12 text-center">
                        <button type="button" onclick="registrar();" id="registrar_eval" name="registrar_eval" class="btn btn-primary mb-3">Registrar Evaluación</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal" id="exampleModal" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Notificación al Contratista</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">.
                    <form class="form-horizontal" id="resgistrar_not" data-parsley-validate="true" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <input type="hidden" class="form-control" name="id" id="id">
                        <div class="form-group col-4">
                            <label>Medio de envio de la Notificación</label>
                            <select class="selected form-control" name="medio" id="medio" onchange="mostrar_medio();">
                                <option value="0">Seleccione</option>
                                <?php foreach ($med_not as $data): ?>
                                    <option value="<?=$data['id_medio_notf']?>"><?=$data['descripcion']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div id="correo" class="form-group col-8" style="display:none;">
                            <h5><b style="color:red;">Nota:</b> Si decea enviar la Evaluación de Desempeño que se registro, puede ingresar al <b>Sub-Módulo Notificación</b> y descargar la misma, para luego enviar al contratista.</h5>
                            <label>Correo Electronico al cual fue notificado</label>
                            <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo" />
                        </div>
                        <div id="adjunto" class="form-group col-8"  style="display:none;">
                            <h5><b style="color:red;">Nota:</b> Si no posee la Imagen o PDF, de la notificación de Evaluación de Desempeño, puede ingresar luego por el <b>Sub-Módulo Notificación</b> y realizar la misma.</h5>
                            <label>Acuse de Envio / Recibido <b style="color:red">*</b></label>
                            <input type="file" name="fileImagen" id="fileImagen" class="form-control">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="guardar" onclick="guardar_not();" type="button" class="btn btn-primary">Guardar</button>
                <button onclick="javascript:window.location.reload()" type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<script src="<?=base_url()?>/js/eval_desempenio/registro.js"></script>
<script type="text/javascript">
    function may(e){
         e.value = e.value.toUpperCase();
    }
</script>