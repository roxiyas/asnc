<div class="panel-heading">
    <h4 class="panel-title"><b>Información de Notificación al Contratista</b></h4>
</div>
<div class="panel-body">
    <div class="row">
        <div class="form-group col-4">
            <label>¿Fue notificado al contratista?</label>
            <select class="form-control" name="notf_cont" id="notf_cont" onchange="val_not();">
                <option value="0">Seleccione</option>
                <option value="1">Sí, fué notificado al contratista</option>
                <option value="2">No, no fué notificado al contratista</option>
            </select>
        </div>
        <div class="form-group col-4">
            <label>Fecha de la Notificación</label>
            <input type="text" class="form-control" id="datepicker-default" name="fec_notificacion" placeholder="Seleccionar Fecha" onchange="validar_fecha();"/>
        </div>
        <div class="form-group col-4">
            <label>Medio de envio de la Notificación</label>
            <select class="selected form-control" name="medio" id="medio">
                <option value="0">Seleccione</option>
                <?php foreach ($med_not as $data): ?>
                    <option value="<?=$data['id_medio_notf']?>"><?=$data['descripcion']?></option>
                <?php endforeach; ?>
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
