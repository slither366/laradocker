 <?php

    $controlador = new ControladorRemesas();
    $detalleRemesa = $controlador -> ctrDetalleRemTard($_SESSION['depPendMes'], $_SESSION['depPendAno']);

  ?>
<style>

  #th_Titulo{
    text-align: center;
  }

  .th_num{
    text-align: center;
    width: 10px;
  }

  .th_local{
    text-align: center;
    width: 30px;
  }

  .th_remito{
    text-align: center;
    width: 30px;
  }

  .th_diapendiente,.th_fecsobre,.th_fecconsigna,.th_fecremito{
    text-align: center;
  }



</style>

<div class="content-wrapper">

  <section class="content-header">

    <h1>
      Detalle Remesas Tardes
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
                
        				<th class="th_num" id="th_Titulo">#</th>
        				<th class="th_local" id="th_Titulo">Local</th>
        				<th class="th_remito" id="th_Titulo">N° Remito</th>
                <th class="th_diapendiente" id="th_Titulo">Dia Pend</th>
        				<th class="th_fecsobre" id="th_Titulo">Fecha Sobre</th>
        				<th class="th_fecconsigna" id="th_Titulo">Fecha Consignada</th>
        				<th class="th_fecremito" id="th_Titulo">Fecha Remito</th>
        				<th class="th_diatoca" id="th_Titulo">Dias Toca</th>
        				<th class="th_monto" id="th_Titulo">Monto</th>               

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
                  <td class="th_remito"><?php echo $ctrDet['cod_remito'] ?></td>

                  <td class="th_diapendiente">
                      <?php
                        if($ctrDet['dif_day']=='1'){
                          echo '<span class="badge bg-green">1er Dia</span>';
                        }else if($ctrDet['dif_day']=='2'){
                          echo '<span class="badge bg-yellow">2do Dia</span>';
                        }else if($ctrDet['dif_day']=='3'){
                          echo '<span class="badge bg-orange">3er Dia</span>';
                        }else{
                          echo '<span class="badge bg-red">Mayor 4</span>';
                        }
                      ?>
                  </td>

                  <td class="th_fecsobre"><?php echo $ctrDet['fecha_creacion_sobre'] ?></td>
                  <td class="th_fecconsigna"><?php echo $ctrDet['fecha_consignada'] ?></td>
                  <td class="th_fecremito"><?php echo $ctrDet['fec_crea_remito'] ?></td>
                  <td class="th_diatoca">
                    
                      <?php
                        $weekday = str_split($ctrDet['dias_toca']);

                        if($weekday[0]=='1'){
                          echo '<span class="badge alert-info">Lunes</span>';
                        }

                        if($weekday[1]=='2'){
                          echo '<span class="badge alert-info">Martes</span>';
                        }

                        if($weekday[2]=='3'){
                          echo '<span class="badge alert-info">Miercoles</span>';
                        }

                        if($weekday[3]=='4'){
                          echo '<span class="badge alert-info">Jueves</span>';
                        }

                        if($weekday[4]=='5'){
                          echo '<span class="badge alert-info">Viernes</span>';
                        }

                        if($weekday[5]=='6'){
                          echo '<span class="badge alert-info">Sabado</span>';
                        }

                        if($weekday[6]=='7'){
                          echo '<span class="badge alert-info">Domingo</span>';
                        }                                                           

                      ?>

                  </td>
                  <td class="th_monto"><?php echo $ctrDet['monto'] ?></td>
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