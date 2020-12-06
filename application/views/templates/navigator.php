<div id="page-loader" class="fade show"><span class="spinner"></span></div>
<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
	<div id="header" class="header navbar-default">
		<div class="navbar-header">
			<a href="" class="navbar-brand"><span class="navbar-logo"><i style="color:#18AE28"
						class="fas fa-home"></i></span> <b>Sistema Nacional de Contrataciones</b> </a>

		</div>
		<ul class="navbar-nav navbar-right">
			<li class="dropdown navbar-user">
				<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
					<img src="<?=base_url()?>Plantilla/color-admin-v4.2/admin/assets/img/user/user-13.jpg" alt="" />
					<span class="d-none d-md-inline"><?=$this->session->userdata('nombre_ape')?></span> <b
						class="caret"></b>
				</a>
				<div class="dropdown-menu dropdown-menu-right">
					<a href="<?=base_url()?>index.php/login/logout" class="dropdown-item">Cerrar Sesión</a>
				</div>
			</li>
		</ul>
	</div>
	<div id="sidebar" class="sidebar">
		<div data-scrollbar="true" data-height="100%">
			<ul class="nav">
				<li class="nav-profile">
					<a href="javascript:;" data-toggle="nav-profile">
						<div class="cover with-shadow"></div>
						<div class="image">
							<img src="<?=base_url()?>Plantilla/color-admin-v4.2/admin/assets/img/user/user-13.jpg" alt="" />
						</div>
						<div class="info">
							<b class=""></b>
							<?= $this->session->userdata('nombre_ape') ?>
							<small>Bienvenido</small>
						</div>
					</a>
				</li>
			</ul>
			<ul class="nav">
				<li class="nav-header"></li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fas fa-user bg-primary"></i>Usuarios
						</a>
						<ul class="sub-menu">
							<li><a href="<?=base_url()?>index.php/user"><i class="fas fa-lg fa-fw m-r-10 fa-list-alt text-info"></i>Registros</a></li>
						</ul>
					</li>
				</li>
			</ul>
			<ul class="nav">
				<li class="nav-header"></li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="ion-md-settings fa-spin bg-primary"></i>Configuraciones
						</a>
						<ul class="sub-menu">
							<li><a href="<?=base_url()?>index.php/configuracion/organismo"><i class="fas fa-lg fa-fw m-r-10 fa-list-alt text-info"></i>Organismos</a></li>
							<li><a href="<?=base_url()?>index.php/configuracion/entes"><i class="fas fa-lg fa-fw m-r-10 fa-list-alt text-info"></i>Entes</a></li>
							<li><a href="<?=base_url()?>index.php/configuracion/unid_ejecutora"><i class="fas fa-lg fa-fw m-r-10 fa-list-alt text-info"></i>Unidad Ejecutora</a></li>
						</ul>
					</li>
				</li>
			</ul>
		</div>
	</div>
	<div class="sidebar-bg"></div>
</div>
