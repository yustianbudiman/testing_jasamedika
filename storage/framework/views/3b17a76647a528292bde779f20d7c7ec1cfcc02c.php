<?php $__env->startSection('title'); ?>
buku page
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <h3><?php echo $title; ?></h3>
    
        	<form method="POST" action="store">
        		<?php echo csrf_field(); ?>
                <div class="form-group">
        		  <input type="text" name="judul_buku">
        		</div>
                <div class="form-group">
                    <input type="text" name="pengarang">
        		</div>
                <div class="form-group">
                    <input type="text" name="penerbit">
        		</div>
                <div class="box-footer clearfix">
                  <button type="sumbit" class="pull-right btn btn-default" id="sendEmail">simpan
                    <i class="fa fa-arrow-circle-right"></i></button>
                </div>
        	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>