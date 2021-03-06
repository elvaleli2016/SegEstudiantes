<div class="container content-prin profile">
  <div class="row margin-top-10">
    <div class="headline-center-v2 headline-center-v2-dark margin-bottom-10">
      <h1 class="shop-h1" style="font-size: 30px;"><b>Editar Empresa</b></h1>
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
                      <form role="form" id="form-empresa" action="../editar-empresa" method="POST" enctype="multipart/form-data">
                          <div class="box box-danger">
                              <input name="_token" type="hidden" value="{{ csrf_token() }}">
                              <input name="id" type="hidden" value="{{$empresa->id}}">
                              <div class="box-body">
                                  <div class="row">
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label>NIT</label>
                                              <input required type="text" class="form-control" name="nit" placeholder="Digita su NIT" value="{{$empresa->nit}}">
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label>Nombre</label>
                                              <input required type="text" class="form-control" name="nombre" placeholder="Digita el nombre" value='{{$empresa->nombre}}'>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label>Representante</label>
                                              <input required type="text" class="form-control" name="representante" placeholder="Digita el representante" value="{{$empresa->representante}}">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Telefono</label>
                                            <input required type="text" class="form-control" name="telefono" placeholder="Digita el telefono" value="{{$empresa->telefono}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Correo</label>
                                            <input required type="email" class="form-control" name="correo" placeholder="Digita el correo" value="{{$empresa->correo}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Ciudad</label>
                                            <input required type="text" class="form-control" name="ciudad" placeholder="Digita la ciudad" value="{{$empresa->ciudad}}">
                                        </div>
                                    </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="exampleInputPassword1">Dirección</label>
                                              <input type="text" class="form-control" name="direccion"  placeholder="Digita la dirección" value="{{$empresa->direccion}}">
                                          </div>
                                      </div>


                                  </div>

                              </div>


                              <!-- /.box-body -->
                              <div class="box-footer">
                                <div class="row">
                                  <div class="col-md-6">
                                    <input type="reset" class="btn btn-sm btn-block btn" id="restaurar" value="RESTAURAR" style="">
                                  </div>
                                  <div class="col-xs-6">
                                    <input type="submit" class="btn btn-sm btn-block btn-danger" id="registrar" value="MODIFICAR" style="">
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
