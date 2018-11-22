<?php

$ctrRemesas = new ControladorRemesas();
$cantRemPend = $ctrRemesas->ctrCantLocRemesaPendiente('11','2018');
$cantRemTard = $ctrRemesas->ctrCantLocRemesaTarde('11','2018');

?>

<script type="text/javascript">
  
  function limpiarCajas(){

    $('#txtModal3Ano').val("");
    $('#txtModal3Mes').val("")
    $('#submitModalRemPend').prop('disabled', true);

    $('#txtModal4Ano').val("");
    $('#txtModal4Mes').val("")
    $('#submitModalRemTard').prop('disabled', true);

  }

</script>

<style>

  label {
    margin-right: 10px;
    margin-top: 10px;
  }

</style>

<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Remesas Pendientes

      <small>Resultados</small>
      
    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Administrar usuarios</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-body">

        <!-- CAJA Transferencias Pendientes -->
        <div class="col-lg-3 col-xs-6">

          <div class="small-box bg-aqua">

            <div class="inner">

              <?php echo '<h3>'.$cantRemPend.'</h3>'.' (locales)'; ?> 

              <p>Remesas Pendientes</p>

            </div>

            <div class="icon">

              <i class="ion ion-bag"></i>

            </div>

            <!--====  href="depositoPendiente"  ====-->
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modalRemesaPendiente" id="verDet1" onclick="limpiarCajas();">Ver Detalle <i class="fa fa-arrow-circle-right"></i>
            </a>

          </div>

        </div>

        <!-- CAJA Deposito Pendiente -->
        <div class="col-lg-3 col-xs-6">

          <div class="small-box bg-green">

            <div class="inner">

              <?php echo '<h3>'.$cantRemTard.'</h3>'.' (locales)'; ?> 
              <p>Remesa Tarde</p>

            </div>

            <div class="icon">

              <i class="ion ion-stats-bars"></i>

            </div>

            <!--====  href="depositoTarde"  ====-->
            <!--  -->
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modalRemesaTarde" id="verDet2" onclick="limpiarCajas();">Ver Detalle <i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>
    
      </div>
      
    </div>

  </section>

</div>
