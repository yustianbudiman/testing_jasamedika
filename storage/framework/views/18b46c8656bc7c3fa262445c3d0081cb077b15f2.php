<?php $__env->startSection('title'); ?>
keurahan update
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <h3><?php echo $title; ?></h3>
    
        	<form method="POST" action="../update">
        		<?php echo csrf_field(); ?>

                <div class="form-group">
                  <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                  <input type="text" value="<?php echo $data->nama_kelurahan; ?>" name="nama_kelurahan">
                </div>
                <div class="form-group">
                    <input type="text" value="<?php echo $data->nama_kecamatan; ?>" name="nama_kecamatan">
                </div>
                <div class="form-group">
                    <input type="text" value="<?php echo $data->nama_kota; ?>" name="nama_kota">
                </div>
                <div class="box-footer clearfix">
                  <button type="sumbit" class="pull-right btn btn-default" id="sendEmail">simpan
                    <i class="fa fa-arrow-circle-right"></i></button>
                </div>
        	</form>
        		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>