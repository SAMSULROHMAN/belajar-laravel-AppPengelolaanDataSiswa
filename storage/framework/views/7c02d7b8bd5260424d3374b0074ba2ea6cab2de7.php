<?php $__env->startSection('main'); ?>
    <div id="kelas">
        <h2>Kelas</h2>
        <?php echo $__env->make('_partial.flash_message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php if(count($kelas_list) > 0): ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kelas</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0
                    ?>
                    <?php $__currentLoopData = $kelas_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++$i); ?></td>
                            <td>
                                <?php echo e($kelas->nama_kelas); ?>

                            </td>
                            <td>
                                <div class="box-button">
                                    <?php echo e(link_to('kelas/'.$kelas->id.'/edit','Edit',['class' => 'btn btn-warning btn-sm'])); ?>

                                </div>
                                <div class="box-button">
                                    <?php echo Form::open(['method' => 'DELETE','action' => ['KelasController@destroy', $kelas->id]]); ?>

                                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']); ?>

                                    <?php echo Form::close(); ?>

                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Tidak ada data kelas</p>
        <?php endif; ?>

        <div class="button-nav">
            <a href="<?php echo e(route('kelas.create')); ?>" class="btn btn-primary">Tambah Kelas</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\belajar-laravel\resources\views/kelas/index.blade.php ENDPATH**/ ?>