 <?php

    $controlador = new ControladorRemesas();
    $detalleRemesa = $controlador -> ctrDetalleRemPend($_SESSION['depPendMes'], $_SESSION['depPendAno']);

  ?>
<style>

  .th_num{
      text-align: center;
      width: 10px;
  }
 
</style>

<div class="content-wrapper">

  <section class="content-header">

    <h1>
      Detalle Remesas Pendientes
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
                <th class="th_fecha">Fecha Sobre</th>
                <th class="th_dia">Fecha Consignada</th>
              	<th class="th_local">Dias Toca</th>
                <th class="th_fecha">Monto</th>               

              </tr>

            </thead>

            <tbody>

              <?php

                foreach($detalleRemesa as $ctrDet)
                {

              ?>

              <tr>
                  <td class="th_num"><?php echo $ctrDet['rownum'] ?></td>
                  <td class="th_local"><?php echo $ctrDet['cod_local'] ?></td>
                  <td class="th_fecha"><?php echo $ctrDet['fecha_creacion_sobre'] ?></td>
                  <td class="th_dia"><?php echo $ctrDet['fecha_consignada'] ?></td>
                  <td class="th_dia"><?php echo $ctrDet['dias_toca'] ?></td>
                  <td class="th_dia"><?php echo $ctrDet['monto'] ?></td>
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