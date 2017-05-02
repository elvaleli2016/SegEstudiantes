<div class="container content-prin profile">
  <div class="row margin-top-10">
    <div class="headline-center-v2 headline-center-v2-dark margin-bottom-10">
      <h1 class="shop-h1" style="font-size: 30px;"><b>Registrar Convenio </b></h1>
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
                      <form role="form" id="form-convenio" action="agregar-convenio" method="POST" enctype="multipart/form-data" autocomplete="off">
                          <div class="box box-danger">
                              <input name="_token" type="hidden" value="{{ csrf_token() }}">
                              <div class="box-body">


                                  <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>No covenio</label>
                                            <input required type="text" class="form-control" name="n_convenio" placeholder="Numero de convenio" value="">
                                        </div>
                                    </div>

                                    <div class="col-xs-12"></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Empresa</label>
                                            <select requerid class=" selectpicker form-control" style="width: 100%;" tabindex="-1" aria-hidden="true" name="empresa" id="empresa" data-live-search="true">
                                                
                                                @foreach ($empresas as $dato)
                                                    <option data-tokens="{{$dato->id}}" value="{{$dato->id}}">{{$dato->nombre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="exampleInputPassword1">Concepto</label>
                                              <input type="text" class="form-control" name="concepto"  placeholder="Digita lel concepto">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="exampleInputPassword1">Palabra clave</label>
                                              <input type="text" class="form-control" name="palabras_clave"  placeholder="Digita la palabra clave">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="exampleInputPassword1">Costo</label>
                                              <input type="text" class="form-control" name="costo"  placeholder="Digita la palabra clave">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="exampleInputPassword1">Represntante empresa</label>
                                              <input type="text" class="form-control" name="representante_emp"  placeholder="Digita la representante empresa">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="exampleInputPassword1">Representante universidad</label>
                                              <input type="text" class="form-control" name="representante_uni"  placeholder="Digita la prepresentante universidad">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label>Fecha inicio</label>

                                              <div class="input-group date">
                                                  <div class="input-group-addon">
                                                      <i class="fa fa-calendar"></i>
                                                  </div>
                                                  <input required type="text" class="form-control pull-right" name="fecha_ini" id="datepicker"
                                                         value="">
                                              </div>
                                              <!-- /.input group -->
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label>Fecha fin</label>

                                              <div class="input-group date">
                                                  <div class="input-group-addon">
                                                      <i class="fa fa-calendar"></i>
                                                  </div>
                                                  <input required type="text" class="form-control pull-right" name="fecha_fin"
                                                         value="">
                                              </div>
                                              <!-- /.input group -->
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                        <label>Archivo</label>
                                        <div class="form-group">
                                          <input id="file-1" type="file" name="file" accept="image/png, image/jpeg, application/pdf, application/msword" class="file" multiple=true data-preview-file-type="any">
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
