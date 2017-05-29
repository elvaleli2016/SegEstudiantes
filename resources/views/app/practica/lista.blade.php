@extends('app')
@section('style')

@endsection

@section('content')

<div class="container content-prin profile">
  <div class="row margin-top-10">
    <div class="headline-center-v2 headline-center-v2-dark margin-bottom-10">
      <h1 class="shop-h1" style="font-size: 30px;"><b>Listado practicas </b></h1>
      <span class="bordered-icon"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
    </div>
    <div class="col-md-12">
      <div class="row equal-height-columns margin-bottom-10">
        <div class="container">


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
                                        aria-label="Rendering engine: activate to sort column descending" style="width: 105px;">Titulo</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="width: 150px;">Nombre estudiante</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                        style="width: 131px;">Nombre tutor</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending" style="width: 100px;">Convenio</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                                        style="width: 101px;">Año</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                                        style="width: 101px;">Semestre</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending" style="width: 70px;">Acciones</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($practicas as $dato)


                                    <tr role="row">
                                     <a href="#">
                                        <td>{{$dato['titulo']}}</td>
                                        <td>{{$dato['estudiante']}}</td>
                                        <td>{{$dato['tutor']}}</td>
                                        <td>{{$dato['concepto']}}</td>
                                        <td>{{$dato['ano']}}</td>
                                        <td>{{$dato['semestre']}}</td>
                                        <td>
                                          <a style="color:#FFF" href="/editar-practica/{{$dato->id}}" class="btn btn-primary  btn-sm" data-original-title="Editar" data-toggle="tooltip" ><i class="fa fa-edit"></i></a>
                                        <a style="color:#FFF" href="/entrega-pasantia/{{$dato->id}}" class="btn btn-success  btn-sm" data-original-title="Entrega" data-toggle="tooltip" ><i class="fa fa-plus"></i></a>
                                        @if(session('usuario')['tipo']!="docente")
                                        <a style="color:#FFF" href="/eliminar-practica/{{$dato->id}}" data-original-title="Eliminar" data-toggle="tooltip" class="btn btn-danger btn-sm" onclick="return confirm('Seguro desea eliminar la practica')" ><i class="fa fa-times-circle"></i></a>
                                        @endif
                                    </tr>

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


@endsection

@section('script')

@endsection
