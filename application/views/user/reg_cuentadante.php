<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Inicio de Sesión</title>
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
		<meta content="" name="description" />
		<meta content="" name="author" />

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
		<link href="<?=base_url()?>Plantilla/admin/assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
		<link href="<?=base_url()?>Plantilla/admin/assets/plugins/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?=base_url()?>Plantilla/admin/assets/plugins/font-awesome/5.3/css/all.min.css" rel="stylesheet" />
		<link href="<?=base_url()?>Plantilla/admin/assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
		<link href="<?=base_url()?>Plantilla/admin/assets/plugins/animate/animate.min.css" rel="stylesheet" />

		<link href="<?=base_url()?>Plantilla/admin/assets/css/apple/style.min.css" rel="stylesheet" />
		<link href="<?=base_url()?>Plantilla/admin/assets/css/apple/style-responsive.min.css" rel="stylesheet" />
        <link href="<?=base_url()?>Plantilla/admin/assets/css/apple/theme/default.css" rel="stylesheet" id="theme" />

        <link href="<?=base_url()?>Plantilla/admin/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
		<link href="<?=base_url()?>Plantilla/admin/assets/css/apple/theme/default.css" rel="stylesheet" id="theme" />
		<script src="<?=base_url()?>Plantilla/admin/assets/plugins/pace/pace.min.js"></script>
        <script src="<?=base_url()?>Plantilla/admin/assets/plugins/jquery/jquery-3.3.1.min.js"></script>
	</head>
	<body class="pace-top bg-white">
		<div id="page-loader" class="fade show"><span class="spinner"></span></div>

        <div id="page-container" class="fade">
		<div class="login login-with-news-feed" style="background: lightgrey;">
				<div class="brand text-center mt-2">
					<span class="logo"> <img src="<?=base_url()?>Plantilla/img/company_logo.jpeg" alt=""> </span>
                    <h4 class="mt-2">Registro de Cuentadante</h4>
				</div>
			<div class="login-content">
                <form action="<?=base_url()?>index.php/user/reg_cuentadante" method="POST" class="margin-bottom-0">
                    <div class="row">
                        <div class=" col-12 form-group">
                            <label>Organo</label>
                            <select id="id_org" name="id_org" class="default-select2 form-control">
                                <option>Seleccione</option>
								<optgroup label="Entes">
                                    <?php foreach ($entes as $data): ?>
                                        <option value="<?=$data['id_entes']?>"><?=$data['desc_entes']?> / <?=$data['rif']?></option>
                                    <?php endforeach; ?>
                                </optgroup>
                                <optgroup label="Órganos">
                                    <?php foreach ($organo as $data): ?>
                                        <option value="<?=$data['id_organo']?>"><?=$data['desc_organo']?> / <?=$data['rif']?></option>
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
		</div>
<script src="<?=base_url()?>/js/dependientes.js"></script>
