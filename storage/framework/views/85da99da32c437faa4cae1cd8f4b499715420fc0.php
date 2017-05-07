<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('app.practica.restore.agregar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
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

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>