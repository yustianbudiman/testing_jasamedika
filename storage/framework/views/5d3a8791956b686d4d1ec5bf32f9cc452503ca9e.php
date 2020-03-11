<?php $__env->startSection('title'); ?>
buku page
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="flex-center position-ref full-height">
    <h3><?php echo $title; ?></h3>
    <div class="content">
        <a href="buku/create" class="pull-right btn btn-default"> Create <i class="fa fa-arrow-circle-right"></i></a>
        <table class="table table-bordered">
            <thead>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php $no=1;?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($no); ?></td>
                    <td><?php echo e($row->judul_buku); ?></td>
                    <td><?php echo e($row->pengarang); ?></td>
                    <td><?php echo e($row->penerbit); ?></td>
                    <td><a href="buku/showone/<?php echo e($row->id_buku); ?>">aksi</a></td>
                <tr>
                    <?php $no++; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>