<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('app.empresa.restore.agregar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    var app = new Vue({
        el: "#registrar_cliente",
        data: {
            image: {},

        },
        methods: {
            loadImage: function () {
                var output = document.getElementById('preview');
                output.src = URL.createObjectURL(event.target.files[0]);
                this.image = event.target.files[0];
                console.log(output.src);
            },
        }
    });
  

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>