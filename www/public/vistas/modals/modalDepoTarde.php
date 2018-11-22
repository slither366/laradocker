<?php 

  $ctrDepoPend = new ControladorDepositos();
  $varCantLocDepoTarde = $ctrDepoPend->ctrCantLocDepositoTarde();
  $ctrDepoTardeAno = $ctrDepoPend->ctrDepoTardeAno();
  $ctrDepoTardeMes = $ctrDepoPend->ctrDepoTardeMes();

  //$david = $ctrDepoPend->ctrCantlocDetDepTarde('10');
?>
<style>

  label {
    margin-right: 10px;
    margin-top: 10px;
  }

</style>

<!--=============================================
=            MODAL DE DEPOSITO TARDE            =
==============================================-->
<div id="modalFiltroTardes" class="modal fade" role="dialog" aria-hidden="true" tabindex="-1">

  <div class="modal-dialog">

    <div class="modal-content">


    <form role="form" method="post" enctype="multipart/form-data">

      <!--====================================
      =            CABEZA DEL MODAL          =
      =====================================-->
      <div class="modal-header" style="background:#3c8dbc; color:white;">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Opciones Filtro Tarde</h4>

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

                  foreach($ctrDepoTardeAno as $ctrDepo)
                    {
                  ?>

                      <label class="btn btn-danger" onclick="setDepoTarAno(<?php echo "'".$ctrDepo['tot']."'"; ?>);">

                        <input type="radio" name="cajasAno"><?php echo $ctrDepo['tot']; ?></input>

                      </label>

                  <?php 
                    }
                  ?>

                  </div> 

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
                    foreach($ctrDepoTardeMes as $ctrDepo)
                    {
                      ?>
                      <label class="btn btn-primary" id="lblMeses" onclick="setDepoTarMes(<?php echo "'".$ctrDepo['numMes']."'"; ?>);">
                        <input type="radio" name="cajasMes"><?php echo $ctrDepo['nameMes']; ?></input>
                        <span class="badge bg-yellow">
                            <?php echo $ctrDepoPend->ctrCantlocDetDepTarde($ctrDepo['numMes']); ?> Locales 
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

          <!-- SELECCIONAR SEMAFORO -->
          <div class="row">

            <div class="col-xs-12">

              <div class="box box-default">

                <div class="box-header with-border">

                  <h3 class="box-title">Selecciona Semaforo:</h3>

                </div>

                <div class="box-body">

                  <div class="btn-group" data-toggle="buttons" >
                    
                    <!-- setDepoTarSema: llena las cajas Ocultas -->
                    <label class="btn btn-primary"  onclick="setDepoTarSema('1');">
                      <input type="radio" name="cajasMes">Dentro Dia 1</input>
                    </label>

                    <label class="btn btn-warning" onclick="setDepoTarSema('2');">
                      <input type="radio" name="cajasMes">Dentro Dia 2</input>
                    </label>

                    <label class="btn btn-danger" onclick="setDepoTarSema('3');">
                      <input type="radio" name="cajasMes">Dentro Dia 3</input>
                    </label>

                    <label class="btn bg-purple" onclick="setDepoTarSema('9');">
                      <input type="radio" name="cajasMes">Mayor a 4</input>
                    </label>

                    <label class="btn btn-success" onclick="setDepoTarSema('todos');">
                      <input type="radio" name="cajasMes">Todos</input>
                    </label>                      

                  </div>

                </div>

              </div>

            </div>

          </div>           

          <input type="hidden" class="form-control" name="txtModal2Ano" id="modal2txtAno" required></input>

          <input type="hidden" class="form-control txtmodal2" name="txtModal2Mes" id="modal2txtMes" required></input>

          <input type="hidden" class="form-control" name="txtModal2Semaforo" id="modal2txtSemaforo" required></input>

        </div>

      </div>

      <!--===================================
      =            PIE DEL MODAL            =
      ====================================-->
      <div class="modal-footer">

        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

        <button type="submit" class="btn btn-primary" id="submitModal2" disabled="true">Ver Detalle</button>

      </div>

      <?php

        /*----------  Tiene su función de Redireccionar la Web  ----------*/
        $open = new ControladorDepositos();
        $open -> ctrenvioDepositoTarde();

      ?>

    </form>

    </div>

  </div>

</div>