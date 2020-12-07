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
		<script src="<?=base_url()?>Plantilla/admin/assets/plugins/pace/pace.min.js"></script>
	</head>
	<body class="pace-top bg-white">
		<div id="page-loader" class="fade show"><span class="spinner"></span></div>
		<div id="page-container" class="fade">
			<div class="login login-with-news-feed">
				<div class="news-feed">
					<div class="news-image" style="background-image: url(<?=base_url()?>Plantilla/admin/assets/img/gallery/gallery-portrait-11-thumb.jpg);"></div>
					<div class="news-caption">
					</div>
				</div>
				<div class="right-content" style="padding-top:7%">
					<div class="login-header">
						<div class="brand">
							<span class="logo"><i style="color:#007aff" class="ion-md-laptop"></i></span><b>Sistema Nacional de Contrataciones</b>
						</div>
						<div class="icon">
							<i class="fa fa-sign-in"></i>
						</div>
					</div>
					<div class="login-content">
						<form action="<?=base_url()?>index.php/login/validacion" method="POST" class="margin-bottom-0">
							<div class="form-group m-b-15">
								<input type="text" class="form-control form-control-lg" placeholder="Usuario" name="usuario"required />
							</div>
							<div class="form-group m-b-15">
								<input type="password" class="form-control form-control-lg" placeholder="Contraseña" name="contrasena" required />
							</div>
							<div class="login-buttons">
								<button type="submit" class="btn btn-block btn-lg" style="background-color:#007aff;color:#FFFFFF">Ingresar</button>
							</div>
							<hr />
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- ================== BEGIN BASE JS ================== -->
		<script src="<?=base_url()?>Plantilla/admin/assets/plugins/jquery/jquery-3.3.1.min.js"></script>
		<script src="<?=base_url()?>Plantilla/admin/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
		<script src="<?=base_url()?>Plantilla/admin/assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
		<script src="<?=base_url()?>Plantilla/admin/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		<script src="<?=base_url()?>Plantilla/admin/assets/plugins/js-cookie/js.cookie.js"></script>
		<script src="<?=base_url()?>Plantilla/admin/assets/js/theme/apple.min.js"></script>
		<script src="<?=base_url()?>Plantilla/admin/assets/js/apps.min.js"></script>
		<!-- ================== END BASE JS ================== -->

		<script>
			$(document).ready(function() {
				App.init();
			});
		</script>
		<script>
		  	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  	ga('create', 'UA-53034621-1', 'auto');
		  	ga('send', 'pageview');

		</script>
	</body>
</html>
