<?php $__env->startSection('title'); ?>
Kelurahan Add
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <h3><?php echo $title; ?></h3>
    
        	<form method="POST" action="store">
        		<?php echo csrf_field(); ?>
                <div class="form-group">
                    <label> Nama Kelurahan</label>
        		  <input type="text" name="nama_kelurahan">
        		</div>
                <div class="form-group">
                    <label> Nama Kecmatan</label>
                    <input type="text" name="nama_kecamatan">
        		</div>
                <div class="form-group">
                    <label> Nama Kota</label>
                    <input type="text" name="nama_kota">
        		</div>
                <div class="box-footer clearfix">
                  <button type="sumbit" class="pull-right btn btn-default" id="sendEmail">simpan
                    <i class="fa fa-arrow-circle-right"></i></button>
                </div>
        	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>