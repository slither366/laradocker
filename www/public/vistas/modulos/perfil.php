<?php
	$ctrPerfil = new ControladorPerfil();
	$listaPerfil = $ctrPerfil->ctrDetallePerfil();

	foreach ($listaPerfil as $verList){
		$nomPerfil = ucwords($verList['nom_jefezona']);
		$dniPerfil = $verList['dni_jefezona'];
		$mailPerfil = $verList['mail_jefezona'];
		$cargoPerfil = $verList['mail_jefezona'];
	}
?>
<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Perfil de Usuario

      <small>Resultados</small>
      
    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Perfil de Usuario</li>

    </ol>

  </section>
  <!-- Main content -->
  <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="vistas/img/usuarios/default/anonymous.png" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo ucwords($_SESSION["nomUser"]); ?></h3>

              <p class="text-muted text-center">Jefe Zonal</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Dni</b> <a class="pull-right"><?php echo $dniPerfil; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Nombre</b> <a class="pull-right"><?php echo ucwords($_SESSION["nomUser"]); ?></a>
                </li>
                <li class="list-group-item">
                  <b>Correo</b> <a class="pull-right"><?php echo $mailPerfil; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Cargo</b> <a class="pull-right">Jefe Zonal</a>
                </li>      
                <li class="list-group-item">
                  <b>Estado</b> <a class="pull-right"><span class="badge bg-green">Activo</span></a>
                </li>    
                <li class="list-group-item">
                  <b>Password</b> <a class="pull-right">*********</a>
                </li>                
              </ul>

              <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalAgregarUsuario">
              	<b>Actualizar Datos</b>
              </a>

            </div>
            <!-- /.box-body -->
          </div>

       	</div>
    </div>


  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->