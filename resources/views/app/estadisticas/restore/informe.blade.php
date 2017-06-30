
<div class="container content-prin profile">
    <div class="row margin-top-10">
        <div class="headline-center-v2 headline-center-v2-dark margin-bottom-10">
            <h1 class="shop-h1" style="font-size: 30px;"><b>Informes </b></h1>
            <span class="bordered-icon"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
        </div>
        <div class="col-md-12">
            <div class="row equal-height-columns margin-bottom-10">
                <div class="container">


<div id="listar_estudiantes">
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
                            <div class="col-md-2">
                                <div class="form-group">
                                  <input id="_token" name="_token" type="hidden" value="{{ csrf_token() }}">
                                  <label for="empresa">Tipo informe:</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class=" selectpicker form-control" style="width:100%"  tabindex="-1" aria-hidden="true" name="tipo" id="tipo" data-live-search="true">

                                        <option value="pasantia">Pasantia</option>
                                        <option value="practica">Practica</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="empresa">Tipo busqueda:</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class=" selectpicker form-control" style="width:100%"  tabindex="-1" aria-hidden="true" name="tipo-busqueda" id="tipo-busqueda" data-live-search="true">

                                        <option value="convenio">Convenio</option>
                                        <option value="empresa">Empresa</option>
                                        <option value="estudiante">Estudiante</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12" style="padding:5px"></div>
                            <div class="col-xs-12" style="padding:5px"></div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label >Activar fechas:</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="checkbox" class="form-control" id="tipo_fecha" name="tipo_fecha" value="1">
                                    </div>
                                </div>

                             <div class="col-xs-12" style="padding:5px"></div>   
                            <div>
                            <div id="idFechas">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Fecha inicio</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">           
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input required type="text" class="form-control pull-right" name="fecha_ini" id="fecha_ini"
                                                value="">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Fecha fin</label>
                                    </div>
                                </div>
                                <div class="col-md-4">        
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input required type="text" class="form-control pull-right" name="fecha_fin" id="fecha_fin"
                                                 value="">
                                        </div>
                                            <!-- /.input group -->
                                    </div>
                                </div>
                            </div>

                            <div id="idSemestre">  
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Año:</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">           
                                        <div class="input-group date">
                                            <input required type="number" class="form-control pull-right" name="ano" id="ano" value="2017">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Semestre:</label>
                                    </div>
                                </div>
                                <div class="col-md-4">        
                                        <div class="input-group date">
                                            <input required type="number" class="form-control pull-right" name="semestre" id="semestre" value="1">
                                        </div>
                                            <!-- /.input group -->
                                    </div>
                                </div> 
                            </div>

                                <div class="col-xs-12" style="padding:5px"></div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label >Busqueda:</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="busqueda" name="busqueda" placeholder="busqueda" required>
                                    </div>
                                </div>
                                
                            </div>

                            
                            <div class="col-xs-12" style="height:20px"></div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                <button id="buscar-informe" class="btn btn-success btn-flat" style="width:100%">BUSCAR</button>
                                </div>
                            </div>
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






<div class="container content-prin profile">
  <div class="row margin-top-10">
    <div class="headline-center-v2 headline-center-v2-dark margin-bottom-10">
      <span class="bordered-icon"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
    </div>
    <div class="col-md-12">
      <div class="row equal-height-columns margin-bottom-10">
        <div class="container">


<div id="empresa">
    <section style="padding : 10px 25px 25px 25px;">
        <div class="box box-danger">

            <!-- /.box-header -->
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example0" cellspacing="0" width="100%" class="table table-bordered table-striped display nowrap" role="grid" aria-describedby="example0_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example0" rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending" style="width: 105px;">Nombre</th>
                                    <th class="sorting" tabindex="0" aria-controls="example0" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="width: 150px;">NIT</th>
                                    <th class="sorting" tabindex="0" aria-controls="example0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                        style="width: 131px;">Representante</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending" style="width: 100px;">Ciudad</th>
                                    <th class="sorting" tabindex="0" aria-controls="example0" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                                        style="width: 101px;">Dirección</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending" style="width: 100px;">Telefono</th>
                                    <th class="sorting" tabindex="0" aria-controls="example0" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                                        style="width: 101px;">Correo</th>

                                </tr>
                                </thead>
                                <tbody id="table_empresa">

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

<div id="persona">
    <section style="padding : 10px 25px 25px 25px;">
        <div class="box box-danger">

            <!-- /.box-header -->
            <div class="box-body">
                <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" cellspacing="0" width="100%" class="table table-bordered table-striped display nowrap" role="grid" aria-describedby="example2_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending" style="width: 105px;">Nombres</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="width: 150px;">Apellidos</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                        style="width: 131px;">Codigo</th>

                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending" style="width: 70px;"></th>

                                </tr>
                                </thead>
                                <tbody id="table-persona">
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </section>

</div>

<div id="pasantia">


    <section style="padding : 10px 25px 25px 25px;">
        <div class="box box-danger">

            <!-- /.box-header -->
            <div class="box-body">
                <div id="example3_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example3" cellspacing="0" width="100%" class="table table-bordered table-striped display nowrap" role="grid" aria-describedby="example3_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="width: 150px;">Nombre estudiante</th>
                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="width: 150px;">Código del estudiante</th>
                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="width: 150px;">Número documento identificación</th>
                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="width: 150px;">Programa academico</th>
                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="width: 150px;">Registro SNIES</th>                          
                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="width: 150px;">Nivel de formación</th>                          
                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="width: 150px;">Modalidad programa</th>                          
                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="width: 150px;">Forma de participación</th>                          
                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="width: 150px;">Codigo asignatura</th>                          
                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                                        style="width: 101px;">Empresa</th>
                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                                        style="width: 101px;">Fecha inicio</th>
                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending" style="width: 70px;">Fecha fin</th>
                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending" style="width: 70px;">Facultad</th>
                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending" style="width: 100px;">Convenio</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending" style="width: 105px;">Titulo</th>
                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                        style="width: 131px;">Director</th>    
                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                        style="width: 131px;">Tutor Empresa</th>    
                                                        
                                </tr>
                                </thead>
                                <tbody id="table_pasantia">
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

<div id="practica">


    <section style="padding : 10px 25px 25px 25px;">
        <div class="box box-danger">

            <!-- /.box-header -->
            <div class="box-body">
                <div id="" class="dataTables_wrapper form-inline dt-bootstrap">

                    <div class="row">
                        <div class="col-sm-12">
                             <table id="example1" cellspacing="0" width="100%" class="table table-bordered table-striped display nowrap" role="grid" aria-describedby="example1_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="width: 150px;">Nombre estudiante</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="width: 150px;">Código del estudiante</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="width: 150px;">Número documento identificación</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="width: 150px;">Programa academico</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="width: 150px;">Registro SNIES</th>                          
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="width: 150px;">Nivel de formación</th>                          
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="width: 150px;">Modalidad programa</th>                          
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="width: 150px;">Forma de participación</th>                          
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="width: 150px;">Codigo asignatura</th>                          
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                                        style="width: 101px;">Empresa</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                                        style="width: 101px;">Año</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending" style="width: 70px;">Semestre</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending" style="width: 70px;">Facultad</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending" style="width: 100px;">Convenio</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending" style="width: 105px;">Titulo</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                        style="width: 131px;">Director</th>    
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                        style="width: 131px;">Tutor Empresa</th>    
                                                        
                                </tr>
                                </thead>
                                <tbody id="table_pasantia">
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
<div id="convenio">


    <section style="padding : 10px 25px 25px 25px;">
        <div class="box box-danger">

            <!-- /.box-header -->
            <div class="box-body">
                <div id="" class="dataTables_wrapper form-inline dt-bootstrap">

                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example4" cellspacing="0" width="100%" class="table table-bordered table-striped display nowrap" role="grid" aria-describedby="example4_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example4
                                    4" rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending" style="width: 105px;">Nº Convenio</th>
                                    <th class="sorting" tabindex="0" aria-controls="example4
                                    4" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="width: 150px;">Empresa</th>
                                    <th class="sorting" tabindex="0" aria-controls="example4
                                    4" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                        style="width: 131px;">Concepto</th>
                                    <th class="sorting" tabindex="0" aria-controls="example4
                                    4" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending" style="width: 100px;">Representante Empresa</th>
                                    <th class="sorting" tabindex="0" aria-controls="example4
                                    4" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                                        style="width: 101px;">Representante Universidad</th>
                                    <th class="sorting" tabindex="0" aria-controls="example4
                                    4" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                                        style="width: 101px;">Fecha Inicio</th>
                                    <th class="sorting" tabindex="0" aria-controls="example4
                                    4" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending" style="width: 70px;">Fecha Fin</th>

                                </tr>
                                </thead>
                                <tbody id="table_convenio">
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





