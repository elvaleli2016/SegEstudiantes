<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<div class="container content-prin profile">
  <div class="row margin-top-10">
    <div class="headline-center-v2 headline-center-v2-dark margin-bottom-10">
      <h1 class="shop-h1" style="font-size: 30px;"><b>Listado Estudiantes </b></h1>
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
                <?php if(isset($msj)): ?>
                    <div class="alert alert-success alert-dismissible"  role="alert" style="margin-bottom : -5px;margin-top : -5px;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <?php echo e($msj); ?>

                    </div>
                <?php endif; ?>

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
                                        aria-label="Rendering engine: activate to sort column descending" style="width: 105px;">Nombres</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending" style="width: 150px;">Apellidos</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                        style="width: 131px;">Codigo</th>

                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending" style="width: 70px;">Acciones</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $estudiantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                    <tr role="row" class="usuario-<?php echo e($dato->id); ?>">
                                     <a href="#">
                                        <td><?php echo e($dato['nombre']); ?></td>
                                        <td><?php echo e($dato['apellido']); ?></td>
                                        <td><?php echo e($dato['codigo']); ?></td>
                                        <td><a style="color:#FFF" title="Editar" href="/editar-estudiante/<?php echo e($dato->id); ?>" class="btn btn-primary  btn-sm" data-original-title="Editar" data-toggle="tooltip" ><i class="fa fa-edit"></i></a>
                                        <button style="color:#FFF" title="Eliminar" id="eliminar-estudiante" data-original-title="Eliminar" data-id="<?php echo e($dato->id); ?>" data-toggle="tooltip" class="btn btn-danger btn-sm"> <i class="fa fa-times-circle"></i></button>
                                     </a>
                                    </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
