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
                            <label>Rif del Contratista a Consultar</label>
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

            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title"><b>Información del Contratista </b></h4>
                </div>
                <div class="panel-body" id="no_existe">

                    <div class="row">
                        <div class="col-md-12 mt-2 mb-2">
                            <h4 class="mt-2"><label>Por Favor revise el Rif ingresado! y vuelva a intentar.</label></h4>

                        </div>

                    </div>
                </div>
                <div class="panel-body" id="existe">
                    <form action="<?= base_url() ?>index.php/Contratista/planillaresumen" class="form-horizontal" data-parsley-validate="true" name="demo-form" id="form" method="POST">
                        <div class="row">
                            <div class="form-group col-12">
                                <input class="form-control" type="hidden" name="idedocontratistas" id="idedocontratistas">
                                <textarea class="form-control" name="descedocont" id="descedocont" rows="4" readonly></textarea>
                                <textarea class="form-control" name="infoadic" id="infoadic" rows="4" readonly></textarea>

                            </div>


                            <div class="form-group col-12 text-center">
                                <h4 class="panel-title"><b>Modalidad de la Contratación</b> </h4>
                            </div>
                            <div class="form-group col-3">
                                <label>Número RIF</label>
                                <input class="form-control" type="text" name="rif_cont" id="rif_cont" readonly>
                            </div>
                            <div class="form-group col-6">
                                <label>Nombre o Razón Social</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" readonly>
                            </div>
                            <div class="form-group col-3">
                                <label>Tipo de Persona</label>
                                <input type="text" name="tipopersona" id="tipopersona" class="form-control" readonly>
                            </div>
                            <div class="form-group col-3">
                                <label>Denominación Comercial</label>
                                <input type="text" name="descdencom" id="descdencom" class="form-control" readonly>
                            </div>
                            <div class="form-group col-3">
                                <label>Objeto Principal de la Empresa</label>
                                <input type="text" name="descobjcont" id="descobjcont" class="form-control" readonly>
                            </div>
                            <br>
                            <div class="form-group col-3">
                                <label>Dirección Fiscal</label>
                                <input type="text" name="dirfiscal" id="dirfiscal" class="form-control" readonly>
                            </div>
                            <div class="form-group col-3">
                                <label>Teléfonos</label>
                                <input type="text" name="telf1" id="telf1" class="form-control" readonly>
                            </div>
                            <div class="form-group col-3">
                                <label>Persona de Contacto</label>
                                <input type="text" name="percontacto" id="percontacto" class="form-control" readonly>
                            </div>
                            <div class="form-group col-12 text-center">
                                <h4 class="panel-title"><b>Información de Cuenta Suscripción en el Sistema</b> </h4>
                            </div>
                            <div class="form-group col-3">
                                <label>Fecha de Actualización de la Suscripción</label>
                                <input type="text" name="fecactsusc_at" id="fecactsusc_at" class="form-control" readonly>
                            </div>
                            <div class="form-group col-3">
                                <label>Fecha de Vencimiento de la Suscripción</label>
                                <input type="text" name="fecvencsusc_at" id="fecvencsusc_at" class="form-control" readonly>
                            </div>
                            <div class="form-group col-12 text-center">
                                <h4 class="panel-title"><b>Información en el RNC</b> </h4>
                            </div>
                            <div class="form-group col-6">
                                <label>Siuación Actual en el RNC</label>
                                <textarea class="form-control" id="situacionact" rows="6" readonly></textarea>
                            </div>
                            <div class="form-group col-3">
                                <label>Número de Certificado RNC</label>
                                <input type="text" name="numcertrnc" id="numcertrnc" class="form-control" readonly>
                            </div>
                            <div class="form-group col-3">
                                <label>Número de Control del Certificado RNC</label>
                                <input type="text" name="numcontrol_certrnc" id="numcontrol_certrnc" class="form-control" readonly>
                            </div>
                            <div class="form-group col-3">
                                <label>inscrición en el RNC</label>
                                <input type="text" name="fecinscrnc_at" id="fecinscrnc_at" class="form-control" readonly>
                            </div>
                            <div class="form-group col-3">
                                <label>Vencimiento en el RNC</label>
                                <input type="text" name="fecvencrnc_at" id="fecvencrnc_at" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group col 12 text-center">
                            <button type="submit" class="send" >Planilla Resumen</button>
                        </div>
                        <div class="form-group col 12 text-center">

                    Imprimir Certificado / Imprimir Copia Certificada <br>
                                se encuentra en desarrollo
                        </div>
                    </form>
                </div>
            </div>


        </div>

    </div>
</div>
</div>

<script src="<?= base_url() ?>/js/contratista/contratista.js"></script>
<script type="text/javascript">
    function may(e) {
        e.value = e.value.toUpperCase();
    }
</script>