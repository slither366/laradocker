 <?php
    /*----------  RECORDAR: INCLUIR ESTOS CONTROLADORES EN EL INDEX  ----------*/
    
    $ctrDepositos = new ControladorDepositos();
    $ctrTransferencias = new ControladorTransferencias();
    $ctrRemesas = new ControladorRemesas();
    //ctrDepositoPendiente
    $varDepoPend = $ctrDepositos->ctrCantLocDepositoPendiente();
    $varDepoTarde = $ctrDepositos->ctrCantLocDepositoTarde();

    $locDepoTot = $varDepoPend + $varDepoTarde;

    $varTotTransferencia = $ctrTransferencias->ctrCantLocTransferenciaPend();

    $cantRemPend = $ctrRemesas->ctrCantLocRemesaPendiente('11','2018');
    $cantRemTard = $ctrRemesas->ctrCantLocRemesaTarde('11','2018');

    $totalLocRemPend = $cantRemPend + $cantRemTard;

  ?>

<div class="content-wrapper">

  <section class="content-header">

    <h1>
      Tablero Inicial

      <small>Panel de Control</small>

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Tablero</li>
    </ol>
    
  </section>

  <section class="content">

    <div class="row">

      <!-- CAJA Transferencias Pendientes -->
      <div class="col-lg-3 col-xs-6" >

        <div class="small-box bg-aqua">

          <div class="inner">

            <h3><?php echo $varTotTransferencia; ?></h3>

            <p>Transferencias </br>Pendientes</p>

          </div>

          <div class="icon">

            <i class="ion ion-bag"></i>

          </div>

          <a href="transferenciaPendiente" class="small-box-footer">Mas Información <i class="fa fa-arrow-circle-right"></i></a>

        </div>

      </div>

      <!-- CAJA Deposito Pendiente -->
      <div class="col-lg-3 col-xs-6">

        <div class="small-box bg-green">

          <div class="inner">

            <h3><?php echo $locDepoTot; ?></h3>

            <p>Depósitos </br>Bancarios</p>
          </div>

          <div class="icon">

            <i class="ion ion-stats-bars"></i>

          </div>

          <a href="depositoBancario" class="small-box-footer">Mas Información <i class="fa fa-arrow-circle-right"></i></a>

        </div>

      </div>

      <!-- CAJA Remesa Fuera de Rango -->
      <div class="col-lg-3 col-xs-6">

        <div class="small-box bg-yellow">

          <div class="inner">

            <h3><?php echo $totalLocRemPend; ?></h3>

            <p>Remesas Fuera </br>de Rango</p>

          </div>

          <div class="icon">

            <i class="ion ion-person-add"></i>

          </div>

          <a href="remesa" class="small-box-footer">Mas Información <i class="fa fa-arrow-circle-right"></i></a>

        </div>

      </div>

      <!-- CAJA Cierre de Dia Pendiente -->
      <div class="col-lg-3 col-xs-6">

        <div class="small-box bg-red">

          <div class="inner">

            <h3>0</h3>

            <p>Cierre de Día </br>Pendiente</p>

          </div>

          <div class="icon">

            <i class="ion ion-pie-graph"></i>

          </div>

          <a href="#" class="small-box-footer">Mas Información <i class="fa fa-arrow-circle-right"></i></a>

        </div>

      </div>

      <!-- CAJA Aculumacion de Deficit -->
      <div class="col-lg-3 col-xs-6">

        <div class="small-box bg-purple">

          <div class="inner">

            <h3>0</h3>

            <p>Acumulación de </br>Déficit Excesivo</p>

          </div>

          <div class="icon">

            <i class="ion ion-bag"></i>

          </div>

          <a href="#" class="small-box-footer">Mas Información <i class="fa fa-arrow-circle-right"></i></a>

        </div>

      </div>

      <!-- CAJA Cuadratura Anulación Pendiente -->
      <div class="col-lg-3 col-xs-6">

        <div class="small-box bg-lime">

          <div class="inner">

            <h3>0</h3>

            <p>Cuadratura de </br>Anulación Pendiente</p>

          </div>

          <div class="icon">

            <i class="ion ion-stats-bars"></i>

          </div>

          <a href="#" class="small-box-footer">Mas Información <i class="fa fa-arrow-circle-right"></i></a>

        </div>

      </div>

      <!-- CAJA Asl Pendiente -->
      <div class="col-lg-3 col-xs-6">

        <div class="small-box bg-light-blue">

          <div class="inner">

            <h3>0</h3>

            <p>Asl's </br>Pendientes</p>

          </div>

          <div class="icon">

            <i class="ion ion-person-add"></i>

          </div>

          <a href="#" class="small-box-footer">Mas Información <i class="fa fa-arrow-circle-right"></i></a>

        </div>

      </div>

    </div>

  </section>


</div>
<!-- /.content-wrapper -->