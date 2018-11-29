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
	              <img src="vistas/img/usuarios/default/anonymous.png" class="user-image" alt="User Image">
	              <span class="hidden-xs"><?php echo ucwords($_SESSION["nomUser"]); ?></span>
	            </a>
	            <ul class="dropdown-menu">
	              <!-- User image -->
	              <li class="user-header">
	                <img src="vistas/img/usuarios/default/anonymous.png" class="img-circle" alt="User Image">

	                <p>
	                  <?php echo ucwords($_SESSION["nomUser"]);?>
	                  <!--<small>Miembro desde Nov. 2012</small>-->
	                </p>
	              </li>
	              <!-- Menu Footer-->
	              <li class="user-footer">
	                <div class="pull-left">
	                  <a href="perfil" class="btn btn-default btn-flat">Perfil</a>
	                </div>
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