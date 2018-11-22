
  <?php

    $controlador = new ControladorDepositos();
    $detalleDepositoPend = $controlador -> ctrDetalleDepoPend($_SESSION['depPendMes'], $_SESSION['depPendAno']);

  ?>
<style>

  .th_num{
      text-align: center;
      width: 10px;
  }
 
</style>

<script type="text/javascript">

  $(document).ready(function(){

  });
</script>

<div class="content-wrapper">

  <section class="content-header">

    <h1>
      Detalle Depósitos Pendientes
      <small>Resultados</small>

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Administrar usuarios</li>
    </ol>

  </section>

  <section class="content">

    <div class="box">
  
      <div class="box-header with-border">

      </div>

      <div class="box-body">

          <table class="table table-striped table-bordered dt-responsive nowrap tablas" id="tbDetalle">

            <thead>
              
              <tr>
                
                <th class="th_num">#</th>
                <th class="th_local">Local</th>
                <th class="th_fecha">Fecha</th>
                <th class="th_dia">Día</th>

              </tr>

            </thead>

            <tbody>

            <?php

                foreach($detalleDepositoPend as $ctrDet)
                {

              ?>

              <tr>
                  <td class="th_num"><?php echo $ctrDet['rownum'] ?></td>
                  <td class="th_local"><?php echo $ctrDet['cod_local'] ?></td>
                  <td class="th_fecha"><?php echo $ctrDet['fecha_mes'] ?></td>
                  <td class="th_dia"><?php echo $ctrDet['dia_cierre'] ?></td>
              </tr>

              <?php
                }

              ?>              
             
            </tbody>

          </table>
        
      </div>
      
    </div>

  </section>

</div>