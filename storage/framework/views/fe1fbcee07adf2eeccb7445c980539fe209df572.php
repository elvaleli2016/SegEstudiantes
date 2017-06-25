<?php $__env->startSection('style'); ?>
    <link type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('plugins/datepicker/datepicker3.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('app.convenio.restore.agregar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
 $(function(){


      var currentDate = new Date();

    $("#fecha_ini").datepicker({
        format: 'yyyy-mm-dd',
        maxDate: 0,
        changeYear: true 
    }).attr('readonly', 'readonly');
    $("#fecha_ini").datepicker("setDate", currentDate);
    $("#fecha_fin").datepicker({
        format: 'yyyy-mm-dd',
        maxDate: 0,
        changeYear: true 
    }).attr('readonly', 'readonly');
    $("#fecha_fin").datepicker("setDate", currentDate);
});
  


</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>