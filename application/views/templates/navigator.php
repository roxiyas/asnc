<div id="page-loader" class="fade show"><span class="spinner"></span></div>
<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
	<div id="header" class="header navbar-default">
		<div class="navbar-header">
			<a class="navbar-brand">
				<span class="navbar-logo">
					<i style="color:darkred" class="fas fa-briefcase"></i>
				</span>
				<b> Sistema Integrado SNC</b>
			</a>

		</div>
		<ul class="navbar-nav navbar-right">
			<li class="dropdown navbar-user">
				<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
					<img src="<?=base_url()?>Plantilla/admin/assets/img/user/user-13.jpg" alt="" />
					<span class="d-none d-md-inline"><?=$this->session->userdata('nombre')?></span>
					<b class="caret"></b>
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
						</div>
						<div class="info text-center">
							<b class=""></b>
							<?= $this->session->userdata('nombre') ?>
							<small>Bienvenido</small>
						</div>
					</a>
				</li>
				<li>
					<a href="<?=base_url()?>index.php/programacion">
						<i class="fas fa-calendar" style="background:darkred;"></i>
						Programación Anual
					</a>
				</li
				<li class="nav-header"></li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="ion-md-settings fa-spin" style="background:darkred;"></i>Configuraciones
						</a>
						<ul class="sub-menu">
							<li>
								<a href="<?=base_url()?>index.php/configuracion/organismo">
									<i class="fas fa-lg fa-fw m-r-10 fa-landmark"></i>Organismos
								</a>
							</li>
							<li>
								<a href="<?=base_url()?>index.php/configuracion/entes">
									<i class="fas fa-lg fa-fw m-r-10 fa-building"></i>Entes</li>
								</a>
							</li>
							<li>
								<a href="<?=base_url()?>index.php/configuracion/entes_adscritos">
									<i class="fas fa-lg fa-fw m-r-10 fa-city"></i>Entes Adscritos
								</a>
							</li>
						</ul>
					</li>
				</li>
				<li class="nav-header"></li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fas fa-user" style="background:darkred;"></i>Tablas
						</a>
						<ul class="sub-menu">
							<li>
								<a href="<?=base_url()?>index.php/Fuentefinanc/index">
									<i class="fas fa-lg fa-fw m-r-10 fa-list-alt"></i>Fuente de Financiamiento
								</a>
							</li>
						</ul>
					</li>
				</li>
				<li class="nav-header"></li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fas fa-user" style="background:darkred;"></i>Usuarios
						</a>
						<ul class="sub-menu">
							<li>
								<a href="<?=base_url()?>index.php/user">
									<i class="fas fa-lg fa-fw m-r-10 fa-list-alt"></i>Registros
								</a>
							</li>
						</ul>
					</li>
				</li>
			</ul>

		</div>
	</div>
	<div class="sidebar-bg"></div>
</div>
