<div class="container content-prin profile">
  <div class="row margin-top-10">
    <div class="headline-center-v2 headline-center-v2-dark margin-bottom-10">
      <h1 class="shop-h1" style="font-size: 30px;"><b>Editar Pasantia </b></h1>
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
                        @if (count($errors) > 0)
                        <div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom : -5px;margin-top : -5px;z-index:2;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                      </div>
                  </div>
              </section>
              <section style="padding : 10px 25px 25px 25px;">
                  <div class="col-md-12">
                      <form role="form" id="form-pasantia" action="../editar-pasantia" method="POST" enctype="multipart/form-data">
                          <div class="box box-danger">
                            <input name="id" type="hidden"  value="{{$pasantia->id}}">
                              <input name="_token" type="hidden" id="token" value="{{ csrf_token() }}">
                              <div class="box-body">
                                  <div class="row">
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label>Titulo</label>
                                              <input required type="text" class="form-control" name="titulo" placeholder="Titulo" value="{{$pasantia->titulo}}">
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label>Descripción</label>
                                              <input required type="text" class="form-control" name="descripcion" placeholder="Digita la descripciÓn" value='{{$pasantia->descripcion}}'>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label>Empresa</label>
                                              <select requerid class=" selectpicker form-control" style="width: 100%;" tabindex="-1" aria-hidden="true" name="empresa" id="empresa" data-live-search="true">

                                                  @foreach ($empresas as $dato)
                                                      <option data-tokens="{{$dato->id}}" value="{{$dato->id}}" @if($dato->id==$pasantia->empresa) selected @endif >{{$dato->nombre}}</option>
                                                  @endforeach
                                              </select>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label>Convenio</label>
                                              <select requerid class=" selectpicker form-control" style="width: 100%;" tabindex="-1" aria-hidden="true" name="convenio" id="convenio" data-live-search="true">
                                                @foreach ($convenios as $dato)
                                                    <option data-tokens="{{$dato->id}}" value="{{$dato->id}}" @if($dato->id==$pasantia->convenio) selected @endif >{{$dato->n_convenio}} - {{$dato->concepto}}</option>
                                                @endforeach
                                              </select>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label>Estudiante</label>
                                              <select requerid class=" selectpicker form-control" style="width: 100%;" tabindex="-1" aria-hidden="true" name="estudiante" data-live-search="true">
                                                  <option selected></option>
                                                  @foreach ($estudiantes as $dato)
                                                      <option data-tokens="{{$dato->id}}" value="{{$dato->id}}" @if($dato->id==$pasantia->estudiante) selected @endif >{{$dato->nombre}} {{$dato->apellido}}</option>
                                                  @endforeach
                                              </select>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label>Docente</label>
                                              <select requerid class=" selectpicker form-control" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tutor" data-live-search="true">
                                                  <option selected></option>
                                                  @foreach ($docentes as $dato)
                                                      <option data-tokens="{{$dato->id}}" value="{{$dato->id}}" @if($dato->id==$pasantia->tutor) selected @endif>{{$dato->nombre}} {{$dato->apellido}}</option>
                                                  @endforeach
                                              </select>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label>Tutor</label>
                                              <select requerid class=" selectpicker form-control" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tutor_emp" data-live-search="true">
                                                  <option selected></option>
                                                  @foreach ($tutores as $dato)
                                                      <option data-tokens="{{$dato->id}}" value="{{$dato->id}}" @if($dato->id==$pasantia->tutor_emp) selected @endif>{{$dato->nombre}} {{$dato->apellido}}</option>
                                                  @endforeach
                                              </select>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label>Fecha inicio</label>

                                              <div class="input-group date">
                                                  <div class="input-group-addon">
                                                      <i class="fa fa-calendar"></i>
                                                  </div>
                                                  <input required type="text" class="form-control pull-right" name="fecha_ini" id="datepicker" value="{{$pasantia->fecha_ini}}">
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
                                                  <input required type="text" class="form-control pull-right" name="fecha_fin" value="{{$pasantia->fecha_fin}}">
                                              </div>
                                              <!-- /.input group -->
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
                                    <input type="submit" class="btn btn-sm btn-block btn-danger" id="registrar" value="ACTUALIZAR" style="">
                                  </div>
                                </div>
                              </div>
                          </div>

                      </form>

                  </div>
              </section>

          </div>


          <!-- Fin registro empresa-->

          <div class="headline-center-v2 headline-center-v2-dark margin-bottom-10">
            <div  style="padding-top:30px"></div>
            <div class="margin" style="height: 2px;background-color: #e4e4e4;"></div>
            <h1  style="font-size: 20px;text-align: left;padding-left: 50px;"><b>Periodos </b></h1>
          </div>
          <div id="listar_pasantias">
              <section class="content-header">
                  <div class="row">
                      <div class="col-md-4 col-sm-4" id="contenido-cabecera">

                      </div>

                      <div class="col-md-offset-3 col-md-5 col-sm-4" id="msj">
                          @if (isset($msj))
                              <div class="alert alert-success alert-dismissible"  role="alert" style="margin-bottom : -5px;margin-top : -5px;">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      {{$msj}}
                              </div>
                          @endif

                      </div>
                  </div>
              </section>

              <section style="padding : 10px 25px 25px 25px;">
                  <div class="box box-danger">

                      <!-- /.box-header -->
                      <div class="box-body">
                          <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

                              <div class="row">
                                  <div class="col-sm-12">
                                      <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                          <thead>
                                          <tr role="row">
                                              <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending"
                                                  aria-label="Rendering engine: activate to sort column descending" style="width: 105px;">Fecha dia</th>
                                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                  aria-label="Browser: activate to sort column ascending" style="width: 150px;">Nota</th>
                                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                                  style="width: 131px;">Descripción</th>
                                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                  aria-label="CSS grade: activate to sort column ascending" style="width: 100px;">Archivo</th>
                                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                  aria-label="CSS grade: activate to sort column ascending" style="width: 70px;">Acciones</th>

                                          </tr>
                                          </thead>
                                          <tbody>
                                          @foreach ($periodos as $dato)


                                              <tr role="row">
                                               <a href="#">
                                                  <td>{{$dato['fecha_dia']}}</td>
                                                  <td>{{$dato['nota']}}</td>
                                                  <td>{{$dato['descripcion']}}</td>
                                                  <td>{{$dato['archivo']}}</td>
                                                  <td ></tr>

                                          @endforeach
                                          </tbody>
                                          <tfoot>

                                          </tfoot>
                                      </table>
                                  </div>
                              </div>

                          </div>
                      </div>
                      <!-- /.box-body -->
                  </div>
              </section>

          </div>


        </div>
      </div>
    </div>
  </div>
</div>
