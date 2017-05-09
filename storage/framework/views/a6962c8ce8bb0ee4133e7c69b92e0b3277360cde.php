
<div class="container content-prin profile">
  <div class="row margin-top-10">
    <div class="headline-center-v2 headline-center-v2-dark margin-bottom-10">
      <h1 class="shop-h1" style="font-size: 30px;"><b>Registrar Docente </b></h1>
      <span class="bordered-icon"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
    </div>
    <div class="col-md-12">
      <div class="row equal-height-columns margin-bottom-10">
        <div class="container">
          <!-- Registro empresa-->

          <div id="registrar_empresa">
              <section class="content-header">
                  <div class="row">


                      <div class="col-xs-12" id="msj">
                          <?php if(isset($msj)): ?>
                          <div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom : -5px;margin-top : -5px;z-index:2;">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                           <?php echo e($msj); ?>

                          </div>
                          <?php endif; ?>

                      </div>
                  </div>
              </section>
              <section style="padding : 10px 25px 25px 25px;">
                  <div class="col-md-12">
                      <form role="form" id="form-docente" action="agregar-docente" method="POST" enctype="multipart/form-data">
                          <div class="box box-danger">
                              <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>">
                              <div class="box-body">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="nombres">Nombres:</label>
                                              <input type="text" class="form-control" id="nombres" name="nombre" placeholder="Nombres" required>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                            <label for="apellidos">Apellidos:</label>
                                            <input type="text" class="form-control" id="apellidos" name="apellido" placeholder="Apellidos" required>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                            <label for="apellidos">Tipo de Identificacion:</label>
                                            <select class=" selectpicker form-control" name="tipo_identificacion" >
                                              <option value="cedula">Cedula</option>
                                              <option value="tidentidad">Tarjeta de Identidad</option>
                                            </select>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="identificacion">Identificacion:</label>
                                              <input type="number" class="form-control" id="identificacion" name="identificacion" placeholder="Identificacion" required>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="telefono">Telefono:</label>
                                              <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="correo">Correo:</label>
                                              <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" required>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="direccion">Direccion:</label>
                                              <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="codigo">Codigo:</label>
                                              <input type="number" class="form-control" id="codigo" name="codigo" placeholder="Codigo" required>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="usuario">Usuario:</label>
                                              <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
                                          </div>
                                      </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="pwd">Contraseña:</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                                        </div>
                                    </div>
                                  </div>
                              </div>


                              <!-- /.box-body -->
                              <div class="box-footer">
                                <div class="row">
                                  <div class="col-md-6">
                                    <input type="reset" class="btn btn-sm btn-block btn" id="registrar" value="RESTAURAR" style="">
                                  </div>
                                  <div class="col-xs-6">
                                    <input type="submit" class="btn btn-sm btn-block btn-danger" id="registrar" value="REGISTRAR" style="">
                                  </div>
                                </div>
                              </div>
                          </div>

                      </form>

                  </div>
              </section>

          </div>


          <!-- Fin registro empresa-->
        </div>
      </div>
    </div>
  </div>
</div>
