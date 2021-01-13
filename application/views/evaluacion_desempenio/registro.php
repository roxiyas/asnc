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
                            <label>Rif a Consultar</label>
                            <input class="form-control" type="text" name="rif" id="rif">
                        </div>
                        <div class="col- mt-4">
                            <button type="button" class="btn btn-default" onclick="consultar_rif();" name="button">Consultar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="col-lg-12" style="display: none" id="items">
            <form action="<?=base_url()?>index.php/User/save" class="form-horizontal" data-parsley-validate="true" name="demo-form" method="POST">
    			<div class="panel panel-inverse" data-sortable-id="form-validation-1">
    				<div class="panel-heading">
    					<h4 class="panel-title">Datos del Contratista Adjudicado</h4>
    				</div>
    				<div class="panel-body">
                        <div class="row">
                            <div class="form-group col-3">
                                <label>Rif del Contratante</label>
                                <input class="form-control"  type="text" name="rif_cont" id="rif_cont" placeholder="Rif">
                            </div>
                            <div class="form-group col-6">
                                <label>Nombre completo</label>
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre completo">
                            </div>
                            <div class="form-group col-3">
                                <label>Estado</label>
                                <input type="text" name="estado" id="estado" class="form-control"  placeholder="Estado">
                            </div>
                            <div class="form-group col-3">
                                <label>Ciudad</label>
                                <input type="text" name="ciudad" id="ciudad" class="form-control"  placeholder="Ciudad">
                            </div>
                            <div class="form-group col-3">
                                <label>Representante Legal</label>
                                <input type="text" name="rep_legal" id="rep_legal" class="form-control"  placeholder="Representante Legal">
                            </div>
                            <div class="form-group col-3">
                                <label>Cédula del Representante Legal</label>
                                <input type="text" name="ced_rep_legal" id="ced_rep_legal" class="form-control"  placeholder="Cédula del Representante Legal">
                            </div>
                            <div class="form-group col-3">
                                <label>Télefono de Contacto</label>
                                <input type="text" name="tel_cont" id="tel_cont" class="form-control"  placeholder="Télefono de Contacto">
                            </div>
                        </div>
				    </div>
    				<div class="panel-heading">
    					<h4 class="panel-title">Modalidad de la Contratación</h4>
    				</div>
    				<div class="panel-body">
                        <div class="row">
                            <div class="form-group col-3">
                                <label>Modalidad de la Contratación</label>
                                <input class="form-control"  type="text" name="id_mod_contratacion" id="id_mod_contratacion" placeholder="Modalidad de la Contratación">
                            </div>
                            <div class="form-group col-4">
                                <label>Rango de Fecha de Inicio a Culminacion del Contrato</label>
                                    <div class="input-group input-daterange">
                                        <input type="text" class="form-control" id="fecha_desde" name="start" placeholder="Desde" />
                                        <span class="input-group-addon">-</span>
                                        <input type="text" class="form-control"  id="fecha_hasta"name="end" placeholder="Hasta" />
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-heading">
    					<h4 class="panel-title">Datos del Contrato</h4>
    				</div>
    				<div class="panel-body">
                        <div class="row">
                            <div class="form-group col-3">
                                <label>Nro. del Procedimiento</label>
                                <input class="form-control mt-3"  type="text" name="nro_procedimiento" id="nro_procedimiento" placeholder="Nro. del Procedimient">
                            </div>
                            <div class="form-group col-3">
                                <label>Nro. de contrato / Orden de Compra / Orden de Servicio</label>
                                <input class="form-control" name="nro_cont_oc_os" id="nro_cont_oc_os" rows="3" cols="70"></input>
                            </div>
                            <div class="form-group col-3">
                                <label class="mb-4">Estado donde se ejecuto el Contrato</label>
                                <select class="form-control" name="id_estado" id="id_estado">
                                    <option value="0">Seleccione</option>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label class="mb-4">Objeto de la Contratación</label>
                                <select class="form-control" name="id_objeto_contratacion" id="id_objeto_contratacion">
                                    <option value="0">Seleccione</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label>Descripción de la Contratación</label>
                                <textarea class="form-control" name="desc_contratacion" id="desc_contratacion" rows="3" cols="70"></textarea>
                            </div>
                            <div class="form-group col-3">
                                <label>Actividad Comercial</label>
                                <select class="form-control" name="id_act_comercial" id="id_act_comercial">
                                    <option value="0">Seleccione</option>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label>Monto</label>
                                <input class="form-control"  type="text" name="monto" id="monto" onkeypress="return valideKey(event);">
                            </div>
                        </div>
                    </div>
                    <div class="panel-heading">
    					<h4 class="panel-title">Datos del Contrato</h4>
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
                                            <select class="selected form-control" name="calidad" id="calidad" >
                                                <option value="0">Si</option>
                                                <option value="1">No</option>
                                            </select>
                                        </td>
									</tr>
									<tr>
										<td>Responsabilidad</td>
										<td>Cumplimiento de leyes, decretos y clausulas relativos al contrato, respuestas a demandas o reclamos de proveedores/subcontratistas, cumplimiento y respuesta de requisitos como solvencia laboral, administración de vacaciones, reclamos laborales, paros, demñas obligraciones legales y contractuales</td>
										<td>
                                            <select class="selected form-control" name="calidad" id="calidad" >
                                                <option value="0">Si</option>
                                                <option value="1">No</option>
                                            </select>
                                        </td>
									</tr>
									<tr>
                                        <td>Conocimiento del trabajo</td>
										<td>Cumplimiento de practicas de trabajo seguro, programas de inspección SHA, herramientas y equipos, condiciones del area de trabajo adecuadas, adiestramiento y motivación al personal, SHA de contratistas, respuesta y control de emergencias entre otras, aplicacion de las normativas técnicas.</td>
                                        <td>
                                            <select class="selected form-control" name="calidad" id="calidad" >
                                                <option value="0">Si</option>
                                                <option value="1">No</option>
                                            </select>
                                        </td>
									</tr>
                                    <tr>
										<td>Opotunidad (Plazos Establecidos)</td>
										<td>Corresponde al periodo establecido en el contrato para la ejecución de la obra, prestación del servicio o suministro de bienes.</td>
                                        <td>
                                            <select class="selected form-control" name="calidad" id="calidad" >
                                                <option value="0">Si</option>
                                                <option value="1">No</option>
                                            </select>
                                        </td>
									</tr>
								</tbody>
                            </table>
                            <div class="col-7"></div>
                            <div class="col-2" class="form-control">
                                <label>Total:</label>
                            </div>
                            <div class="col-3" class="form-control">
                                <label>Clasificación:</label>
                            </div>
                        </div>
                    </div>
                    <div class="panel-heading">
    					<h4 class="panel-title">Información de Notificación al Contratista</h4>
    				</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="form-group col-3">
                                <label>¿Fue notificado al contratista?</label>
                                <select class="form-control" name="notf_cont" id="notf_cont">
                                    <option value="0">Sí, fué notificado al contratista</option>
                                    <option value="0">No, no fué notificado al contratista</option>
                                </select>
                            </div>
                            <div class="form-group col-2">
                                <label>Fecha de la Notificación</label>
								<input type="text" class="form-control" id="datepicker-default" placeholder="Seleccionar Fecha" />
                            </div>
                            <div class="form-group col-3">
                                <label>Medio de envio de la Notificación</label>
                                <select class="selected form-control" name="medio" id="medio">
                                    <option value="0">FAX</option>
                                    <option value="1">Télefono</option>
                                    <option value="2">Correo Electronico</option>
                                    <option value="3">No Aplica</option>
                                </select>
                            </div>
                            <div class="form-group col-4">
                                <label>Nro. de Oficio / Fax / Correo Electronico / Otro</label>
								<input type="text" class="form-control" id="datepicker-default" placeholder="Seleccionar Fecha" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group col 12 text-center">
                        <button type="submit" class="btn btn-primary mb-3">Registrar Evaluación</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="<?=base_url()?>/js/evaluacion_desempenio.js"></script>
