<?php if(Session::has('flash_message')): ?>
    <div class="alert alert-success <?php echo e(Session::has('penting') ? 'alert-important' : ''); ?>">
        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php echo e(Session::get('flash_message')); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\laragon\www\belajar-laravel\resources\views/_partial/flash_message.blade.php ENDPATH**/ ?>