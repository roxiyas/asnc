<div class="sidebar-bg"></div>
<div id="content" class="content">
    <div class="row">
        <div class="col-6 mb-3">
            <a class="btn btn-circle waves-effect btn-lg waves-circle waves-float btn-primary" href="javascript:history.back()"> Volver</a>
        </div>
        <?                       //var_dump($mercantil['domfiscal'] );
        //  exit ($mercantil['domfiscal'] );
        ?>
        <!-- <div class="col-3 text-center">
            <button class="btn btn-default mt-1 mb-1" type="button" onclick="printDiv();">Descargar Registro</button>
        </div> -->
        <div class="col-lg-12" id="imp1">
            <div class="panel panel-inverse">
                <br>
                <div class="panel-heading">
                    <h3 style="font-size: 16px;" class="panel-title text-center"><b>INFORMACIÓN DE LA EMPRESA
                            REGISTRADA</b></h3>
                </div>
                <div class="col-12">
                    <h1> <b style="color:red;" class="text-center"> <?= $rifced['descedocont'] ?> </b></h1>
                </div>

                <div class="col-12">
                    <h2> <b style="color:red;"><?= $rifced['infoadic'] ?></b> </h2>
                </div>
                <div class="panel-heading">
                    <h2 style="font-size: 16px;" class="panel-title text-center"><b>Infomación en el RNC</b></h2>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="form-group col-4">
                            <h5><b>Número de Certificado:</b></h5>
                            <h5><?= $rifced['numcertrnc2'] ?></h5>
                        </div>
                        <div class="form-group col-10">
                            <h5><b>Inscripción den el RNC:</b></h5>
                            <h5><?= $rifced['fecinscrnc_at2'] ?></h5>
                        </div>
                        <div class="form-group col-3">
                            <h5><b>Vencimiento en el RNC:</b></h5>
                            <h5><?= $rifced['fecvencrnc_at2'] ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Oficina Registro Auxiliar o Unico::</b></h5>
                            <h5></h5>
                        </div>

                    </div>
                </div>
                <div class="panel-heading">
                    <h2 style="font-size: 16px;" class="panel-title text-center"><b>Datos Generales de la Empresa</b>
                    </h2>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="form-group col-2">
                            <h5><b>Rif del Contratista:</b></h5>
                            <h5><?= $rifced['rifced'] ?></h5>
                        </div>
                        <div class="form-group col-4">
                            <h5><b>Nombre y Apellido o Razon Social:</b></h5>
                            <h5><?= $rifced['nombre'] ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Tipo de persona:</b></h5>
                            <h5><?php if ($rifced['tipopersona'] == 'J') {
                                    echo "Persona Jurídica";
                                } else {
                                    echo "Persona Natural";
                                } ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Denominación Comercial:</b></h5>
                            <h5><?= $rifced['descdencom'] ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Siglas:</b></h5>
                            <h5><?= $rifced['siglas'] ?></h5>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="form-group col-2">
                            <h5><b>Nomina Promedio Anual:</b></h5>
                            <h5><?= $rifced['nomprom'] ?></h5>
                        </div>
                        <div class="form-group col-4">
                            <h5><b>Empresa de Seguro:</b></h5>
                            <h5><?php if ($rifced['empseguro'] == 0) {
                                    echo "NO";
                                } else {
                                    echo "SI";
                                } ?></h5>
                        </div>
                        <div class="form-group col-4">
                            <h5><b>Empresa del Vigilancia y Seguridad:</b></h5>
                            <h5><?php if ($rifced['vigilancia'] == 0) {
                                    echo "NO";
                                } else {
                                    echo "SI";
                                } ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Fabricante de Prendas Militares:</b></h5>
                            <h5><?php if ($rifced['prendamilitar'] == 0) {
                                    echo "NO";
                                } else {
                                    echo "SI";
                                } ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Objeto Principal de la Empresa:</b></h5>
                            <h5><?= $rifced['descobjcont'] ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Proveedor</b></h5>
                            <div class="col-md-3">
                                <div class="form-group col-2">
                                    <label><b>Fabricante</b></label>
                                    <h6><?php if ($rifced['provf'] == 't') {
                                            echo "SI";
                                        } else {
                                            echo "NO";
                                        } ?></h6>
                                </div>
                                <div class="form-group col-2">
                                    <label><b>Distribuidor</b></label>
                                    <h6><?php if ($rifced['provd'] == 't') {
                                            echo "SI";
                                        } else {
                                            echo "NO";
                                        } ?></h6>
                                </div>
                                <div class="form-group col-2">
                                    <label><b>Distribuidor Autorizado</b></label>
                                    <h6><?php if ($rifced['prova'] == 't') {
                                            echo "SI";
                                        } else {
                                            echo "NO";
                                        } ?></h6>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Obras</b></h5>
                            <div class="col-md-3">
                                <div class="form-group col-1">
                                    <label><b>Obras</b></label>
                                    <h6><?php if ($rifced['obras'] == 't') {
                                            echo "SI";
                                        } else {
                                            echo "NO";
                                        } ?></h6>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-5">
                            <h5><b>Servicios</b></h5>
                            <div class="col-md-3">
                                <div class="form-group col-1">
                                    <label><b>Servicio </b></label>
                                    <h6><?php if ($rifced['servn'] == 't') {
                                            echo "SI";
                                        } else {
                                            echo "NO";
                                        } ?></h6>
                                </div>
                                <div class="form-group col-1">
                                    <label><b>Servicio Autorizado </b></label>
                                    <h6><?php if ($rifced['serva'] == 't') {
                                            echo "SI";
                                        } else {
                                            echo "NO";
                                        } ?></h6>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-10">
                            <h5><b>Información de Domicilio Principal:</b></h5>

                        </div>
                        <div class="form-group col-4">
                            <h5><b>Sector/Zona/URb:</b></h5>
                            <h5><?= $rifced['dir1'] ?></h5>
                        </div>
                        <div class="form-group col-3">
                            <h5><b>Cale/Esquina/Av:</b></h5>
                            <h5><?= $rifced['dir2'] ?></h5>
                        </div>
                        <div class="form-group col-4">
                            <h5><b>Edif./Quinta/Residencia:</b></h5>
                            <h5><?= $rifced['dir3'] ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Nro./Piso/Ofic:</b></h5>
                            <h5><?= $rifced['dir4'] ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Punto de Referencia:</b></h5>
                            <h5><?= $rifced['ptoref'] ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Estado:</b></h5>
                            <h5><?= $rifced['descedo'] ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Ciudad:</b></h5>
                            <h5><?= $rifced['descciu'] ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Municipio:</b></h5>
                            <h5><?= $rifced['descmun'] ?></h5>
                        </div>
                        <div class="form-group col-3">
                            <h5><b>Parroquia:</b></h5>
                            <h5><?= $rifced['descparro'] ?></h5>

                        </div>
                        <div class="form-group col-12">
                            <h5><b>Información de Contacto:</b></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Persona Contacto:</b></h5>
                            <h5><?= $rifced['percontacto'] ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Teléfono Fijo o Móvil:</b></h5>
                            <h5><?= $rifced['telf1'] ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Teléfono Móvil:</b></h5>
                            <h5><?= $rifced['telf2'] ?></h5>
                        </div>
                        <div class="form-group col-3">
                            <h5><b>Fax o Telefax:</b></h5>
                            <h5><?= $rifced['telf3'] ?></h5>
                        </div>
                        <div class="form-group col-5">
                            <h5><b>Correo Electrónico:</b></h5>
                            <h5><?= $rifced['email'] ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Pagina Web:</b></h5>
                            <h5><?= $rifced['website'] ?></h5>
                        </div>
                    </div>
                    <div class="panel-heading">
                        <h2 style="font-size: 16px;" class="panel-title text-center"><b>Acta Constitutiva y Modificaciones Estatutarias</b>
                        </h2>
                    </div>
                    <div class="panel-body">
                        <div class="row">

                            <div class="form-group col-4">
                                <h5><b>Descripción:</b></h5>
                                <h5><?= $rifced['descmodif'] ?></h5>
                            </div>

                            <div class="form-group col-4">
                                <h5><b>Tipo Registro:</b></h5>
                                <h5><?= $rifced['descrm'] ?></h5>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>Circunscripción:</b></h5>
                                <h5><?= $rifced['desccirjudicial'] ?></h5>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>Nro de Registro:</b></h5>
                                <h5><?= $rifced['numreg'] ?></h5>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>fecha de Registro:</b></h5>
                                <h5><?= $rifced['fecreg_at'] ?></h5>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>Tomo :</b></h5>
                                <h5><?= $rifced['tomo'] ?></h5>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>Folio :</b></h5>
                                <h5><?= $rifced['folio'] ?></h5>
                            </div>

                        </div>
                    </div>
                    <div class="panel-heading">
                        <h5 style="font-size: 16px;" class="panel-title text-center"><b>Informacion del Registro Mercantil</b></h5>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="form-group col-10">
                                <h5><b>Dirección Fiscal:</b></h5>
                                <h5><?= $mercantil['domfiscal'] ?></h5>
                            </div>
                            <div class="form-group col-12">
                                <h5><b>Objeto Social:</b></h5>
                                <h5><?= $mercantil['objsocial'] ?></h5>
                            </div>
                            <div class="form-group col-12">
                                <h5><b>Duración de la Empresa Actual:</b></h5>
                                <h5><?= $mercantil['fecduremp_at']  ?></h5>
                            </div>
                            <div class="form-group col-12">
                                <h5><b>Duración de la Junta Directiva:</b></h5>
                                <h5><?= $mercantil['fecdurjd_at']  ?></h5>
                            </div>
                            <div class="form-group col-12">
                                <h5><b>Cierre Fiscal Actual:</b></h5>
                                <h5><?= $mercantil['diaciefcal'] ?>/ <?= $mercantil['mesciefcal'] ?></h5>
                            </div>
                            <div class="form-group col-12">
                                <h5><b>Capital Social Suscrito Actual:</b></h5>
                                <h5><?= number_format($mercantil['capsusc'], 2, ".", ",") ?></h5>
                            </div>
                            <div class="form-group col-12">
                                <h5><b>Capital Social Pagado Actual:</b></h5>
                                <h5><?= number_format($mercantil['cappagado'], 2, ".", ",") ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="panel-heading">
                        <h5 style="font-size: 16px;" class="panel-title text-center"><b>Accionistas, Miembros de la Junta Directiva y Representantes Legales</b></h5>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="form-group col-12">
                                <h5><b>Nombres y Apellidos:</b></h5>
                                <h5><?= $accionistas['nomacc'] ?><?= $accionistas['apeacc'] ?> </h5>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>Ci. o Pasaporte</b></h5>
                                <h5><?= $accionistas['cedrif'] ?> </h5>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>Acc.</b></h5>
                                <h6><?php if ($accionistas['acc'] == '1') {
                                        echo "SI";
                                    } else {
                                        echo "NO";
                                    } ?> </h6>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>J.D</b></h5>
                                <h6><?php if ($accionistas['jd'] == '1') {
                                        echo "SI";
                                    } else {
                                        echo "NO";
                                    } ?> </h6>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>R.L</b></h5>
                                <h6><?php if ($accionistas['rl'] == '1') {
                                        echo "SI";
                                    } else {
                                        echo "NO";
                                    } ?> </h6>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>% de Acciones</b></h5>
                                <h6><?= $accionistas['porcacc'] ?> </h6>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>Cargo</b></h5>
                                <h6><?= $accionistas['cargo'] ?> </h6>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>Obligación</b></h5>
                                <h6><?= $accionistas['tipobl'] ?> </h6>
                            </div>
                        </div>
                    </div>
                    <div class="panel-heading">
                        <h5 style="font-size: 16px;" class="panel-title text-center"><b>Comisario(s) de la Empresa</b></h5>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="form-group col-3">
                                <h5><b>Nombres y Apellidos:</b></h5>
                                <h5><?= $comisarios['nomcom'] ?><?= $comisarios['apecom'] ?> </h5>
                            </div>
                            <div class="form-group col-2">
                                <h5><b>Ci. o Pasaporte</b></h5>
                                <h5><?= $comisarios['cedcom'] ?> </h5>
                            </div>
                            <div class="form-group col-2">
                                <h5><b>Tipo de Comisario</b></h5>
                                <h5><?= $comisarios['tipocom'] ?> </h5>
                            </div>
                            <div class="form-group col-2">
                                <h5><b>Nro. Colegiado</b></h5>
                                <h5><?= $comisarios['cpc'] ?> </h5>
                            </div>
                            <div class="form-group col-2">
                                <h5><b>Vigente Hasta</b></h5>
                                <h5><?= $comisarios['fecdurcom_at'] ?> </h5>
                            </div>
                        </div>
                    </div>
                    <div class="panel-heading">
                        <h5 style="font-size: 16px;" class="panel-title text-center"><b>Actividades y Productos del Catálogo de Clasificación de Compras del Estado</b></h5>
                    </div>
                    <div class="panel-body">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                function printDiv(areaImprimir) {
                    //console.log('yeaghh');
                    var contenido = document.getElementById('imp1').innerHTML;
                    var contenidoOriginal = document.body.innerHTML;

                    document.body.innerHTML = contenido;

                    window.print();

                    document.body.innerHTML = contenidoOriginal;
                }
            </script>
