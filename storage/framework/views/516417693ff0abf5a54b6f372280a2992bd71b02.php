<?php $__env->startSection('style'); ?>
    <link type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('plugins/datepicker/datepicker3.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('app.pasantia.restore.agregar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript" src="https://select2.github.io/dist/js/select2.full.js"></script>
<link href="https://select2.github.io/dist/css/select2.min.css" type="text/css" rel="stylesheet" />
<script>
$('#empresa').change(function(){
  var datos="id="+$('#empresa').val();
  datos+="&_token="+$('#token').val();
  $.ajax({
            type:"POST",
            url:"/lista-convenio",
            dataType:'json',
            data:datos,
            success:function(response){
               console.log("Entre");
			         var select=$("#convenio");
               var options = select.attr('options');
               $('option', select).remove();
               response=response['convenio'];
               dato="";
      			   for(var i in response) {
                 dato+="<option value='"+response[i]['id']+"' >"+response[i]['concepto']+"</option>";
                }
                $("#convenio").append(dato);
              }

  });
});

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
<script type="text/javascript">
$(".js-example-basic-multiple").select2();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>