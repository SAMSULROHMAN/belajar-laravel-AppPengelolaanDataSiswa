<?php $__env->startSection('main'); ?>
    <div id="siswa">
        <h2>Tambah Siswa</h2>
        <?php echo Form::open(['url' => 'siswa']); ?>

            <div class="form-group">
                <?php echo Form::label('nisn', 'NISN:', ['class' => 'control-label']); ?>

                <?php echo Form::text('nisn', null, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('nama_siswa', 'Nama:', ['class' => 'control-label']); ?>

                <?php echo Form::text('nama_siswa', null, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('tanggal_lahir', 'Tanggal Lahir:', ['class' => 'control-label']); ?>

                <?php echo Form::date('tanggal_lahir', null, ['class' => 'form-control','id' => 'tanggal_lahir']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('jenis_kelamin', 'Jenis Kelamin', ['class' => 'control-label']); ?>

                <div class="radio">
                    <label>
                        <?php echo Form::radio('jenis_kelamin', 'L'); ?> Laki-Laki
                    </label>
                </div>
                <div class="radio">
                    <label for="">
                        <?php echo Form::radio('jenis_kelamin', 'P'); ?> Perempuan
                    </label>
                </div>
            </div>
            <div class="form-group">
                <?php echo Form::submit('Tambah Siswa', ['class' => 'btn btn-primary form-control']); ?>

            </div>
        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <div id="footer">
        <p>&copy; 2022 SiswakuApp</p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\belajar-laravel\resources\views/siswa/create.blade.php ENDPATH**/ ?>