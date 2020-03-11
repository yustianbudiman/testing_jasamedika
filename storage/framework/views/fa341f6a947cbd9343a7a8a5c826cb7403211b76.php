<?php $__env->startSection('title'); ?>
anggota page
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="flex-center position-ref full-height">
    <h1><?php echo $title; ?></h1>
    <div class="content">
        <div class="title m-b-md">
        	<form method="POST" action="anggota/create">
        		<?php echo csrf_field(); ?>
        		<input type="text" name="nama_anggota">
        		<input type="text" name="alamat">
        		<input type="text" name="no_telpon">
        		<button type="submit" name="simpan">simpan</button>
        	</form>
        		
        </div>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        	<?php echo e($row->nama_anggota); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>