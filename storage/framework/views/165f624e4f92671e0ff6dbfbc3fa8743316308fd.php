<?php $__env->startSection('main'); ?>
    <div id="homepage">
        <h2>Siswa</h2>
        <?php echo $__env->make('_partial.flash_message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('siswa.form_pencarian', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php if(!empty($siswa_list)): ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Tgl Lahir</th>
                        <th>JK</th>
                        <th>Telepon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $siswa_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($siswa->nisn); ?></td>
                            <td><?php echo e($siswa->nama_siswa); ?></td>
                            <td><?php echo e($siswa->tanggal_lahir->format('d-m-Y')); ?></td>
                            <td><?php echo e($siswa->jenis_kelamin); ?></td>
                            <td><?php echo e(!empty($siswa->telepon->nomor_telepon) ? $siswa->telepon->nomor_telepon : '-'); ?></td>
                            <td>
                                <div class="box-button">
                                    <?php echo e(link_to('siswa/'.$siswa->id,'Detail',['class' => 'btn btn-success btn-sm'])); ?>

                                </div>
                                <div class="box-button">
                                    <?php echo e(link_to('siswa/'.$siswa->id.'/edit','Edit',['class' => 'btn btn-warning btn-sm'])); ?>

                                </div>
                                <div class="box-button">
                                    <?php echo Form::model($siswa,['method' => 'DELETE','action' => ['SiswaController@destroy',$siswa->id]]); ?>

                                        <?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']); ?>

                                    <?php echo Form::close(); ?>

                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Tidak Ada Data Siswa</p>
        <?php endif; ?>

        <div class="table-nav">
            <div class="jumlah-data">
                <strong>Jumlah Siswa : <?php echo e($jumlah_siswa); ?></strong>
            </div>
            <div class="paging">
                <?php echo e($siswa_list->links()); ?>

            </div>
        </div>
        <div class="botton-nav">
            <div>
                <a href="<?php echo e(route('siswa.create')); ?>" class="btn btn-primary">Tambah</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\belajar-laravel\resources\views/siswa/index.blade.php ENDPATH**/ ?>