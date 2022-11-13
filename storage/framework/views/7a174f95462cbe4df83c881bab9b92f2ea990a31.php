<?php $__env->startSection('main'); ?>
    <div id="siswa">
        <h2>Tambah Data Siswa</h2>
        <?php echo Form::open(['url' => 'siswa','files' => true]); ?>

            <?php echo $__env->make('siswa.form',['submitButtonText' => 'Simpan'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\belajar-laravel\resources\views/siswa/create.blade.php ENDPATH**/ ?>