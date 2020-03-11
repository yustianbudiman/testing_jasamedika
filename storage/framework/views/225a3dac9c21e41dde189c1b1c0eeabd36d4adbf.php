<?php $__env->startSection('title'); ?>
home page
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="flex-center position-ref full-height">
    <h1><?php echo $title; ?></h1>
    <div class="content">
        <div class="title m-b-md">
        </div>
        <a href="<?php echo e(route('kelurahan/create')); ?>" class="btn btn-primary btn-sm">Add</a>
        <table class="table table-bordered table-striped">
        	<thead>
        		<th>ID</th>
        		<th>Kelurahan</th>
        		<th>Kecamatan</th>
        		<th>Kota</th>
        		<th>Aksi</th>
        	</thead>
        	<tbody>
        		<?php $__currentLoopData = $kelurahan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        		<tr>
        			<td><?php echo e($c->id); ?></td>
        			<td><?php echo e($c->nama_kelurahan); ?></td>
        			<td><?php echo e($c->nama_kecamatan); ?></td>
        			<td><?php echo e($c->nama_kota); ?></td>
        			<td>
        				<a href="./kelurahan/show/<?php echo e($c->id); ?>" class="btn btn-default btn-sm">Edit</a>
        				<a href="./kelurahan/delete/<?php echo e($c->id); ?>" class="btn btn-danger btn-sm">Delete</a>
        			</td>
        		</tr>
        		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        	</tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>