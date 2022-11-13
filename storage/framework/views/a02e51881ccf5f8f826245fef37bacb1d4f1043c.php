<?php $__env->startSection('main'); ?>
    <div id="hobi">
        <h2>Hobi</h2>
        <?php echo $__env->make('_partial.flash_message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php if(count($hobi_list) > 0): ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Hobi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0;
                    ?>
                    <?php $__currentLoopData = $hobi_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hobi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++$i); ?></td>
                            <td><?php echo e($hobi->nama_hobi); ?></td>
                            <td>
                                <div class="box-button">
                                    <?php echo e(link_to('hobi/'.$hobi->id.'/edit','Edit',['class' => 'btn btn-warning btn-sm'])); ?>

                                </div>
                                <div class="box-button">
                                    <?php echo Form::open(['method' => 'DELETE','action' => ['HobiController@destroy',$hobi->id]]); ?>

                                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']); ?>

                                    <?php echo Form::close(); ?>

                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php else: ?>
            <p>Tidak Ada Data Hobi.....</p>
        <?php endif; ?>

        <div class="button-nav">
            <a href="<?php echo e(url('hobi.create')); ?>" class="btn btn-primary">Tambah</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\belajar-laravel\resources\views/hobi/index.blade.php ENDPATH**/ ?>