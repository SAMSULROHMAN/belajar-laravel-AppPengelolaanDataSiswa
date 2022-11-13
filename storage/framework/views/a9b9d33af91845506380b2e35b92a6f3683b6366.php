<?php if(isset($kelas)): ?>
    <?php echo Form::hidden('id', $kelas->id); ?>

<?php endif; ?>

<?php if($errors->any()): ?>
    <div class="form-group <?php echo e($errors->has('nama_kelas') ? 'has-error' : 'has-success'); ?>">
<?php else: ?>
    <div class="form-group">
<?php endif; ?>
        <?php echo Form::label('nama_kelas', 'Nama Kelas:', ['class' => 'control-label']); ?>

        <?php echo Form::text('nama_kelas', null, ['class' => 'form-control']); ?>

        <?php if($errors->has('nama_kelas')): ?>
            <span class="help-block"><?php echo e($errors->first('nama_kelas')); ?></span>
        <?php endif; ?>
    </div>
<div class="form-group">
    <?php echo Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']); ?>

</div>

<?php /**PATH C:\laragon\www\belajar-laravel\resources\views/kelas/form.blade.php ENDPATH**/ ?>