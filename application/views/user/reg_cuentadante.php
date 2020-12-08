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
			<div class="login login-with-news-feed">
				<div class="news-feed" style="    right: 613px;">
					<!-- <div class="news-image" style="background-image: url(<?=base_url()?>Plantilla/img/2.png);"></div> -->
                    <img class="mt-5 ml-4" style="background-repeat: no-repeat; width: 95%;" src="<?=base_url()?>Plantilla/img/rnc_1.jpg" alt="">
				</div>
				<div class="right-content" style=" width: 650px;">
					<div class="login-header">
						<div class="brand  text-center">
							<span class="logo">
								<i style="color:darkred" class="fas fa-user-shield"></i>
							</span>
							<b class="ml-3"> Bienvenido</b>
                            <h3 class="mt-3 ml-3"> Reegistro de Cuenta Dante</h3>
						</div>
						<div class="icon">
							<i class="fa fa-sign-in"></i>
						</div>
					</div>
					<div class="login-content" style="">
						<form action="<?=base_url()?>index.php/user/reg_cuentadante" method="POST" class="margin-bottom-0">
                            <div class="form-group m-b-15">
                                <label>Organo</label>
                                <select id="id_org" name="id_org" class="default-select2 form-control">
                                    <option>Seleccione</option>
                                    <?php foreach ($organo as $data): ?>
                                        <option value="<?=$data['id_organo']?>"><?=$data['desc_organo']?> / <?=$data['rif']?></option>
                                    <?php endforeach; ?>
								</select>
                            </div>
                            <div class="form-group m-b-15">
                                <label>Organo</label>
                                <select id="id_ente" name="id_ente" class="default-select2 form-control">
                                    <option>Seleccione</option>
								</select>
                            </div>
                            <div class="form-group m-b-15">
								<input type="text" class="form-control" placeholder="Usuario" name="usuario"required />
							</div>
							<div class="form-group m-b-15">
								<input type="password" class="form-control" placeholder="Contraseña" name="contrasena" required />
							</div>
							<div class="login-buttons">
								<button type="submit" class="btn btn-block btn-lg" style="background-color:darkred;color:#FFFFFF">Ingresar</button>
							</div>
							<hr />
						</form>
					</div>
				</div>
			</div>
		</div>
<script src="<?=base_url()?>/js/dependientes.js"></script>
