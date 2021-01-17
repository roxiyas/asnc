<div class="sidebar-bg"></div>
<div id="content" class="content">
    <div class="row">
		<div class="col-lg-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title"><b>Datos del Contratista Adjudicado</b></h4>
                </div>
			    <div class="panel-body">
                    <div class="row">
                        <div class="form-group col-4">
                            <h4>Rif del Contratante: <b><?=$eval_ind['rif_contrat']?></b></h4>
                        </div>
                        <div class="form-group col-8">
                            <h4>Nombre completo: <b><?=$eval_ind['nom_comer']?></b></h4>
                        </div>
                        <div class="form-group col-4">
                            <h4>Estado:  <b><?=$eval_ind['est_contratista']?></b></h4>
                        </div>
                        <div class="form-group col-4">
                            <h4>Municipio: <b><?=$eval_ind['mun_contratista']?></b></h4>
                        </div>
                        <div class="form-group col-3">
                            <h4>Ciudad: <b><?=$eval_ind['ciudade_id']?></b></h4>
                        </div>
                        <div class="form-group col-6">
                            <h4>Persona de Contacto: <b><?=$eval_ind['per_cont']?></b></h4>
                        </div>
                        <div class="form-group col-6">
                            <h4>Télefono de Contacto: <b><?=$eval_ind['tef_cont']?></b></h4>
                        </div>
                    </div>
			    </div>
				<div class="panel-heading">
					<h4 class="panel-title"><b>Modalidad de la Contratación</b></h4>
				</div>
				<div class="panel-body">
                    <div class="row">
                        <div class="form-group col-12">
                            <h4>Modalidad de la Contratación: <b><?=$eval_ind['modalidad']?></b></h4>
                        </div>
                        <div class="form-group col-12">
                            <h4>Sub-Modalidad de la Contratación: <b><?=$eval_ind['sub_modalidad']?></b></h4>
                        </div>
                        <div class="form-group col-12">
                            <h4>Rango de Fecha - Inicio a Culminacion del Contrato: <b>Desde: <?=$eval_ind['fec_inicio_cont']?> / Hasta: <?=$eval_ind['fec_fin_cont']?></b></h4>
                        </div>
                    </div>
                </div>
                <div class="panel-heading">
					<h4 class="panel-title"><b>Datos del Contrato</b></h4>
				</div>
				<div class="panel-body">
                    <div class="row">
                        <div class="form-group col-5">
                            <h4>Nro. del Procedimiento: <b><?=$eval_ind['nro_procedimiento']?></b></h4>
                        </div>
                        <div class="form-group col-6">
                            <h4>Nro. de contrato / Orden de Compra / Orden de Servicio: <b><?=$eval_ind['nro_contrato']?></b></h4>
                        </div>
                        <div class="form-group col-5">
                            <h4>Edo. donde se ejecuto el Contrato: <b><?=$eval_ind['estado_contrato']?></b></h4>
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
                        <div class="form-group col-2">
                            <label>Moneda</label>
							<div class="col-md-12">
								<div class="checkbox checkbox-css">
									<input type="checkbox" id="cssCheckbox4" name="cssCheckbox4"/>
									<label for="cssCheckbox4">$</label>
								</div>
								<div class="checkbox checkbox-css">
									<input type="checkbox" id="cssCheckbox5" name="cssCheckbox5"/>
									<label for="cssCheckbox5">Euros</label>
								</div>
								<div class="checkbox checkbox-css">
									<input type="checkbox" id="cssCheckbox6" name="cssCheckbox6"/>
									<label for="cssCheckbox6">Petros</label>
								</div>
                                <div class="checkbox checkbox-css">
									<input type="checkbox" id="cssCheckbox7" name="cssCheckbox7"/>
									<label for="cssCheckbox7">Bolivares</label>
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
                        <div class="form-group col-4">
                            <label>¿Fue notificado al contratista?</label>
                            <select class="form-control" name="notf_cont" id="notf_cont">
                                <option value="0">Sí, fué notificado al contratista</option>
                                <option value="0">No, no fué notificado al contratista</option>
                            </select>
                        </div>
                        <div class="form-group col-4">
                            <label>Fecha de la Notificación</label>
							<input type="text" class="form-control" id="datepicker-default" name="fec_notificacion" placeholder="Seleccionar Fecha" />
                        </div>
                        <div class="form-group col-4">
                            <label>Medio de envio de la Notificación</label>
                            <select class="selected form-control" name="medio" id="medio">
                                <option value="0">Seleccione</option>
                                <option value="1">FAX</option>
                                <option value="2">Télefono</option>
                                <option value="3">Correo Electronico</option>
                                <option value="4">No Aplica</option>
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label>Nro. de Oficio / Fax / Correo Electronico / Otro</label>
							<input type="text" class="form-control" id="nro_oc_os" name="nro_oc_os" placeholder="Nro. de Oficio / Fax / Correo Electronico / Otro" />
                        </div>
                        <div class="form-group col-6">
                            <label>Acuse de Recibido <b style="color:red">*</b></label>
                            <input type="file" name="fileImagen" id="fileImagen" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?=base_url()?>/js/evaluacion_desempenio.js"></script>
