<?php $__env->startSection('title'); ?>
peminjaman page
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="flex-center position-ref full-height">
    <h3><?php echo $title; ?></h3>
    <div class="content">
        <a href="peminjaman/create" class="pull-right btn btn-default"> Create <i class="fa fa-arrow-circle-right"></i></a>
        <table class="table table-bordered">
            <thead>
                <th>No</th>
                <th>Nama anggota</th>
                <th>Alamat</th>
                <th>Tanggal</th>
                <th>Judul Buku</th>
                <th>Jumlah</th>
            </thead>
            <tbody>
              <?php $no=1;?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($no); ?></td>
                    <td><?php echo e($row->nama_anggota); ?></td>
                    <td><?php echo e($row->alamat); ?></td>
                    <td>
                        <?php $__currentLoopData = getTotalCount($row->id_peminjaman); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span class="fa fa-book"></span> <?php echo e($key->judul_buku); ?><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <td><?php echo e($row->tanggal); ?></td>
                    <td><a href="buku/showone/<?php echo e($row->id_anggota); ?>">aksi</a></td>
                <tr>
                    <?php $no++; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>