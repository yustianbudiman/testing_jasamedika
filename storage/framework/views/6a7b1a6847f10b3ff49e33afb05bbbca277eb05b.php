<?php $__env->startSection('title'); ?>
anggota page
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="flex-center position-ref full-height">
    <h3><?php echo $title; ?></h3>
    <div class="content">
        <a href="anggota/create" class="pull-right btn btn-default"> Create <i class="fa fa-arrow-circle-right"></i></a>
        <table class="table table-bordered">
            <thead>
                <th>No</th>
                <th>nama anggota</th>
                <th>alamat</th>
                <th>no telepon</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php $no = 1; ?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($no); ?></td>
                    <td><?php echo e($row->nama_anggota); ?></td>
                    <td><?php echo e($row->alamat); ?></td>
                    <td><?php echo e($row->no_telpon); ?></td>
                    <td><a href="anggota/showone/<?php echo e($row->id_anggota); ?>">Edit</a></td>
                </tr>
                <?php $no++; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>