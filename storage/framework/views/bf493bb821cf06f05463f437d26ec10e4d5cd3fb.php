<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo e(url('/')); ?>" class="navbar-brand">Laravel App</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php if(!empty($halaman) && $halaman == 'siswa'): ?>
                    <li class="active"><a href="<?php echo e(url('siswa')); ?>">Siswa
                            <span class="sr-only">(current)</span></a></li>
                <?php else: ?>
                    <li><a href="<?php echo e(url('siswa')); ?>">Siswa</a></li>
                <?php endif; ?>

                <?php if(!empty($halaman) && $halaman == 'kelas'): ?>
                    <li class="active">
                        <a href="<?php echo e(route('kelas.index')); ?>">
                            Kelas <span class="sr-only">(current)</span>
                        </a>
                    </li>
                <?php else: ?>
                    <li><a href="<?php echo e(url('kelas')); ?>">Kelas</a></li>
                <?php endif; ?>

                <?php if(!empty($halaman) && $halaman == 'hobi'): ?>
                    <li class="active">
                        <a href="<?php echo e(route('hobi.index')); ?>">
                            Hobi
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                <?php else: ?>
                    <li><a href="<?php echo e(url('hobi')); ?>">Hobi</a></li>
                <?php endif; ?>

                <?php if(!empty($halaman) && $halaman == 'about'): ?>
                    <li class="active"><a href="<?php echo e(url('about')); ?>">About
                            <span class="sr-only">(current)</span></a></li>
                <?php else: ?>
                    <li><a href="<?php echo e(url('about')); ?>">About</a></li>
                <?php endif; ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Login</a></li>
                <li class="dropdown"></li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\laragon\www\belajar-laravel\resources\views/navbar.blade.php ENDPATH**/ ?>