<?php

$ctrDepoPend = new ControladorDepositos();
$varDepoPend = $ctrDepoPend->ctrCantLocDepositoPendiente();
$varCantLocDepoTarde = $ctrDepoPend->ctrCantLocDepositoTarde();
 
?>

<script type="text/javascript">
  
  function limpiarCajas(){

    $('#txtModal1Ano').val("");
    $('#txtModal1Mes').val("")
    $('#submitModal1').prop('disabled', true);
    $('#modal2txtMes').val("");
    $('#modal2txtAno').val("");
    $('#modal2txtSemaforo').val("");
    $('#submitModal2').prop('disabled', true);  

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

      Depósitos Bancarios Pendientes

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

              <h3 id="valH3DepPend"><?php echo $varDepoPend; ?></h3>

              <p>Deposito Pendiente</p>

            </div>

            <div class="icon">

              <i class="ion ion-bag"></i>

            </div>

            <!--====  href="depositoPendiente"  ====-->
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modalFiltroPendientes" id="verDet1" onclick="limpiarCajas();">Ver Detalle <i class="fa fa-arrow-circle-right"></i>
            </a>

          </div>

        </div>

        <!-- CAJA Deposito Pendiente -->
        <div class="col-lg-3 col-xs-6">

          <div class="small-box bg-green">

            <div class="inner">

              <h3 id="valH3DepTarde"><?php echo $varCantLocDepoTarde;?></h3>

              <p>Deposito Tarde</p>

            </div>

            <div class="icon">

              <i class="ion ion-stats-bars"></i>

            </div>

            <!--====  href="depositoTarde"  ====-->
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modalFiltroTardes" id="verDet2" onclick="limpiarCajas();">Ver Detalle <i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>
    
      </div>
      
    </div>

  </section>

</div>
