
<!--===================================================
=            MODAL ACTUALIZAR DATOS PERFIL            =
====================================================-->

<div id="modalAgregarUsuario" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data">

      <!--====================================
      =            CABEZA DEL MODAL          =
      =====================================-->
      

      <div class="modal-header" style="background:#3c8dbc; color:white;">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Agregar Usuario</h4>

      </div>

      <!--======================================
      =            CUERPO DEL MODAL            =
      =======================================-->

      <div class="modal-body">

        <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                
                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" value="RAMOS AGUIRRE, ANA MARIA" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL DNI -->
            
            <div class="form-group">
              
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                
                <input type="text" class="form-control input-lg" name="nuevoDni" placeholder="Ingresar dni" disabled="disabled" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CORREO-->

            <div class="form-group">
              
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                
                <input type="text" class="form-control input-lg" name="nuevoCorreo" placeholder="Ingresar correo" value="aramos@mifarma.com.pe" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CARGO-->

            <div class="form-group">
              
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                
                <input type="text" class="form-control input-lg" name="nuevoCargo" placeholder="Ingresar cargo" disabled="disabled" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA CONTRASEÑA-->

            <div class="form-group">
              
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                
                <input type="text" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar contraseña" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA CONFIRMAR CONTRASEÑA-->

            <div class="form-group">
              
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                
                <input type="text" class="form-control input-lg" name="confirmaPassword" placeholder="Confirmar Contraseña" required>

              </div>

            </div>

            <!-- ENTRADA PARA SUBIR LA FOTO-->

            <div class="form-group">
              
              <div class="panel">SUBIR FOTO</div>

              <input type="file" id="nuevaFoto" name="nuevaFoto">

              <p class="help-block">Peso máximo de la foto 200 MB</p>

              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="100px">

            </div>

        </div>

      </div>

      <!--===================================
      =            PIE DEL MODAL            =
      ====================================-->

      <div class="modal-footer">
        
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

        <button type="submit" class="btn btn-primary">Guardar cambios</button>

      </div>



    </form>

    </div>

  </div>

</div>