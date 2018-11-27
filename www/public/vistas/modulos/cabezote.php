<header class="main-header">
	
	<!--==============================
	=            LOGOTIPO            =
	===============================-->
	
	<a href="" class="logo">
		
		<!-- logo min -->
		<span class="logo-mini">
			<!-- vistas/img/plantilla/icono-blanco.png -->
			<img src="#" class="img-responsive" style="padding: 10px">
		</span>
		<!-- logo normal -->
		<span class="logo-lg">
			<!-- vistas/img/plantilla/logo-blanco-lineal.png -->
			<img src="#" class="img-responsive" style="padding: 10px 0px">
		</span>
	</a>

	<!--=========================================
	=            BARRA DE NAVEGACIÓN            =
	==========================================-->
	<nav class="navbar navbar-static-top" role="navigation">

		<!-- Boton de navegaciòn -->
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">

        <span class="sr-only">Toggle navigation</span>
        <!--<span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>-->
      	</a>	

		<!-- perfil usuario -->
		<div class="navbar-custom-menu">
			
			<ul class="nav navbar-nav">

				<li class="dropdown user user-menu">

					<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<img src="vistas/img/usuarios/default/anonymous.png" class="user-image">

						<span class="hidden-xs"><?php echo $_SESSION["nomUser"];?></span>
					</a>

					<!-- Dropdown-toggle -->
					<ul class="dropdown-menu">

						<li class="user-body">
								
							<div class="pull-right">

								<a href="salir" class="btn btn-default btn-flat">Salir</a>
								
							</div>

						</li>
					</ul>					
				</li>
			</ul>
		</div> 


		   	   	

	</nav>

</header>