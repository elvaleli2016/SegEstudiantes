<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('app.convenio.restore.agregar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>

  $('body').on('focus', "input[name='fecha_ini']", function () {
      $(this).datepicker({
          autoclose: true
      });
  });
  $('body').on('focus', "input[name='fecha_fin']", function () {
      $(this).datepicker({
          autoclose: true
      });
  });


</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>