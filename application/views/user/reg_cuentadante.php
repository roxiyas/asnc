<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Inicio de Sesión</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="<?= base_url() ?>Plantilla/admin/assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>Plantilla/admin/assets/plugins/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>Plantilla/admin/assets/plugins/font-awesome/5.3/css/all.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>Plantilla/admin/assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>Plantilla/admin/assets/plugins/animate/animate.min.css" rel="stylesheet" />

    <link href="<?= base_url() ?>Plantilla/admin/assets/css/apple/style.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>Plantilla/admin/assets/css/apple/style-responsive.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>Plantilla/admin/assets/css/apple/theme/default.css" rel="stylesheet" id="theme" />

    <link href="<?= base_url() ?>Plantilla/admin/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>Plantilla/admin/assets/css/apple/theme/default.css" rel="stylesheet" id="theme" />
    <script src="<?= base_url() ?>Plantilla/admin/assets/plugins/pace/pace.min.js"></script>
    <script src="<?= base_url() ?>Plantilla/admin/assets/plugins/jquery/jquery-3.3.1.min.js"></script>
</head>

<body class="pace-top bg-white">
    <div id="page-loader" class="fade show"><span class="spinner"></span></div>

    <div id="page-container" class="fade">
        <div class="login login-with-news-feed" style="background: lightgrey;">
            <div class="brand text-center mt-2">
                <span class="logo"> <img src="<?= base_url() ?>Plantilla/img/company_logo.jpeg" alt=""> </span>
                <h4 class="mt-2">Registro de Cuentadante</h4>
            </div>
            <div class="col-md-12 mt-2 mb-2">
                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#myModal">
                    Registrar Organismo
                </button>

                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#modalentes">
                    Registrar Ente
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                    Registrar Unidad Ejecutora
                </button>
            </div>
            <div class="login-content">
                <form action="<?= base_url() ?>index.php/user/reg_cuentadante" method="POST" class="margin-bottom-0">
                    <div class="row">
                        <div class=" col-12 form-group">
                            <label>Seleccione Organismo/Ente/Unidad Ejecutora</label>
                            <select id="id_org" name="id_org" class="default-select2 form-control">
                                <option>Seleccione</option>
                                <optgroup label="Entes">
                                    <?php foreach ($entes as $data) : ?>
                                        <option value="<?= $data['id_entes'] ?>"><?= $data['desc_entes'] ?> / <?= $data['rif'] ?></option>
                                    <?php endforeach; ?>
                                </optgroup>
                                <optgroup label="Órganos">
                                    <?php foreach ($organo as $data) : ?>
                                        <option value="<?= $data['id_organo'] ?>"><?= $data['desc_organo'] ?> / <?= $data['rif'] ?></option>
                                    <?php endforeach; ?>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-2 form-group">
                            <label>Rif:</label>
                            <input type="text" class="form-control" name="rif" disabled />
                        </div>
                        <div class="col-2 form-group">
                            <label>Siglas</label>
                            <input type="text" class="form-control" name="siglas" disabled />
                        </div>
                        <div class="col-2 form-group">
                            <label>Código ONAPRE</label>
                            <input type="text" class="form-control" name="cod_onapre" disabled />
                        </div>
                        <div class="col-1 form-group">
                            <label>Clasificación</label>
                            <input type="password" class="form-control" name="clasificacion" disabled />
                        </div>
                        <div class="col-2 form-group">
                            <label>Correo</label>
                            <input type="text" class="form-control" name="correo" disabled />
                        </div>
                        <div class="col-3 form-group">
                            <label>Dirección Fiscal</label>
                            <input type="text" class="form-control" name="direccion_fiscal" disabled />
                        </div>
                        <div class="col-5 form-group">
                            <label style="margin-bottom: -1;">Nombre y Apellido de Funcionario Representante ante el SNC</label>
                            <label>(CUENTADANTE):</label>
                            <input type="text" class="form-control" name="nom_ape_cd" />
                        </div>
                        <div class="col-3 form-group">
                            <label style="margin-bottom: -1;">Teléfono</label><br>
                            <label>(CUENTADANTE):</label>
                            <input type="text" class="form-control" name="tel_cd" />
                        </div>
                        <div class="col-4 form-group">
                            <label style="margin-bottom: -1;">Correo Institucional</label><br>
                            <label>(CUENTADANTE):</label>
                            <input type="text" class="form-control" name="correo" />
                        </div>
                        <div class="col-4 form-group">
                            <label style="margin-bottom: -1;">Fecha</label><br>
                            <label> de la Gaceta o Resolución</label>
                            <input type="date" class="form-control" name="fecha" />
                        </div>
                        <div class="col-4 form-group">
                            <label class="mt-3">Nº de la Gaceta o Resolución</label><br>
                            <input type="text" class="form-control" name="n_gaceta" />
                        </div>
                        <div class="col-4 form-group">
                            <label class="mt-3">Observación</label><br>
                            <input type="text" class="form-control" name="observacion" />
                        </div>
                        <div class="col-4 form-group">
                            <label>Usuario</label><br>
                            <input type="text" class="form-control" name="usuario" />
                        </div>
                        <div class="col-4 form-group">
                            <label>Clave</label><br>
                            <input type="password" class="form-control" name="clave" />
                        </div>
                        <div class="col-4 form-group">
                            <label>Confirmar Clave</label><br>
                            <input type="password" class="form-control" name="conf_clave" />
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-12 login-buttons">
                            <button type="submit" class="btn btn-lg" style="background-color:darkred;color:#FFFFFF">Ingresar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Crear Organismo</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">Registro de Órganos</h4>
                                        </div>
                                        <div class="panel-body">
                                            <form action="<?= base_url() ?>index.php/configuracion/save_organismo" method="POST" class="form-horizontal">
                                                <div class="row">
                                                    <div class="form-group col-4">
                                                        <label>Órgano Perteneciente</label><br>
                                                        <select id="id_organoads" name="id_organoads" class="default-select2 form-control">
                                                            <?php foreach ($organo as $data) : ?>
                                                                <option>Seleccione</option>
                                                                <option value="0">Órgano Padre</option>
                                                                <option value="<?= $data['id_organo'] ?>"><?= $data['desc_organo'] ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-4">
                                                        <label>Órgano</label>
                                                        <input type="text" name="organo" class="form-control <?php echo form_error('organo') ? 'is-invalid' : ''; ?>" placeholder="Nombre" value="<?php echo set_value('organo'); ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('organo'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-4">
                                                        <label>Código ONAPRE</label>
                                                        <input type="text" name="cod_onapre" class="form-control <?php echo form_error('cod_onapre') ? 'is-invalid' : ''; ?>" placeholder="Código" value="<?php echo set_value('cod_onapre'); ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('cod_onapre'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-4">
                                                        <label>Siglas del Órgano</label>
                                                        <input type="text" name="siglas" class="form-control <?php echo form_error('siglas') ? 'is-invalid' : ''; ?>" placeholder="Código" value="<?php echo set_value('siglas'); ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('siglas'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <label>Rif del Órgano</label>
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <select id="tipo_rif" name="tipo_rif" class="default-select2 form-control">
                                                                    <?php foreach ($tipo_rif as $data) : ?>
                                                                        <option value="<?= $data['id_rif'] ?>"><?= $data['desc_rif'] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-9">
                                                                <input type="number" name="rif" class="form-control <?php echo form_error('rif') ? 'is-invalid' : ''; ?>" placeholder="Código" value="<?php echo set_value('rif'); ?>">
                                                                <div class="invalid-feedback">
                                                                    <?php echo form_error('rif'); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 form-group">
                                                        <label>Clasificación</label>
                                                        <select id="id_clasificacion" name="id_clasificacion" class="default-select2 form-control">
                                                            <option>Ejemplo</option>
                                                            <option value="1">Prueba</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-3 form-group">
                                                        <label>Teléfono Local</label>
                                                        <input type="text" class="form-control" name="tel_local" id="tel_local" placeholder="(999) 999-9999" />
                                                    </div>
                                                    <div class="col-3 form-group">
                                                        <label>Teléfono Local 2</label>
                                                        <input type="text" class="form-control" name="tel_local_2" id="tel_local_2" placeholder="(999) 999-9999" />
                                                    </div>
                                                    <div class="col-3 form-group">
                                                        <label>Teléfono Móvil</label>
                                                        <input type="text" class="form-control" name="tel_movil" id="tel_movil" placeholder="(999) 999-9999" />
                                                    </div>
                                                    <div class="col-3 form-group">
                                                        <label>Teléfono Móvil 2</label>
                                                        <input type="text" class="form-control" name="tel_movil_2" id="tel_movil_2" placeholder="(999) 999-9999" />
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label>Página Web</label>
                                                        <input type="text" name="pag_web" class="form-control <?php echo form_error('pag_web') ? 'is-invalid' : ''; ?>" placeholder="Nombre" value="<?php echo set_value('pag_web'); ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('pag_web'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label>Correo Electronico</label>
                                                        <input type="email" name="email" class="form-control <?php echo form_error('email') ? 'is-invalid' : ''; ?>" placeholder="Nombre" value="<?php echo set_value('email'); ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('email'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <ul class="nav nav-tabs" style="background: #080808;">
                                                        <li class="nav-items">
                                                            <a href="#direccion_fiscal" data-toggle="tab" class="nav-link active">
                                                                <span class="d-sm-none">Tab 1</span>
                                                                <span class="d-sm-block d-none">Dirección Fiscal</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-items">
                                                            <a href="#datos-legales" data-toggle="tab" class="nav-link">
                                                                <span class="d-sm-none">Tab 2</span>
                                                                <span class="d-sm-block d-none">Datos Legales</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade active show" id="direccion_fiscal">
                                                            <div class="row">
                                                                <div class="form-group col-4">
                                                                    <label>Estado</label>
                                                                    <select id="id_estado" name="id_estado" class="default-select2 form-control">
                                                                        <option>Seleccione</option>
                                                                        <?php foreach ($estados as $data) : ?>
                                                                            <option value="<?= $data['id_estado'] ?>"><?= $data['descripcion'] ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-4">
                                                                    <label>Municipio</label>
                                                                    <select id="id_municipio" name="id_municipio" class="default-select2 form-control">
                                                                        <option>Seleccione</option>
                                                                        <option value="1">Libertador</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-4">
                                                                    <label>Parroquia</label>
                                                                    <select id="id_parroquia" name="id_parroquia" class="default-select2 form-control">
                                                                        <option>Seleccione</option>
                                                                        <option value="1">Catia</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-12">
                                                                    <label>Dirección</label>
                                                                    <textarea class="form-control" id="direccion_fiscal" name="direccion_fiscal" rows="3" cols="125"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="datos-legales">
                                                            <div class="row">
                                                                <div class="form-group col-6">
                                                                    <label>Gaceta Oficial</label>
                                                                    <input type="text" name="gaceta_oficial" class="form-control <?php echo form_error('gaceta_oficial') ? 'is-invalid' : ''; ?>" value="<?php echo set_value('gaceta_oficial'); ?>">
                                                                    <div class="invalid-feedback">
                                                                        <?php echo form_error('gaceta_oficial'); ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <label>Fecha de Gaceta</label>
                                                                    <input type="date" class="form-control" name="fecha_gaceta" placeholder="Seleccionar Fecha" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-center">
                                                        <button type="submit" class="btn btn-success" style="color: black;">Guardar</button>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">

                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
           <!--  modal de entes-->
            <?php if ($this->session->flashdata('sa-success2')) { ?>
                <div hidden id="sa-success2"> <?= $this->session->flashdata('sa-success2') ?> </div>
            <?php } ?>
            <script src="<?= base_url() ?>/js/dependientes.js"></script>