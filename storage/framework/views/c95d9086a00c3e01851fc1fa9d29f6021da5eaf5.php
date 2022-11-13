<?php $__env->startSection('main'); ?>
    <div id="about">
        <h2>About</h2>
        <p>Aplikasi <strong>LaravelApp</strong> dibuat sebagai
        Latihan untuk mempelajari Laravel
        </p>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
    <div id="footer">
        <p>&copy; 2022 laravelapp.dev</p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\belajar-laravel\resources\views/pages/about.blade.php ENDPATH**/ ?>