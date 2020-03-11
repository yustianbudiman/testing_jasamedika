<?php $__env->startSection('title'); ?>
home page
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="flex-center position-ref full-height">
    <h1><?php echo $title; ?></h1>
    <div class="content">
        <div class="title m-b-md">
        </div>
        <a href="<?php echo e(route('pasien/create')); ?>" class="btn btn-primary btn-sm">Add</a>
        <table class="table table-bordered table-striped">
        	<thead>
        		<th>ID</th>
                <th>ID Pasien</th>
        		<th>Nama Pasien</th>
        		<th>Alamat</th>
                <th>Telepon</th>
                <th>RT/RW</th>
                <th>Kelurahan</th>
                <th>Tanggal Lahir</th>
        		<th>Jenis Kelamin</th>
        		<th>Aksi</th>
        	</thead>
        	<tbody>
        		<?php $__currentLoopData = $pasien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        		<tr>
        			<td><?php echo e($c->id); ?></td>
                    <td><?php echo e($c->id_pasien); ?></td>
        			<td><?php echo e($c->nama_pasien); ?></td>
        			<td><?php echo e($c->alamat); ?></td>
                    <td><?php echo e($c->no_telepon); ?></td>
                    <td><?php echo e($c->rt_rw); ?></td>
                    <td><?php echo e($c->kelurahan); ?></td>
                    <td><?php echo e($c->tgl_lahir); ?></td>
        			<td><?php echo e($c->jenis_kelamin); ?></td>
        			<td>
        				<a href="./pasien/show/<?php echo e($c->id); ?>" class="btn btn-default btn-sm">Edit</a>
        				<a href="./pasien/delete/<?php echo e($c->id); ?>" class="btn btn-danger btn-sm">Delete</a>
        			</td>
        		</tr>
        		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        	</tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>