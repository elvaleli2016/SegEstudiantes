<div class="container content-prin profile">
  <div class="row margin-top-10">
    <div class="headline-center-v2 headline-center-v2-dark margin-bottom-10">
      <h1 class="shop-h1" style="font-size: 30px;"><b>Registrar Empresa </b></h1>
      <span class="bordered-icon"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
    </div>
    <div class="col-md-12">
      <div class="row equal-height-columns margin-bottom-10">
        <div class="container">
          <!-- Registro empresa-->

          <div id="registrar_empresa">
              <section class="content-header">
                  <div class="row">
                      <div class="col-md-4 col-sm-4" id="contenido-cabecera">

                      </div>

                      <div class="col-md-offset-3 col-md-5 col-sm-4" id="msj">
                          @if (isset($msj))
                          <div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom : -5px;margin-top : -5px;z-index:2;">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                           {{$msj}}
                          </div>
                          @endif

                      </div>
                  </div>
              </section>
              <section style="padding : 10px 25px 25px 25px;">
                  <div class="col-md-12">
                      <form role="form" id="form-empresa" action="#" method="POST" id="form"  enctype="multipart/form-data">
                          <div class="box box-danger">
                              <input name="_token" type="hidden" value="{{ csrf_token() }}">
                              <div class="box-body">
                                  <div class="row">
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label>NIT</label>
                                              <input required type="number" class="form-control" name="nit" placeholder="Digita su NIT" value="">
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label>Nombre</label>
                                              <input required type="text" class="form-control" name="nombre" placeholder="Digita el nombre" value=''>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label>Representante</label>
                                              <input required type="text" class="form-control" name="representante" placeholder="Digita el representante" value="">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Ciudad</label>
                                            <input required type="text" class="form-control" name="ciudad" placeholder="Digita la ciudad" value="">
                                        </div>
                                    </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="exampleInputPassword1">Dirección</label>
                                              <input type="text" class="form-control" name="direccion"  placeholder="Digita la dirección">
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
