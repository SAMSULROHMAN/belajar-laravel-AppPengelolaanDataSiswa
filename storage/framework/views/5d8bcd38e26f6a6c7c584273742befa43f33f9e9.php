<?php $__env->startSection('main'); ?>
<div id="kelas">
    <h2>Edit Kelas</h2>
    <?php echo Form::model($kelas,['method' => 'PATCH','action' => ['KelasController@update',$kelas->id]]); ?>

        <?php echo $__env->make('kelas.form',['submitButtonText' => 'Update'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo Form::close(); ?>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\belajar-laravel\resources\views/kelas/edit.blade.php ENDPATH**/ ?>