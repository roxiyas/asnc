<div class="sidebar-bg"></div>
<div id="content" class="content">
    <div class="row">
		<div class="col-lg-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h5 class="panel-title"><b>Datos del Contratista Adjudicado</b></h5>
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
                            <h4 style="width: 100%;">Obj. de la Contratación</h4>
                        </div>
                        <div class="form-group col-3">
                            <div class="col-md-12">
                                <?php if ($eval_ind['bienes'] != null): ?>
                                    <div style="padding-right: 7px;">
                                        <input type="checkbox" value="bienes" name="bienes" id="cssCheckbox1" checked disabled/>
                                        <label for="cssCheckbox1">Bienes</label>
                                    </div>
                                <?php endif; ?>
                                <?php if ($eval_ind['servicios'] != null): ?>
                                    <div style="padding-right: 7px;">
                                        <input type="checkbox" value="servicios" name="servicios" id="cssCheckbox1" checked disabled/>
                                        <label for="cssCheckbox1">Servicios</label>
                                    </div>
                                <?php endif; ?>
                                <?php if ($eval_ind['obras'] != null): ?>
                                    <div style="padding-right: 7px;">
                                        <input type="checkbox" value="obras" name="obras" id="cssCheckbox1" checked disabled/>
                                        <label for="cssCheckbox1">Obras</label>
                                    </div>
                                <?php endif; ?>
							</div>
                        </div>
                        <div class="form-group col-5">
                            <h4>Descripción de la Contratación: <b><?=$eval_ind['descr_contrato']?></b></h4>
                        </div>
                        <div class="form-group col-4">
                            <h4>Monto: <b><?=$eval_ind['monto']?></b></h4>
                        </div>
                        <div class="form-group col-1">
                            <h4>Moneda</h4>
                        </div>
                        <div class="">
                            <div class="col-md-12 col-2">
                                <?php if ($eval_ind['dolar'] != null): ?>
                                    <div style="padding-right: 7px;">
                                        <input type="checkbox" value="dolar" name="dolar" id="cssCheckbox1" checked disabled/>
                                        <label for="cssCheckbox1">dolar</label>
                                    </div>
                                <?php endif; ?>
                                <?php if ($eval_ind['euro'] != null): ?>
                                    <div style="padding-right: 7px;">
                                        <input type="checkbox" value="bienes" name="euro" id="cssCheckbox1" checked disabled/>
                                        <label for="cssCheckbox1">Euro</label>
                                    </div>
                                <?php endif; ?>
                                <?php if ($eval_ind['petros'] != null): ?>
                                    <div style="padding-right: 7px;">
                                        <input type="checkbox" value="petros" name="petros" id="cssCheckbox1" checked disabled/>
                                        <label for="cssCheckbox1">Petros</label>
                                    </div>
                                <?php endif; ?>
                                <?php if ($eval_ind['bolivares'] != null): ?>
                                    <div style="padding-right: 7px;">
                                        <input type="checkbox" value="bolivares" name="bolivares" id="cssCheckbox1" checked disabled/>
                                        <label for="cssCheckbox1">Bolivares</label>
                                    </div>
                                <?php endif; ?>
							</div>
                        </div>
                    </div>
                </div>
                <div class="panel-heading">
					<h4 class="panel-title"><b>Tabla de Evaluación del Contratista</b></h4>
				</div>
				<div class="panel-body">
                    <div class="row">
                        <div class="col-7"></div>
                        <div class="col-2" class="form-control">
                            <h4>Total: <b><?=$eval_ind['total_calif']?></b></h4>
                            <!-- <input class="form-control" type="text" name="total_claf" id="total_claf" readonly> -->
                        </div>
                        <div class="col-3" class="form-control">
                            <h4 >Calificacion: <b><?=$eval_ind['calificacion']?></b></h4    >
                            <!-- <input class="form-control" type="text" name="calificacion" id="calificacion" readonly> -->
                        </div>
                    </div>
                </div>
                <div class="panel-heading">
					<h4 class="panel-title"><b>Información de Notificación al Contratista</b></h4>
				</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="form-group col-4">
                            <h4>¿Fue notificado al contratista?: <b><?=$eval_ind['notf_cont']?></b></h4>
                            <!-- <select class="form-control" name="notf_cont" id="notf_cont">
                                <option value="0">Sí, fué notificado al contratista</option>
                                <option value="0">No, no fué notificado al contratista</option>
                            </select> -->
                        </div>
                        <div class="form-group col-4">
                            <h4>Fecha de la Notificación: <b><?=$eval_ind['fecha_not']?></b></h4>
							<!-- <input type="text" class="form-control" id="datepicker-default" name="fec_notificacion" placeholder="Seleccionar Fecha" /> -->
                        </div>
                        <div class="form-group col-4">
                            <h4>Medio de envio de la Notificación: <b><?=$eval_ind['medio']?></b></h4>
                            <!-- <select class="selected form-control" name="medio" id="medio">
                                <option value="0">Seleccione</option>
                                <option value="1">FAX</option>
                                <option value="2">Télefono</option>
                                <option value="3">Correo Electronico</option>
                                <option value="4">No Aplica</option>
                            </select> -->
                        </div>
                        <div class="form-group col-6">
                            <h4>Nro. de Oficio / Fax / Correo Electronico / Otro: <b><?=$eval_ind['nro_oc_os']?></b></h4>
							<!-- <input type="text" class="form-control" id="nro_oc_os" name="nro_oc_os" placeholder="Nro. de Oficio / Fax / Correo Electronico / Otro" /> -->
                        </div>
                        <div class="form-group col-6">
                            <h4>Acuse de Recibido <b style="color:red">*</b></h4>
                            <!-- <input type="file" name="fileImagen" id="fileImagen" class="form-control"> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?=base_url()?>/js/evaluacion_desempenio.js"></script>
