<?php

  $ctrTransPend = new ControladorTransferencias();
  $listTransPendCab = $ctrTransPend->ctrTransPendCabecera();
/*
  public function llenar($valor){
    $_SESSION['subject'] =  $valor;
  }
*/
?>
<script type="text/javascript">
/*
  function setNumNota(codlocal,numNota){

    $('#txtcodlocal').val(codlocal);
    $('#txtnumnota').val(numNota);

      $("#submit-button").submit(function(e){
        $('#modalTransferencias').modal('show');
        return false;
      });

  }  
*/
  /*
    $("#modalTransferencias").on('show.bs.modal', function (e) {

        var bookId = $(e.relatedTarget).data('book-id');

        $(this).find('input[name="bookId"]').val(bookId);
        
    });
*/

</script>

<style>

  label {
    margin-right: 10px;
    margin-top: 10px;
  }

  .modal {
    overflow-x: auto;
  }

</style>

<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Transferencias Pendientes

      <small>Resultados</small>
      
    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Transferencias Pendientes</li>

    </ol>

  </section>

  <section class="content">              

    <div class="box">

      <div class="box-body">

        <?php
          foreach ($listTransPendCab as $verList) {
        ?>

          <div class="col-md-3">

            <div class="box box-warning box-solid">

              <div class="box-header with-border">

                <h3 class="box-title">

                  <?php echo 'De Local: <b>('.$verList['cod_origen_nota_es'].'</b> a <b>'.$verList['cod_destino_nota_es'].')</b>'; ?>

                </h3>

                <div class="box-tools pull-right">

                  <!-- Boton para Colapsar la ventana -->
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                </div>
            
              </div>
            
              <div class="box-body">

                <p>Fecha Crea: <?php echo '<b>'.$verList['fec_crea_nota_es_cab'].'</b>'; ?></p>

                <p>N°Nota: <?php echo '<b>'.$verList['num_nota_es'].'</b>'; ?></p>
                
                <!--  -->
                <button type="button" class="btn btn-block btn-success btn-flat" data-toggle="modal"  id="btnTransferencias" data-target="#<?php echo $verList['cod_origen_nota_es'].$verList['num_nota_es'];?>">

                  Ver Detalle

                </button>  

              </div>
            
            </div>
            
          </div>


          <!--=================================================
          =            MODAL DE DEPOSITO PENDIENTE            =
          ==================================================-->
          <div id="<?php echo $verList['cod_origen_nota_es'].$verList['num_nota_es'];?>" class="modal fade" role="dialog" aria-hidden="true" tabindex="-1">

            <?php

              $listTransPendDet = $ctrTransPend->ctrTransPendDetalle($verList['cod_origen_nota_es'],$verList['num_nota_es']);

            ?>

            <div class="modal-dialog">

              <div class="modal-content">

              <form role="form" method="post" enctype="multipart/form-data">

                <!--====================================
                =            CABEZA DEL MODAL          =
                =====================================-->
                <div class="modal-header" style="background:#3c8dbc; color:white;">

                  <button type="button" class="close" data-dismiss="modal">&times;</button>

                  <h4 class="modal-title">Detalle Transferencia:</h4>
                </div>

                <!--======================================
                =            CUERPO DEL MODAL            =
                =======================================-->
                <div class="modal-body">

                  <div class="box-body">
                    <!-- dt-responsive -->
                    <table class="table table-striped table-bordered table-responsive nowrap" id="tbDetalle">

                      <thead>
                        
                        <tr>
                          
                          <th class="th_num" style="width:5px;">N°</th>
                          <th class="th_local">Local</th>
                          <th class="th_fecha">N° Nota</th>
                          <th class="th_operacion">Prod</th>
                          <th class="th_moneda">Cant.Mov</th>

                        </tr>

                      </thead>

                      <tbody>

                        <?php

                          foreach($listTransPendDet as $loopDet)
                          {

                        ?>

                        <tr>

                            <td class="th_num" style="width:5px;"><?php echo $loopDet['sec_det_nota_es'] ?></td>
                            <td class="th_local"><?php echo $loopDet['cod_local'] ?></td>
                            <td class="th_fecha"><?php echo $loopDet['num_nota_es'] ?></td>
                            <td class="th_operacion"><?php echo $loopDet['cod_prod'] ?></td>
                            <td class="th_moneda"><?php echo $loopDet['cant_mov'] ?></td>

                        </tr>

                        <?php
                          }

                        ?>              
                       
                      </tbody>

                    </table>



                  </div>

                </div>
                <!--===================================
                =            PIE DEL MODAL            =
                ====================================-->
                <div class="modal-footer">

                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

                </div>

              </form>

              </div>

            </div>

          </div>


        <?php          
          }
        ?>
      </div>

    </div>
    
  </section>

</div>

