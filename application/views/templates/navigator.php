<div id="page-loader" class="fade show"><span class="spinner"></span></div>
<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<div id="header" class="header navbar-default">
			<div class="navbar-header">
				<a href="index.html" class="navbar-brand"><span class="navbar-logo"><i style="color:darkred" class="fas fa-briefcase"></i></span> <b>Sistema Integrado</b> SNC</a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<ul class="navbar-nav navbar-right">
				<li></li>
				<li class="dropdown"></li>
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
							<div class="image text-center ml-5">
								<img src="<?=base_url()?>Plantilla/admin/assets/img/user/user-13.jpg" alt="" />
							</div>
							<div class="info ml-5">
								<b class=""></b>
								<?= $this->session->userdata('nombre') ?>
								<small>Bienvenido</small>
							</div>
						</a>
					</li>
					<!-- <li>
						<ul class="nav nav-profile">
							<li><a href="javascript:;"><i class="ion-ios-cog"></i> Settings</a></li>
							<li><a href="javascript:;"><i class="ion-ios-share-alt"></i> Send Feedback</a></li>
							<li><a href="javascript:;"><i class="ion-ios-help"></i> Helps</a></li>
						</ul>
					</li> -->
				</ul>
				<ul class="nav">
						<li class="nav-header">Navegador</li>
						<?php if (($this->session->userdata('perfil') == 1) ||  ($this->session->userdata('perfil') <= 3)): ?>
							<li class="has-sub">
								<a href="javascript:;">
									<b class="caret"></b>
									<i class="ion-ios-briefcase" style="background:darkred;"></i>
									<span>Programación</span>
								</a>
								<ul class="sub-menu">
									<li>
										<a href="<?=base_url()?>index.php/programacion">
											- Programación Anual
										</a>
									</li>
									<li><a>- Reprogramación</a></li>
								</ul>
							</li>
							<li class="has-sub">
								<a href="javascript:;">
									<b class="caret"></b>
									<i class="ion-ios-briefcase" style="background:darkred;"></i>
									<span>Reg. Evaluación de</span>
									<span class="ml-5">Desempeño</span>
								</a>
								<ul class="sub-menu">
									<li>
										<a href="<?=base_url()?>index.php/evaluacion_desempenio">- Registrar</a>
									</li>
									<li><a>- Reporte</a></li>
								</ul>
							</li>
						<?php endif; ?>

						<?php if (($this->session->userdata('perfil') == 1)): ?>
							<li class="has-sub">
								<a href="javascript:;">
									<b class="caret"></b>
									<i class="ion-md-settings fa-spin" style="background:darkred;"></i>
									<span>Configuraciones</span>
								</a>
								<ul class="sub-menu">
									<li>
										<a href="<?=base_url()?>index.php/configuracion/organismo">
											<i class="fas fa-lg fa-fw m-r-10 fa-landmark"></i>Organismos
										</a>
									</li>
									<li>
										<a href="<?=base_url()?>index.php/configuracion/entes">
											<i class="fas fa-lg fa-fw m-r-10 fa-building"></i>Entes
										</a>
									</li>
									<li>
										<a href="<?=base_url()?>index.php/configuracion/entes_adscritos">
											<i class="fas fa-lg fa-fw m-r-10 fa-city"></i>Entes Adscritos
										</a>
									</li>
								</ul>
							</li>
							<li class="has-sub">
								<a href="javascript:;">
									<b class="caret"></b>
									<i class="ion-ios-color-filter" style="background:darkred;"></i>
									<span>Tablas Parametros</span>
								</a>
								<ul class="sub-menu">
									<li>
										<a href="<?=base_url()?>index.php/Fuentefinanc/index">
											- Fuente de Financiamiento
										</a>
									</li>
									<li>
										<a href="<?=base_url()?>index.php/Fuentefinanc/alicuotaiva">
											- Alicuota
										</a>
									</li>
									<li>
										<a href="<?=base_url()?>index.php/Fuentefinanc/partidap">
											- Partida Presupuestaria
										</a>
									</li>
									<li>
										<a href="<?=base_url()?>index.php/Fuentefinanc/centra">
											- Acción Centralizada
										</a>
									</li>
									<li>
										<a href="<?=base_url()?>index.php/Fuentefinanc/und">
											- Unidad de Medida
										</a>
									</li>
									<li>
										<a href="<?=base_url()?>index.php/Fuentefinanc/ccnu">
											-
										</a>
									</li>
								</ul>
							</li>
							<li class="has-sub">
								<a href="javascript:;">
									<b class="caret"></b>
									<i class="fas fa-user" style="background:darkred;"></i>
									<span>Usuarios</span>
								</a>
								<ul class="sub-menu">
									<li>
										<a href="<?=base_url()?>index.php/user">
											<i class="fas fa-lg fa-fw m-r-10 fa-list-alt"></i>- Registros
										</a>
									</li>
								</ul>
							</li>
						<?php endif; ?>
						<li class="mt-5"><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="ion-ios-arrow-back"></i> <span>Cerrar Navegador</span></a></li>
				</ul>
			</div>
		</div>
		<div class="sidebar-bg"></div>
