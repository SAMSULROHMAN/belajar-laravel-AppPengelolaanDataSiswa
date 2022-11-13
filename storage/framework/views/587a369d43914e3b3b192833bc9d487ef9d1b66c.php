<div id="pencarian">
    <?php echo Form::open(['url' => 'siswa/cari', 'method' => 'GET','id' => 'form-pencarian']); ?>

    <div class="row">
        <div class="col-md-2">
            <?php echo Form::select('id_kelas', $list_kelas, (!empty($id_kelas) ? $id_kelas : null), ['id' => 'id_kelas',
            'class' => 'form-control','placeholder' => '-Kelas-']); ?>

        </div>
        <div class="col-md-2">
            <?php echo Form::select('jenis_kelamin', ['L' => 'Laki-Laki','P' => 'Perempuan'], (!empty($jenis_kelamin) ? $jenis_kelamin : null),
            ['id' => 'jenis_kelamin','class' => 'form-control','placeholder' => '-Jenis Kelamin-']); ?>

        </div>
        <div class="col-md-8">
            <div class="input-group">
                <?php echo Form::text('kata_kunci', (!empty($kata_kunci) ? $kata_kunci : null), ['class' => 'form-control','placeholder' => '-Masukkan Nama Siswa-']); ?>

                <span class="input-group-btn">
                    <?php echo Form::button('Cari',['class' => 'btn btn-default','type' => 'submit']); ?>

                </span>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\belajar-laravel\resources\views/siswa/form_pencarian.blade.php ENDPATH**/ ?>