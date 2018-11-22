<?php 

  $ctrRemesas = new ControladorRemesas();

  $totalAnos = $ctrRemesas->ctrCantAnoRemesaTarde();
  $totalMeses = $ctrRemesas->ctrCantMesRemesaTarde();
  //$ctrCantlocDetDepPend = $ctrDepoPend->ctrCantlocDetDepPend('10');

?>

<!--=================================================
=            MODAL DE REMESA PENDIENTE              =
==================================================-->
<div id="modalRemesaTarde" class="modal fade" role="dialog" aria-hidden="true" tabindex="-1">

  <div class="modal-dialog">

    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data">

      <!--====================================
      =            CABEZA DEL MODAL          =
      =====================================-->
      <div class="modal-header" style="background:#3c8dbc; color:white;">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Opciones Filtro Remesas Tardes</h4>

      </div>

      <!--======================================
      =            CUERPO DEL MODAL            =
      =======================================-->
      <div class="modal-body">

        <div class="box-body">

          <!-- SELECCIONAR AÑO -->
          <div class="row">

            <div class="col-xs-12">

              <div class="box box-default">

                <div class="box-header with-border">

                  <h3 class="box-title">Selecciona Año:</h3>

                </div>

                <div class="box-body">

                  <div class="btn-group" data-toggle="buttons" >

                  <?php

                  foreach($totalAnos as $ctrDepo)
                    {
                  ?>

                      <label class="btn btn-danger" onclick="setRemTardAno(<?php echo $ctrDepo['tot']; ?>);">

                        <input type="radio" name="cajasAno"><?php echo $ctrDepo['tot']; ?></input>

                      </label>

                  <?php 
                    }
                  ?>                      
                    <input type="hidden" class="form-control" name="txtModal4Ano" id="txtModal4Ano"></input>

                    <input type="hidden" class="form-control" name="txtModal4Mes" id="txtModal4Mes"></input>

                  </div> 

                </div>

              </div>

            </div>

            <!-- SELECCIONAR MES -->
            <div class="row">

              <div class="col-xs-12">

                <div class="box box-default">

                  <div class="box-header with-border">

                    <h3 class="box-title">Selecciona Mes:</h3>

                  </div>

                  <div class="box-body">

                    <div class="btn-group" data-toggle="buttons" >

                      <?php
                      foreach($totalMeses as $ctrDepo)
                      {
                        ?>
                        <label class="btn btn-primary" id="lblMeses" onclick="setRemTardMes(<?php echo "'".$ctrDepo['numMes']."'"; ?>,'txtModal4Mes');">
                          <input type="radio" name="cajasMes"><?php echo $ctrDepo['nameMes']; ?></input>

                          <span class="badge bg-yellow">
                            <?php echo $ctrRemesas->ctrCantLocRemesaTarde($ctrDepo['numMes'],'2018'); ?>
                          </span>


                        </label>
                        <?php
                      }
                      ?>

                    </div>

                  </div>

                </div>

              </div>

            </div> 

          </div>

        </div>

      </div>
      <!--===================================
      =            PIE DEL MODAL            =
      ====================================-->
      <div class="modal-footer">

        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

        <button type="submit" class="btn btn-primary" id="submitModalRemTard" disabled="true">Ver Detalle</button>

      </div>

      <?php

        /*----------  Tiene su función de Redireccionar la Web  ----------*/
        $open = new ControladorRemesas();
        $open -> ctrenvioRemesaTarde();
        
      ?>

    </form>

    </div>

  </div>

</div>