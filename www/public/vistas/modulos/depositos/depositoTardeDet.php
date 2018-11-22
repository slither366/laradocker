  
  <?php
 
    $controlador = new ControladorDepositos();
    $detalleDepositoTar= $controlador -> ctrDetalleDepoTarde($_SESSION['depPendMes'], $_SESSION['depPendAno'],  $_SESSION['depPendSem']);
  ?>
<style>

  #depTarTit{
    text-align: center;
  }

  .th_num{
      text-align: center;
      width: 10px;
  }

  .th_local{
      text-align: center;
      width: 20px;
  }

  .th_semaforo{
    text-align: center;
    width: 50px; 
  }
 
  .th_fecha{
      text-align: right;
      width: 170px;
  }

  .th_operacion{
      text-align: right;
      width: 200px;
  }

  .th_moneda{
    text-align: center;
    width: 70px;  
  }

  .th_monto{
    text-align: right;
  }
  
  .th_numOper{
    text-align: center;
  }


 
</style>

<script type="text/javascript">

  $(document).ready(function(){

  });
</script>

<div class="content-wrapper">

  <section class="content-header">

    <h1>
      Detalle Depósitos Tarde
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
                
                <th class="th_num" id="depTarTit">#</th>
                <th class="th_local" id="depTarTit">Local</th>
                <th class="th_semaforo" id="depTarTit">Tarde</th>                
                <th class="th_fecha" id="depTarTit">Fecha Cierre</th>
                <th class="th_operacion" id="depTarTit">Op.Bancaria</th>
                <th class="th_numOper" id="depTarTit">Num. Operación</th>
                <th class="th_moneda" id="depTarTit">Moneda</th>
                <th class="th_monto" id="depTarTit">Monto</th>

              </tr>

            </thead>

            <tbody>

              <?php

                foreach($detalleDepositoTar as $loopDet)
                {

              ?>

              <tr>
                  <td class="th_num"><?php echo $loopDet['rownum'] ?></td>
                  <td class="th_local"><?php echo $loopDet['cod_local'] ?></td>
                  <td class="th_semaforo">
                    
                    <?php
                      if($loopDet['status']=='1'){
                        echo '<span class="badge bg-blue">1 dia</span>';
                      }else if($loopDet['status']=='2'){
                        echo '<span class="badge bg-yellow">2 dia</span>';
                      }else if($loopDet['status']=='3'){
                        echo '<span class="badge bg-orange">3 dia</span>';
                      }else if($loopDet['status']>'3'){
                        echo '<span class="badge bg-red">> 4 dia</span>';
                      }
                    ?>

                  </td>                  
                  <td class="th_fecha">
                    <?php echo '<span class="badge alert-info">'.$loopDet["day_cierre"].'</span>'.' '.$loopDet['fecha_cierre_dia']; ?>
                      
                  </td>
                  <td class="th_operacion"><?php echo '<span class="badge bg-purple">'.$loopDet["day_op"].'</span>'.' '.$loopDet['fecha_op_bancaria'] ?></td>
                  <td class="th_numOper"><?php echo $loopDet['num_operacion'] ?></td>
                  <td class="th_moneda"><?php echo $loopDet['moneda'] ?></td>
                  <td class="th_monto"><?php echo $loopDet['monto_deposito'] ?></td>

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